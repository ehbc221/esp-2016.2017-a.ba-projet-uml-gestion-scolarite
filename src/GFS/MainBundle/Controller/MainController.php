<?php
namespace GFS\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use GFS\statistiquesBundle\Entity\Etudiant;
use GFS\statistiquesBundle\Entity\Niveau;
use GFS\statistiquesBundle\Entity\Formation;
use GFS\statistiquesBundle\Entity\NiveauEtudiant;
use GFS\statistiquesBundle\Form\EtudiantType;
use GFS\MainBundle\Entity\User;    

class MainController extends controller {
   
    public function indexAction() {
        
        return $this->render('GFSMainBundle::index.html.twig');
    }     
    
    public function loginAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('gfs_main_homepage');
            }else
                return $this->redirectToRoute('gfs_main_homepage');
        }
        
        $authenticationUtils = $this->get('security.authentication_utils');
        
        return $this->render('GFSMainBundle::login.html.twig', array(
            'error'=> $authenticationUtils->getLastAuthenticationError(), 
            'lastUsername' => $authenticationUtils->getLastUsername()
        ));
    }     
}
?>