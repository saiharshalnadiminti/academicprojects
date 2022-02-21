//Reference Link: https://github.com/aarad-ac/EFCore
//Reference Link: https://github.com/aarad-ac/AzureStorageAndMigrations
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace Lab4.Models
{
    public class Student
    {
        public int id { get; set; }
        public ICollection<CommunityMembership> CommunityMembership{    get;    set;    }

        /**
         * ii.	string LastName
            1.	Add the ‘Required’ attribute
            2.	Add the ‘StringLength’ attribute, with a value of 50
            3.	Set the display name to ‘Last Name’

         */
        [Required]
        [StringLength(50)]
        [Display(Name = "Last Name")]
        public string lastName { get; set; }

        [Required]
        [StringLength(50)]
        [Display(Name = "First Name")]
        public string firstName { get; set; }

        /**
         * iv.	DateTime EnrollmentDate
        	Set the attributes:
	        [DataType(DataType.Date)]
	        [DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
	        [Display(Name = "Enrollment Date")]

         */
        [DataType(DataType.Date)]
        [DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
        [Display(Name = "Enrollment Date")]

        public DateTime? startDate { get; set; }

        [Display(Name = "Name")]
        public string fullName
        {
            get
            {
                return lastName + "," + firstName;
            }
        }

    }
}
