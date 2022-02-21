//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using Lab4.Models;
using Microsoft.EntityFrameworkCore;

namespace Lab4.Data
{
    public class SchoolCommunityContext : DbContext
    {
        public SchoolCommunityContext(DbContextOptions<SchoolCommunityContext> options) : base(options)
        {
        }

        public DbSet<Community> Communities { get; set; }
        public DbSet<Student> Students { get; set; }
        public DbSet<CommunityMembership> CommunityMemberships
        {
            get;
            set;
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Community>().ToTable("Community"); //table name shouldn't be plural that's why it's community and student
            modelBuilder.Entity<Student>().ToTable("Student");
            modelBuilder.Entity<CommunityMembership>().ToTable("CommunityMembership");
            modelBuilder.Entity<CommunityMembership>()  //CommunityMembership should have a composite key of StudentId and CommunityId:
                .HasKey(c => new { c.studentID, c.communityID });


        }
    }
}
