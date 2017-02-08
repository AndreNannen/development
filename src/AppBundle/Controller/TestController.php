<?php
/**
 * Created by PhpStorm.
 * User: André
 * Date: 1-2-2017
 * Time: 11:27
 */

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
    /**
     * @Route("/", name="testhub")
     */
    public function testAction(Request $request)
    {
        return $this->render('test/index.html.twig');
    }

    /**
     * @Route("/pf", name="profile")
     */

    public function profileAction(Request $request)
    {
        return $this->render('test/profile.html.twig', [
            'avatar_url' => 'https://avatars.githubusercontent.com/u/8707163?v=3',
            'name' => "André Nannen",
            'login' => 'AndreNannen',
            'details' => [
                'company' => 'Webwijs B.V.',
                'location' => 'The Netherlands, Heerenveen',
                'joined_on'  => 'Joined on 2014-09-09',
                // profileAction, has got an Array that loops data from api.github.com/users/andrenannen that brings it to test/gitprofile.html.twig.

            ]
        ]);
    }

}