<?php

namespace App\Controller\Account;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogInController extends AbstractController
{
    public function index()
    {
        return $this->form();
    }

    /**
     * @Route("/Account/LogIn/Form", name="LogInForm", methods={"GET"})
     * @return Response
     */
    public function form()
    {
        return $this->render(
            'Account/LogIn/Form.html.twig', []
        );
    }

    /**
     * @Route("/Account/LogIn/Submit", name="LogInSubmit", methods={"POST"})
     * @return Response
     */
    public function submit()
    {
        return $this->form();
    }

    /**
     * @Route("/Account/LogOut", name="LogOut", methods={"POST"})
     */
    public function delete()
    {
        $this->redirectToRoute('Home');
    }
}