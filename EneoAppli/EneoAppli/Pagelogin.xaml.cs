using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Navigation;
using Microsoft.Phone.Controls;
using Microsoft.Phone.Shell;

namespace EneoAppli
{
    public partial class Pagelogin : PhoneApplicationPage
    {
        public Pagelogin()
        {
            InitializeComponent();
        }

        private void ced(object sender, System.Windows.Input.GestureEventArgs e)
        {
          

            if (ce.Text=="admin"  )
            {
                MessageBox.Show("Vous avez sauvegardé votre travail,voulez-vous vraiment quitter cette page ?", "Attention",
MessageBoxButton.OKCancel);
                NavigationService.Navigate(new Uri("/choixmenu.xaml?admin="+ce.Text, UriKind.Relative));
            }
            

        }
    }
}