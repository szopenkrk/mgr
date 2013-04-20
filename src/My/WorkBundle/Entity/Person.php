<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_person", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="text", nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="text", nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;



    /**
     * Get idPerson
     *
     * @return integer 
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Person
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Person
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Person
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}