<?php

namespace My\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule")
 * @ORM\Entity
 */
class Schedule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_schedule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSchedule;

    /**
     * @var string
     *
     * @ORM\Column(name="conference_schedule", type="text", nullable=false)
     */
    private $conferenceSchedule;



    /**
     * Get idSchedule
     *
     * @return integer 
     */
    public function getIdSchedule()
    {
        return $this->idSchedule;
    }

    /**
     * Set conferenceSchedule
     *
     * @param string $conferenceSchedule
     * @return Schedule
     */
    public function setConferenceSchedule($conferenceSchedule)
    {
        $this->conferenceSchedule = $conferenceSchedule;
    
        return $this;
    }

    /**
     * Get conferenceSchedule
     *
     * @return string 
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule;
    }
}