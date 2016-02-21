<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Db\Sql\Ddl\Column\Date;
use Zend\Form\Element\DateTime;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=1500, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=2500, nullable=false)
     */
    private $username;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin;

	function __construct()
	{
		$this->dateadd      = new \DateTime();
		$this->dateupd      = new \DateTime();
		$this->points       = 0;
		$this->active       = 1;
		$this->admin        = 0;
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
     * @return User
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
     * @return User
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
     * Set mail
     *
     * @param string $mail
     * @return User
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
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return User
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return User
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
     * Set color
     *
     * @param string $color
     * @return User
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return User
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function getAdmin()
    {
        return $this->admin;
    }


/******************************************************************************************/
/*                           METHODES PERSONNALISEES                                      */
/******************************************************************************************/

    public function loadUserById($em,$id){
        $entities = $em->getRepository('Application\Entity\User')->findBy(array('id' => $id));

        foreach($entities as $entite){
            return $entite;
        }
    }
}
