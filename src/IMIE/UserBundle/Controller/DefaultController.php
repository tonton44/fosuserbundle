<?php

namespace IMIE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IMIEUserBundle:Default:index.html.twig');
    }
}
