<?php

namespace GFS\attestationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AttestationController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liste = $em->getRepository('GFSstatistiquesBundle:Etudiant')->getAllEtudiantForStat();
        //dump($liste);die();
        return $this->render('GFSattestationBundle:Attestation:index.html.twig', array(
            'liste' => $liste,
        ));
    }

    public function attestationPassageAction($id){
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('GFSstatistiquesBundle:Etudiant')->getEtudiant($id);
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('GFSattestationBundle:Attestation:attestation_reussite.html.twig', array(
            'etudiant' => $etudiant,
        ));
        //on appelle le service html2pdf
        $html2pdf = $this->get('html2pdf_factory')->create();
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
        //Output envoit le document PDF au navigateur internet
        return new Response($html2pdf->Output('attestation.pdf'), 200, array('Content-Type' => 'application/pdf'));
    }

    public function attestationReussiteAction($id){
      $em = $this->getDoctrine()->getManager();
      $etudiant = $em->getRepository('GFSstatistiquesBundle:Etudiant')->getEtudiant($id);
      //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
      $html = $this->renderView('GFSattestationBundle:Attestation:attestation_passage.html.twig', array(
          'etudiant' => $etudiant,
      ));
      //on appelle le service html2pdf
      $html2pdf = $this->get('html2pdf_factory')->create();
      //real : utilise la taille réelle
      $html2pdf->pdf->SetDisplayMode('real');
      //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
      $html2pdf->writeHTML($html);
      //Output envoit le document PDF au navigateur internet
      return new Response($html2pdf->Output('attestation.pdf'), 200, array('Content-Type' => 'application/pdf'));
    }

}
