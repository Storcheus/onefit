<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 02.12.2016
 * Time: 11:58
 */

namespace Onefit\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OnefitChatBundle:Default:index.html.twig');
    }
}