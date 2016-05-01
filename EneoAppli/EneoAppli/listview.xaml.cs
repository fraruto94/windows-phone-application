using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Navigation;
using Microsoft.Phone.Controls;
using Microsoft.Phone.Shell;

namespace testverif
{
    public partial class listview : PhoneApplicationPage
    {
        public listview()
        {
            InitializeComponent();
        

          hes.ItemsSource = App.db.Query<agent>("select *from agent");
           
          
            
        }


    }
}