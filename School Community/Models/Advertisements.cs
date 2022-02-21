//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace Lab4.Models
{
    
    public class Advertisements
    {

        // For reference, I used your github sample code https://github.com/aarad-ac/AzureStorageAndMigrations/blob/main/AzureStorageAndMigrations/Models/Smiley.cs
        public int AdvertId
        {
            get;
            set;
        }

        [Required]
        [DisplayName("File Name")]
        public string FileName
        {
            get;
            set;
        }

        [Required]
        [Url]
        public string Url
        {
            get;
            set;
        }

        
    }
}