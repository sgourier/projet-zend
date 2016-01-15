<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Numbers
 */
class Numbers
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var boolean
     */
    private $found;

    /**
     * @var \Application\\Entity\Card
     */
    private $card;


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
     * Set number
     *
     * @param integer $number
     * @return Numbers
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set found
     *
     * @param boolean $found
     * @return Numbers
     */
    public function setFound($found)
    {
        $this->found = $found;

        return $this;
    }

    /**
     * Get found
     *
     * @return boolean 
     */
    public function getFound()
    {
        return $this->found;
    }

    /**
     * Set card
     *
     * @param \Application\Entity\Card $card
     * @return Numbers
     */
    public function setCard(\Application\Entity\Card $card = null)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return \Application\Entity\Card
     */
    public function getCard()
    {
        return $this->card;
    }
}
