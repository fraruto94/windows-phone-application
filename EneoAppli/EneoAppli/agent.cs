using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using SQLite;
using System.Windows.Media.Imaging;

namespace testverif
{
    class agent
    {
        [PrimaryKey, AutoIncrement]
        public int IDagent { get; set; }
        public string nom { get; set; }
        public string prenom { get; set; }
        public string sexe { get; set; }[MaxLength (1)]
        public string email { get; set; }

       

        public override string ToString()
        {
            return IDagent + "    :   " + nom + "   :  " + prenom+ "   :  " +sexe+ "   :  " +email+" :";
        }





    }
}
