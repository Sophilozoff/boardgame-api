<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    private $encoder;
        
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder=$encoder;
    }

    public function load(ObjectManager $manager)
    {
       
        $user = new User();
        $user->setUsername("sophilozoff")
            ->setRoles(["ROLE_USER"])
            ->setPassword($this->encoder->encodePassword($user, "mdp"))
            ->setEmail("sophilozoff@hotmail.fr");
        $manager->persist($user);

        $admin = new User();
        $admin->setUsername("admin")
            ->setRoles(["ROLE_ADMIN"])
            ->setPassword($this->encoder->encodePassword($admin, "mdp"))
            ->setEmail("lallemandsophie@free.fr");
    
        $manager->persist($admin);
        $manager->flush();
    }
}
