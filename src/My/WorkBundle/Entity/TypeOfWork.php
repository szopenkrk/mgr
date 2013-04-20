<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeOfWork
 *
 * @ORM\Table(name="type_of_work")
 * @ORM\Entity
 */
class TypeOfWork
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_of_work", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeOfWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="value_type_of_work", type="integer", nullable=false)
     */
    private $valueTypeOfWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_work", type="integer", nullable=false)
     */
    private $idWork;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_author", type="integer", nullable=false)
     */
    private $idAuthor;



    /**
     * Get idTypeOfWork
     *
     * @return integer 
     */
    public function getIdTypeOfWork()
    {
        return $this->idTypeOfWork;
    }

    /**
     * Set valueTypeOfWork
     *
     * @param integer $valueTypeOfWork
     * @return TypeOfWork
     */
    public function setValueTypeOfWork($valueTypeOfWork)
    {
        $this->valueTypeOfWork = $valueTypeOfWork;
    
        return $this;
    }

    /**
     * Get valueTypeOfWork
     *
     * @return integer 
     */
    public function getValueTypeOfWork()
    {
        return $this->valueTypeOfWork;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return TypeOfWork
     */
    public function setIdWork($idWork)
    {
        $this->idWork = $idWork;
    
        return $this;
    }

    /**
     * Get idWork
     *
     * @return integer 
     */
    public function getIdWork()
    {
        return $this->idWork;
    }

    /**
     * Set idAuthor
     *
     * @param integer $idAuthor
     * @return TypeOfWork
     */
    public function setIdAuthor($idAuthor)
    {
        $this->idAuthor = $idAuthor;
    
        return $this;
    }

    /**
     * Get idAuthor
     *
     * @return integer 
     */
    public function getIdAuthor()
    {
        return $this->idAuthor;
    }
}