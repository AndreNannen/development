<?php
/**
 * Created by PhpStorm.
 * User: André
 * Date: 24-1-2017
 * Time: 14:56
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class testController extends Controller
{

    /**
     * @Route("/test/{testName}")
     */

    public function showAction($testName)
    {
        $templating = $this->container->get('show.html.twig');
        $html = $templating->render('test/show.html.twig', [
       // return new Response('The test!'.$testName);
        'name' => $testName

        ]);

        return new Response($html);


    }

}