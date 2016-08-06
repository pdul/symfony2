<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WiewsController extends Controller
{
  /**
  * @Route("/render")
  *
  */
  public function renderAction(){
    return $this->render('Wiews/wiew.html.twig',array());
  }

  /**
  * @Route("/render/{name}")
  * @Template("CodersLabBundle:Wiews:wiew2.html.twig")
  */
  public function renAction($name){
    //  return $this->render('CodersLabBundle:Wiews:wiew2.html.twig',array('username'=> $name));
    return array('username' => $name );
  }

  /**
  * @Route("/createRandoms/{start}/{end}/{n}")
  * @Template("CodersLabBundle:Wiews:rand.html.twig")
  */
  public function radnomAction($start,$end,$n){
    $result = [];
    for ($i=0; $i < $n; $i++) {
      $result[$i] = rand($start, $end);
    }
    return array('table' => $result);
  }
}
