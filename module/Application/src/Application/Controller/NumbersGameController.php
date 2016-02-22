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

class NumbersGameController extends AbstractActionController
{
    public function newAction(){
        $this->layout('layout/empty');
        echo rand(1,99);
    }
}