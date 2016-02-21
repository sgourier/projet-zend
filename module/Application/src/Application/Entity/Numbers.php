<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Numbers
 *
 * @ORM\Table(name="numbers", indexes={@ORM\Index(name="fk_numbers_card_idx", columns={"card_id"})})
 * @ORM\Entity
 */
class Numbers
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
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var boolean
     *
     * @ORM\Column(name="found", type="boolean", nullable=true)
     */
    private $found;

    /**
     * @var \Application\\Entity\Card
     *
     * @ORM\ManyToOne(targetEntity="Application\\Entity\Card")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="card_id", referencedColumnName="id")
     * })
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
     * @param \Application\\Entity\Card $card
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
     * @return \Application\\Entity\Card 
     */
    public function getCard()
    {
        return $this->card;
    }




/******************************************************************************************/
/*                           METHODES PERSONNALISEES                                      */
/******************************************************************************************/

    public function foundNumbersByCards($em,$value,$cards){
        $entities = $em->getRepository('Application\Entity\Numbers')->findBy(array('number' => $value));

        foreach($entities as $entite){
            return $entite;
        }
    }
}
