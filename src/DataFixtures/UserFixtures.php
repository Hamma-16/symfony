<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@gmail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('$2y$13$eRJMiXKn7ORALF7p1Hn/4erFmEjhhhFm5Ku/YWU6BPwv1XGMsGQji'); // Use php bin/console security:hash-password to generate
        $user->setPhoneNumber('+1234567890');
        $user->setIsVerified(true);
        
        $manager->persist($user);
        $manager->flush();
    }
}