<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JwtController extends AbstractController
{
    /**
     * @Route("/api/hello", name="protected_hello")
     */
    public function index(): Response
    {
        // this endpoint is used to demonstrate that the user is authenticated
        $user = $this->getUser();
        return $this->json([
            'message' => 'You are logged in',
            'username' => $user->getUsername()
        ]);
    }
}
