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
use Application\Entity\Game;

class GameController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function waitAction()
    {
        return new ViewModel();
    }

    public function newAction()
    {
        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        $this->desactiveAllGame($em);
        $this->createGame($em);
        $this->layout('layout/empty');
        echo "OK";
    }

    public function newcardAction(){
        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $card = new Card;
        $card->setDateadd();
        $card->setDateup();
        $card->setActive();
        $card->setGameId();
        $card->setUserId(1);
        $em->persist($card);
        $em->flush();



        $this->layout('layout/empty');
        echo "OK";
    }


    public function endAction(){

        // Desactivation de la partie
        // Ajout du gagnant
        // Desactivation de toutes les cartes de la partie
        $this->layout('layout/empty');
        echo "OK";
    }





/******************************************************************************************/
/*                                          METHODES                                      */
/******************************************************************************************/
    public function createGame($em){
        $game = new Game;
        $date = new \Datetime();
        $game->setDateadd($date);
        $game->setDateupd($date);
        $game->setActive(1);
        $em->persist($game);
        $em->flush();
    }

    public function desactiveAllGame($em){
        $entities = $em->getRepository('Application\Entity\Game')->findAll();

        foreach($entities as $entite){
            $entite->setActive("0");
            $em->persist($entite);
        }
        $em->flush();
    }

}