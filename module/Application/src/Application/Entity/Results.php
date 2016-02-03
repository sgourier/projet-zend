<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Results
 *
 * @ORM\Table(name="results", indexes={@ORM\Index(name="fk_results_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Results
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
     * @ORM\Column(name="won", type="boolean", nullable=true)
     */
    private $won;

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
     * @param \Application\\Entity\User $user
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
