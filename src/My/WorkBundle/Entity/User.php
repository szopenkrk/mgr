<?php

namespace My\WorkBundle\Entity;

use FOS\UserBundle\FOSUserBundle as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="text", nullable=false)
     */
    private $userLogin;

    /**
     * @param string $userAdmin
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;
    }

    /**
     * @return string
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * @param string $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param string $userLogin
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param string $userStatus
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
    }

    /**
     * @return string
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="text", nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="text", nullable=false)
     */
    private $userEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     */
    private $idRole;
    
    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="text", nullable=false)
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="user_admin", type="text", nullable=false)
     */
    private $userAdmin;


    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set userLogin
     *
     * @param string $userLogin
     * @return User
     */
    public function setUsername($userLogin)
    {
        $this->userLogin = $userLogin;
    
        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->userLogin;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setPlainPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    
        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    
        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->userEmail;
    }
    /**
     * Set userStatus
     *
     * @param string $userStatus
     * @return User
     */
    public function setEnabled($userStatus)
    {
        $this->userStatus = $userStatus;
    
        return $this;
    }

    /**
     * Get userStatus
     *
     * @return string 
     */
    public function getEnabled1()
    {
        return $this->userStatus;
    }
    
    
    public function setSuperAdmin()
    {
        $this->userAdmin = $userAdmin;
    }
    
    /**
     * Set idRole
     *
     * @param integer $idRole
     * @return User
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    
        return $this;
    }

    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }
    
    
    
}