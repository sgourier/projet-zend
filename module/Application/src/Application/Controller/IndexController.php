<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Card;
use Application\Entity\User;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

	public function helloAction()
	{
		$name = $this->params()->fromQuery('name');
		$firstname = $this->params()->fromQuery('firstname');

		return new ViewModel([
			"nom" =>$name,
		    "prenom" => $firstname
		]);
	}


	public function newplayerAction(){
		//$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		return new ViewModel();
	}

	public function readyAction(){

		//$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		// $em->getRepository("Card");

		return new ViewModel();
	}
}
