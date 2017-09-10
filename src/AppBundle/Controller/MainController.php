<?php
/**
 * Created by PhpStorm.
 * User: UncleDead
 * Date: 11.09.2017
 * Time: 1:20
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}