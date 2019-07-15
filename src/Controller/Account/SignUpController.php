<?php

namespace App\Controller\Account;

use App\Entity\DefaultDb\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
  /**
   * @Route("/Account/SignUp/Index", name="SignUp", methods={"GET"})
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
    $data = [
      'submitUri' => $this->generateUrl("SignUpSubmit"),
    ];
    return $this->render('Account/SignUp/Form.html.twig', $data);
  }


  /**
   * @Route("/Account/SignUp/Submit", name="SignUpSubmit", methods={"POST"})
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function submit()
  {

  }
}