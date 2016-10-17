<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PruebaBundle:Default:index.html.twig');
    }
    public function contactarAction($lugar)
    {
        if($lugar=='vlc'){
          return $this->redirect($this->generateUrl('prueba_contactar_vlc'));
        }elseif ($lugar=='mdr') {
          return $this->render('PruebaBundle:Default:index.html.twig');
        }else{
          throw $this->createNotFoundException('THAS EQUIVOCAO');
        }
    }
    public function contactarVlcAction()
    {
        return $this->render('PruebaBundle:Default:contactarVlc.html.twig');
    }
    public function nombreAction($nPila)
    {
        return $this->render('PruebaBundle:Default:nombre.html.twig',array('nPila'=>$nPila));
    }
    public function nombreRAction($nPila)
    {
        return new Response('<html><head><body><h2>Hola '.$nPila.'</h2></body></head></html>');
    }
}
