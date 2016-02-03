<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card", indexes={@ORM\Index(name="fk_card_game1_idx", columns={"game_id"}), @ORM\Index(name="fk_card_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Card
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=true)
     */
    private $dateadd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateupd", type="datetime", nullable=true)
     */
    private $dateupd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \Application\\Entity\Game
     *
     * @ORM\ManyToOne(targetEntity="Application\\Entity\Game")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     * })
     */
    private $game;

    /**
     * @var \Application\\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Application\\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
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
     * @param \Application\\Entity\Game $game
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
     * @param \Application\\Entity\User $user
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
