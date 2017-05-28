<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace IMIE\FicheblockBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this
            ->get('templating')
            ->render('IMIEFicheblockBundle:ViewUsers:index.html.twig', array('nom' => 'winzou'));
    
    return new Response($content);
  }
}

