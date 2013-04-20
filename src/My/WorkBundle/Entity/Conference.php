<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
 * @ORM\Table(name="conference")
 * @ORM\Entity
 */
class Conference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_conference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_conference", type="date", nullable=false)
     */
    private $dateConference;

    /**
     * @var string
     *
     * @ORM\Column(name="title_conference", type="text", nullable=false)
     */
    private $titleConference;

    /**
     * @var string
     *
     * @ORM\Column(name="place_conference", type="text", nullable=false)
     */
    private $placeConference;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_cd", type="integer", nullable=false)
     */
    private $idUserCd;

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
     * Get idConference
     *
     * @return integer 
     */
    public function getIdConference()
    {
        return $this->idConference;
    }

    /**
     * Set dateConference
     *
     * @param \DateTime $dateConference
     * @return Conference
     */
    public function setDateConference($dateConference)
    {
        $this->dateConference = $dateConference;
    
        return $this;
    }

    /**
     * Get dateConference
     *
     * @return \DateTime 
     */
    public function getDateConference()
    {
        return $this->dateConference;
    }

    /**
     * Set titleConference
     *
     * @param string $titleConference
     * @return Conference
     */
    public function setTitleConference($titleConference)
    {
        $this->titleConference = $titleConference;
    
        return $this;
    }

    /**
     * Get titleConference
     *
     * @return string 
     */
    public function getTitleConference()
    {
        return $this->titleConference;
    }

    /**
     * Set placeConference
     *
     * @param string $placeConference
     * @return Conference
     */
    public function setPlaceConference($placeConference)
    {
        $this->placeConference = $placeConference;
    
        return $this;
    }

    /**
     * Get placeConference
     *
     * @return string 
     */
    public function getPlaceConference()
    {
        return $this->placeConference;
    }

    /**
     * Set idUserCd
     *
     * @param integer $idUserCd
     * @return Conference
     */
    public function setIdUserCd($idUserCd)
    {
        $this->idUserCd = $idUserCd;
    
        return $this;
    }

    /**
     * Get idUserCd
     *
     * @return integer 
     */
    public function getIdUserCd()
    {
        return $this->idUserCd;
    }

    /**
     * Set idWork
     *
     * @param integer $idWork
     * @return Conference
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
     * @return Conference
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