<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Element\Date;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity
 */
class Game
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
     * @ORM\Column(name="dateadd", type="datetime", nullable=false)
     */
    private $dateadd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateupd", type="datetime", nullable=false)
     */
    private $dateupd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="datestart", type="datetime", nullable=false)
	 */
	private $datestart;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="dateend", type="datetime", nullable=true)
	 */
	private $dateend;

	function __construct()
	{
		$this->datestart = new \DateTime();
		$this->active    = 1;
		$this->dateupd   = new \DateTime();
		$this->dateadd   = new \DateTime();
	}

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
     * @return Game
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
     * @return Game
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
     * @return Game
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
	 * Set datestart
	 *
	 * @param \DateTime $datestart
	 * @return Game
	 */
	public function setDatestart($datestart)
	{
		$this->datestart = $datestart;

		return $this;
	}

	/**
	 * Get datestart
	 *
	 * @return \DateTime
	 */
	public function getDatestart()
	{
		return $this->datestart;
	}

	/**
	 * Set dateend
	 *
	 * @param \DateTime $dateend
	 * @return Game
	 */
	public function setDateend($dateend)
	{
		$this->dateend = $dateend;

		return $this;
	}

	/**
	 * Get dateend
	 *
	 * @return \DateTime
	 */
	public function getDateend()
	{
		return $this->dateend;
	}
}
