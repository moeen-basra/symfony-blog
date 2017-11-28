<?php
/**
 * Created by PhpStorm.
 * User: mbasr
 * Date: 29-Nov-17
 * Time: 2:18 AM
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoadUserData extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('moeen');
        $user->setEmail('m.basra@live.com');

        $password = $this->encoder->encodePassword($user, 'secret');
        $user->setPassword($password);

        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();
    }
}