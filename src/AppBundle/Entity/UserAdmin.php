<?php
/**
 * Created by PhpStorm.
 * User: ouahab
 * Date: 27/09/2017
 * Time: 13:37
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * UserAdmin constructor.
 *
 * @ORM\Entity
 * @ORM\Table(name="user_admin")
 *
 */

class UserAdmin extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected  $id;public function eraseCredentials()
{
    parent::eraseCredentials();
}

    public  function  __construct()
    {
        parent::__construct();
    }
}
