<?php

namespace Unicef\UnicefBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('UnicefBundle:Acceuil:acceuil.html.twig');
    }
}
