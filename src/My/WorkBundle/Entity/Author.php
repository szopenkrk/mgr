<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity
 */
class Author
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_author", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="autor_name", type="text", nullable=false)
     */
    private $autorName;



    /**
     * Get idAuthor
     *
     * @return integer 
     */
    public function getIdAuthor()
    {
        return $this->idAuthor;
    }

    /**
     * Set autorName
     *
     * @param string $autorName
     * @return Author
     */
    public function setAutorName($autorName)
    {
        $this->autorName = $autorName;
    
        return $this;
    }

    /**
     * Get autorName
     *
     * @return string 
     */
    public function getAutorName()
    {
        return $this->autorName;
    }
}