<?php

namespace PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PruebaBundle\Entity\Eventos;
use PruebaBundle\Form\EventosType;

class EventosController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('PruebaBundle:Eventos');
        // find *all* events
        $events = $repository->findAll();
        return $this->render('PruebaBundle:Eventos:all.html.twig',array("eventos"=>$events ));
    }
    public function nuevoAction()
    {
      $evento = new Eventos();
      $form= $this->createForm(EventosType::class,$evento);
      return $this->render('PruebaBundle:Eventos:nuevo.html.twig',array("form"=>$form->createView() ));
    }
}
