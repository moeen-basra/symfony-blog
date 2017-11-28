<?php
/**
 * Created by PhpStorm.
 * User: moeen
 * Date: 11/26/17
 * Time: 6:27 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * render the home
     *
     * @Route("/")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('home/index.html.twig');
    }
}