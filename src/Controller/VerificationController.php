<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VerificationController extends AbstractController
{
    #[Route('/verify', name: 'app_verify')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $submittedOtp = $request->request->get('otp');
            $sessionOtp = $request->getSession()->get('otp_code');
            $userId = $request->getSession()->get('user_id');

            if (!$userId) {
                return $this->redirectToRoute('app_register');
            }

            $user = $entityManager->getRepository(User::class)->find($userId);

            if (!$user) {
                throw $this->createNotFoundException('Utilisateur non trouvé');
            }

            if ($submittedOtp === $sessionOtp) {
                $user->setIsVerified(true);
                $entityManager->flush();
                
                $this->addFlash('success', 'Votre compte a été vérifié avec succès !');
                return $this->redirectToRoute('app_home');
            }

            $this->addFlash('error', 'Code OTP invalide');
        }

        return $this->render('verification/index.html.twig');
    }
}