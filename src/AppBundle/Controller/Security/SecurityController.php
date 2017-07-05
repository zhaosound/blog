<?php

namespace AppBundle\Controller\Security;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="support_login")
     */
    public function loginAction()
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render('Security/login.html.twig', [
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/login_check", name="support_login_check")
     */
    public function loginCheckAction()
    {
        throw new \Exception("this should never be reached!");
    }

    /**
     * @Route("/logout", name="support_logout")
     */
    public function loginOutAction()
    {
        throw new \Exception("this should never be reached!");
    }
}