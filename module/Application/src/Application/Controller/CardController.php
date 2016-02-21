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
use Application\Entity\Card;
use Application\Entity\Game;
use Application\Entity\User;
use Application\Entity\Numbers;

class CardController extends AbstractActionController
{
    public function newAction()
    {
        $em = $this ->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $game = new Game();
        $currentGame = $game->getCurrentGame($em);
        $user = new User();
        $currentUser = $user->loadUserById($em,1);

        $this->createCard($em , $currentGame,$currentUser);
        $this->layout('layout/empty');
        echo "OK";
    }




    /******************************************************************************************/
    /*                                          METHODES                                      */
    /******************************************************************************************/
    public function createCard($em,$currentGame,$currentUser){

        $card = new Card();
        //$date = new \Datetime();
        //$card->setDateadd($date);
        //$card->setDateupd($date);
        //$card->setGame($currentGame);
        //$card->setUser($currentUser);
        //$card->setActive(1);
        //$em->persist($card);
        //$em->flush();


        $this->chooseNumbersCard( $em , $card );

    }

    //public function chooseNumbersCard($em , $card , $user){
    public function chooseNumbersCard( $em , $card ){
        $arrNumbers = [];

        // Tirage des nombres
        for( $i = 0 ; $i<25 ; $i++ ){
            $nb = rand(1,99);
            if( !in_array($nb,$arrNumbers) ){
                $arrNumbers[] = $nb;
            }
            else{
                $i--;
            }
        }

        // AJout a la BDD
        foreach( $arrNumbers as $number){
            $num = new Numbers();
            $num->setNumber($number);
            $num->setFound(0);
            $num->setCard($card);
            $em->persist($card);
        }
        $em->flush();
    }
}