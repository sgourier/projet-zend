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
        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $currentGame = $this->getActivateGame($em);

        // S'il y a plusieurs nombre de tirés, partie en cours -> redirection vers attente nouvelle aprtie
        if($this->isManyNumberInGame($em,$currentGame)){
            return $this->redirect()->toRoute('waitgame');
        }
        // S'il n'y a pas de nombre, page d'attente
        else if(!$this->isNumberInGame($em,$currentGame)){
            return $this->redirect()->toRoute('waitgame');
        }
        else{
            return $this->redirect()->toRoute('playgame');
        }
    }

    public function waitAction()
    {
        return new ViewModel();
    }

    public function waitgameAction()
    {
        return new ViewModel();
    }
    public function playAction()
    {
        return new ViewModel();
    }





/*****************************************************************************/
/*                                   AJAX                                    */
/*****************************************************************************/
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

    public function gamebeginAction()
    {
        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $currentGame = $this->getActivateGame($em);

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


    public function getActivateGame($em){
        $entities = $em->getRepository('Application\Entity\Game')->findAll();

        foreach($entities as $entite){
            if( $entite->getActive() == 1 ){
                return $entite;
            }
        }

        return false;
    }


    public function isManyNumberInGame($em,$game){
        $entities = $em->getRepository('Application\Entity\NumbersGame')->findBy(array('game_id' => $game->getId()));

        $nb =0;
        foreach($entities as $entite){
            $nb++;
        }


        return $nb > 1 ? true : false;
    }

    public function isNumberInGame($em,$game){
        $entities = $em->getRepository('Application\Entity\NumbersGame')->findBy(array('game_id' => $game->getId()));

        foreach($entities as $entite){
            return true;
        }

        return false;
    }
}