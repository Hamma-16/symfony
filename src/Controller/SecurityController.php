<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $user = $this->getUser();
    
        // Si déjà connecté et non vérifié → redirige vers OTP
        if ($user instanceof \App\Entity\User && !$user->isVerified()) {
            return $this->redirectToRoute('app_verify_login');
        }
    
        if ($user) {
            return $this->redirectToRoute('app_home');
        }
    
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
    
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
    

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
    #[Route('/verify-login', name: 'app_verify_login')]
    public function verifyLogin(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if ($user instanceof \App\Entity\User && $user->isVerified()) {
            return $this->redirectToRoute('app_home');
        }
    
        if ($request->isMethod('POST')) {
            $submittedOtp = $request->request->get('otp');
            $sessionOtp = $request->getSession()->get('otp_code');
            $userEmail = $request->getSession()->get('user_email');
    
            if ($submittedOtp === $sessionOtp) {
                $user = $em->getRepository(User::class)->findOneBy(['email' => $userEmail]);
    
                if ($user) {
                    $user->setIsVerified(true);
                    $em->flush();
    
                    return $this->redirectToRoute('app_home');
                }
            }
    
            $this->addFlash('error', 'Code OTP invalide');
        }
    
        return $this->render('security/verify_login.html.twig');
    }
    
}