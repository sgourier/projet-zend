<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Gourier
 * Date: 02/02/2016
 * Time: 18:42
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Numbers;

class NumbersController extends AbstractActionController
{
    public function newAction()
    {
        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        // Tirage du nouveau nombre
        $nb = $this->getNewNumber($em);
        // Modification de la valeur Found des nombres
        //$this->foundNumber($nb);




        $this->layout('layout/empty');
        echo $nb;
    }





/******************************************************************************************/
/*                                          METHODES                                      */
/******************************************************************************************/

    public function getNewNumber($em){

        $entities = $em->getRepository('Application\Entity\Numbers')->findAll();
        $arrayNumbersFounded = [];
        foreach($entities as $entity){
            $arrayNumbersFounded[] = $entity->getValue();
        }
        $res = false;
        while(!$res){
            $nb = rand(1,99);
            if(!in_array($nb,$arrayNumbersFounded)){
                $res = true;
            }
        }

        return $nb;
    }


    public function foundNumber($value){


        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        // Recuperation de la partie en cours
        $game = new Game();
        $currentGame= $game->getCurrentGame($em);

        // Recuperation des cartes correspondantes a la partie
        $currentCards = getCurrentsCards($em,$currentGame);

        // Modification de la valeurs "found" des cartes avec le chiffre venant d'être tiré
        $numbers = new Numbers();
        $cards = $numbers->foundNumbersByCards($em , $value , $currentCards);

        $entities = $em->getRepository('Application\Entity\Numbers')->findAll();

        foreach($entities as $entite){
            $entite->setActive("0");
            $em->persist($entite);
        }
        $em->flush();




        $this->layout('layout/empty');
        echo "OK";
    }

}