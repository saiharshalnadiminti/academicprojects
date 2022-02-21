//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Lab4.Models;

namespace Lab4.Data
{
    public static class DbInitializer
    {
        public static void Initialize(SchoolCommunityContext context)
        {
            context.Database.EnsureCreated();

            if (context.Students.Any())
            {
                return;   // DB has been seeded
            }

            var students = new Student[]
            {
            new Student{firstName="Carson",lastName="Alexander",startDate=DateTime.Parse("2005-09-01")},
            new Student{firstName="Meredith",lastName="Alonso",startDate=DateTime.Parse("2002-09-01")},
            new Student{firstName="Arturo",lastName="Anand",startDate=DateTime.Parse("2003-09-01")},
            new Student{firstName="Gytis",lastName="Barzdukas",startDate=DateTime.Parse("2002-09-01")},
            };
            foreach (Student s in students)
            {
                context.Students.Add(s);
            }
            context.SaveChanges();

            var communities = new Community[]
            {
            new Community{ID="A1",title="Alpha",Budget=300},
            new Community{ID="B1",title="Beta",Budget=130},
            new Community{ID="O1",title="Omega",Budget=390},
            };
            foreach (Community c in communities)
            {
                context.Communities.Add(c);
            }
            context.SaveChanges();

            var memberships = new CommunityMembership[]
            {
            new CommunityMembership{studentID=1,communityID="A1"},
            new CommunityMembership{studentID=1,communityID="B1"},
            new CommunityMembership{studentID=1,communityID="O1"},
            new CommunityMembership{studentID=2,communityID="A1"},
            new CommunityMembership{studentID=2,communityID="B1"},
            new CommunityMembership{studentID=3,communityID="A1"},
            };
            foreach (var m in memberships)
            {
                context.CommunityMemberships.Add(m);
            }
            context.SaveChanges();

        }
    }

}
