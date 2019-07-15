<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Home extends AbstractController
{
  /**
   * @Route("/", name="Home", methods={"GET"})
   * @return Response
   */
  public function index()
  {
    $data = [
      'env' => null
    ];
    return $this->render('Home/Index.html.twig', $data);
  }
}