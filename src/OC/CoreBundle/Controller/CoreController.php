<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller {

    public function indexAction(){
        return $this->render('OCCoreBundle:index:index.html.twig');
    }

    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $session->getFlashBag()->add('info', 'Pas de formulaire de contact pour linstant.');
        // Puis on redirige vers la page d'acceuil de cettte annonce
        return $this->redirectToRoute('oc_core_home');
    }
}

