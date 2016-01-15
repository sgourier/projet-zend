<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 */
class Card
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
    private $active;

    /**
     * @var \Application\\Entity\Game
     */
    private $game;

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
     * @return Card
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
     * @return Card
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
     * Set active
     *
     * @param boolean $active
     * @return Card
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set game
     *
     * @param \Application\Entity\Game $game
     * @return Card
     */
    public function setGame(\Application\Entity\Game $game = null)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \Application\\Entity\Game 
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set user
     *
     * @param \Application\Entity\User $user
     * @return Card
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
