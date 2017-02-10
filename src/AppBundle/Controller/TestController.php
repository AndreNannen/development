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
        return $this->render('test/index.html.twig', [
            'avatar_url' => 'https://avatars.githubusercontent.com/u/8707163?v=3',
            'name' => "André Nannen",
            'login' => 'andrenannen',
            'details' => [
                'company' => 'Webwijs B.V.',
                'location' => 'The Netherlands, Heerenveen',
                'joined_on'  => 'Joined on 2014-09-09',
            ],
            'social_data' => [
                "Public Repos" => 12,
                "Followers" => 999,
                "Following" => 1,
            ],
            'repo_count' => 100,
            'most_stars' => 88,
            'repos' => [
                [
                    'name' => 'some repository',
                    'url' => 'https://webwijs.nu',
                    'stargazers_count' => 46,
                    'description' => 'learn symfony 3'
                ],
                [
                    'name' => 'Awesomeness',
                    'url' => 'https://nos.nl',
                    'stargazers_count' =>77,
                    'description' => 'News!'
                ],
                [
                    'name' => 'Dope news',
                    'url' => 'https://nu.nl',
                    'stargazers_count' =>77,
                    'description' => 'News!'
                ],
                        ]

        ]);

    }

  //  /**
    // * @Route("/pf", name="profile")
    // */

// profileAction, has got an Array that loops data from api.github.com/users/andrenannen that brings it to test/gitprofile.html.twig.
  //  public function profileAction(Request $request)
  //  {
//            'avatar_url' => 'https://avatars.githubusercontent.com/u/8707163?v=3',
      //      'name' => "André Nannen",
       //     'login' => 'AndreNannen',
       //     'details' => [
          //      'company' => 'Webwijs B.V.',
          //      'location' => 'The Netherlands, Heerenveen',
//                ],
            //    'socialdata' => [
            //        "Public Repos" => 0,
            //        "Followers" => 999,
              //      "Following" => 0,
              //      ]


     //   ]);
   // }

}

