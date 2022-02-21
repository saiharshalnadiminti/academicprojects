//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace Lab4.Models.ViewModels
{
    public class CommunityMembershipViewModel
    {
        public string communityId
        {
            get;
            set;
        }

        public string title
        {
            get;
            set;
        }

        public bool isMember
        {
            get;
            set;
        }
    }
}
