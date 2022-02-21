//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using Lab4.Data;
using Lab4.Models;
using Lab4.Models.ViewModels;

namespace Lab4.Controllers
{
    public class StudentsController : Controller
    {
        private readonly SchoolCommunityContext _context;

        public StudentsController(SchoolCommunityContext context)
        {
            _context = context;
        }

        // GET: Students
        //public async Task<IActionResult> Index()
        //{
        //    return View(await _context.Students.ToListAsync());
        //}
        public async Task<IActionResult> Index(int id)
        {
            CommunityViewModel cvm = new CommunityViewModel();

            cvm.Students = await _context.Students
                   .Include(i => i.CommunityMembership)
                        .ThenInclude(i => i.Community)
                  .AsNoTracking()
                  .OrderBy(i => i.firstName)
                  .ToListAsync();

            if (id > 0)
            {
                ViewData["StudentID"] = id;
                cvm.CommunityMemberships = cvm.Students.Where(i => i.id == id).Single().CommunityMembership;

                return View(cvm);
            }

            return View(cvm);
        }


        // GET: Students/Details/5
        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var student = await _context.Students
                .FirstOrDefaultAsync(m => m.id == id);
            if (student == null)
            {
                return NotFound();
            }

            return View(student);
        }

        // GET: Students/Create
        public IActionResult Create()
        {
            return View();
        }

        public async Task<IActionResult> Select()
        {
            return View(await _context.Communities.ToListAsync());
        }

        // POST: Students/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("id,lastName,firstName,startDate")] Student student)
        {
            if (ModelState.IsValid)
            {
                _context.Add(student);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(Index));
            }
            return View(student);
        }

        // GET: Students/Edit/5
        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var student = await _context.Students.FindAsync(id);
            if (student == null)
            {
                return NotFound();
            }
            return View(student);
        }

        // POST: Students/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("id,lastName,firstName,startDate")] Student student)
        {
            if (id != student.id)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(student);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!StudentExists(student.id))
                    {
                        return NotFound();
                    }
                    else
                    {
                        throw;
                    }
                }
                return RedirectToAction(nameof(Index));
            }
            return View(student);
        }

        // GET: Students/Edit/5
        public async Task<IActionResult> EditMemberships(int id)
        {
            CommunityViewModel cvm = new CommunityViewModel();
            cvm.CommunityMemberships = await _context.CommunityMemberships.Where(i => i.studentID == id)
                     .ToListAsync();
            cvm.Students = await _context.Students.Where(i => i.id == id)
                   .ToListAsync();

            cvm.Communities = await _context.Communities
                  .ToListAsync();


            return View(cvm);
        }

        // GET: Students/Edit/5
        public async Task<IActionResult> RegisterMemberships(int studentId, string communityId)
        {
            CommunityMembership cms = new CommunityMembership();
            cms.communityID = communityId;
            cms.studentID = studentId;
            _context.CommunityMemberships.Add(cms);
            await _context.SaveChangesAsync();

            return RedirectToAction("EditMemberships", new { id = studentId });
        }

        // GET: Students/Edit/5
        public async Task<IActionResult> UnregisterMemberships(int studentId, string communityId)
        {
            CommunityMembership cms = new CommunityMembership();
            cms.communityID = communityId;
            cms.studentID = studentId;
            _context.CommunityMemberships.Remove(cms);
            await _context.SaveChangesAsync();

            return RedirectToAction("EditMemberships", new { id = studentId });
        }

        // GET: Students/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var student = await _context.Students
                .FirstOrDefaultAsync(m => m.id == id);
            if (student == null)
            {
                return NotFound();
            }

            return View(student);
        }

        // POST: Students/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var student = await _context.Students.FindAsync(id);
            _context.Students.Remove(student);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool StudentExists(int id)
        {
            return _context.Students.Any(e => e.id == id);
        }

        public IActionResult Error()
        {
            return View();
        }


    }
}
