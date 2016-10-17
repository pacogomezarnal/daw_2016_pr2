<?php

namespace OtraPruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="otraprueba_home")
     */
    public function indexAction()
    {
        return $this->render('OtraPruebaBundle:Default:index.html.twig');
    }
    /**
     * @Route("/nombre/{nPila}", name="otraprueba_nombre")
     */
    public function nombreAction($nPila='Sin Nombre')
    {
        return $this->render('OtraPruebaBundle:Default:nombre.html.twig',array('nPila'=>$nPila));
    }

    /**
     * @Route("/nombre/", name="otraprueba_nombre_sin_paramatro")
     */
    public function nombreSinParamAction()
    {
        return $this->render('OtraPruebaBundle:Default:index.html.twig');
    }
}
