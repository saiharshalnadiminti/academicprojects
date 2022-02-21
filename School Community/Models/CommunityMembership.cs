//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace Lab4.Models
{
    public class CommunityMembership
    {
        public int studentID { get; set; }

        public string communityID { get; set; }

        public Student Student { get; set; }
        public Community Community { get; set; }
    }
}
