//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace Lab4.Models.ViewModels
{
    public class CommunityViewModel
    {
        public IEnumerable<Student> Students { get; set; }
        public IEnumerable<Community> Communities { get; set; }

        public IEnumerable<CommunityMembership> CommunityMemberships
        {
            get;
            set;
        }

    }
}
