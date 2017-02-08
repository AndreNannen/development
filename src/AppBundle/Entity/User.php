<?php
/**
 * Created by PhpStorm.
 * User: André
 * Date: 1-2-2017
 * Time: 13:53
 */

        // src/AppBundle/Entity/User.php
        namespace AppBundle\Entity;
        use FOS\UserBundle\Model\User as BaseUser;
        use Doctrine\ORM\Mapping as ORM;
        /**
         * @ORM\Entity
         * @ORM\Table(name="fos_user")
         */
        class User extends BaseUser
        {
            /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue(strategy="AUTO")
             */
            protected $id;
            public function __construct()
            {
                parent::__construct();
                // your own logic
            }
        }