<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Results
 */
class Results
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateadd;

    /**
     * @var \DateTime
     */
    private $dateupd;

    /**
     * @var boolean
     */
    private $won;

    /**
     * @var \Application\\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateadd
     *
     * @param \DateTime $dateadd
     * @return Results
     */
    public function setDateadd($dateadd)
    {
        $this->dateadd = $dateadd;

        return $this;
    }

    /**
     * Get dateadd
     *
     * @return \DateTime 
     */
    public function getDateadd()
    {
        return $this->dateadd;
    }

    /**
     * Set dateupd
     *
     * @param \DateTime $dateupd
     * @return Results
     */
    public function setDateupd($dateupd)
    {
        $this->dateupd = $dateupd;

        return $this;
    }

    /**
     * Get dateupd
     *
     * @return \DateTime 
     */
    public function getDateupd()
    {
        return $this->dateupd;
    }

    /**
     * Set won
     *
     * @param boolean $won
     * @return Results
     */
    public function setWon($won)
    {
        $this->won = $won;

        return $this;
    }

    /**
     * Get won
     *
     * @return boolean 
     */
    public function getWon()
    {
        return $this->won;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     * @return Results
     */
    public function setUser(\Application\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
