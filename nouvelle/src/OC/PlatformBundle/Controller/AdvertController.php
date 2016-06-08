<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
      
      
    // Notre liste d'annonce en dur
    $listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime()),
        array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
   
    );

    // Et modifiez le 2nd argument pour injecter notre liste
    return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts
    ));

   
    }
    
    
     public function goAction()
    {
    
      
      return new Response("sayonara");
      
     
     //   return new Response($content);
    }
    
    public function viewAction($id){
      
        //return $this->redirectToRoute('oc_platform_home');
       // $response = new Response(json_encode(array('id' => $id)));
        
      //  $tag=$request->query->get('tag');
     ///    $response->headers->set('Content-Type', 'application/json');

    //return $response;
     //     return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
     // 'id'  => $id,
     // 'tag' => $tag,
    //));
        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'id' => $id
    ));
        
  
    }
    
    
    
     public function deleteAction($id){
        
        
        
        return new Response("la nouvelle route detruite ".$id);
        
    }
 
    
    
    
    
    
    
    
    public function viewSlugAction($lug,$year,$format){
        
        
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
        
        
    }
    
    
    
    public function addAction(Request $request){
        
       
        
        
         $session = $request->getSession();
    
    // Bien sûr, cette méthode devra réellement ajouter l'annonce
    
    // Mais faisons comme si c'était le cas
    $session->getFlashBag()->add('info', 'Annonce bien enregistrée');

    // Le « flashBag » est ce qui contient les messages flash dans la session
    // Il peut bien sûr contenir plusieurs messages :
    $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');

    // Puis on redirige vers la page de visualisation de cette annonce
    return $this->redirectToRoute('oc_platform_view', array('id' => 5));
    }
    
    
     public function menuAction($limit)
  {
    // On fixe en dur une liste ici, bien entendu par la suite
    // on la récupérera depuis la BDD !
    $listAdverts = array(
      array('id' => 2, 'title' => 'construction à energie positive'),
      array('id' => 5, 'title' => 'equipements solaire'),
      array('id' => 9, 'title' => 'centrales solaires'),
         array('id' => 10, 'title' => 'historique'),
         array('id' => 11, 'title' => 'ingenierie et recherche'),
            array('id' => 11, 'title' => 'contactez nous'),
        
        
    );

    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listAdverts' => $listAdverts
    ));
  }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

