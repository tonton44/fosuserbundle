<?php

namespace IMIE\FicheblockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IMIEFicheblockBundle:Default:index.html.twig');
    }
}
