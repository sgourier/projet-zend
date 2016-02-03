<?php
/**
 * Created by PhpStorm.
 * User: Sylvain Gourier
 * Date: 02/02/2016
 * Time: 18:42
 */

namespace Application\Controller;

use Application\Entity\User;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
	public function loginAction()
	{
		$data = $this->getRequest()->getPost();

		// If you used another name for the authentication service, change it here
		$authService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');

		$adapter = $authService->getAdapter();
		$adapter->setIdentityValue($data['player_name']);
		$adapter->setCredentialValue(md5($data['player_password']));
		$authResult = $authService->authenticate();

		if ($authResult->isValid()) {
			return $this->redirect()->toRoute('game');
		}

		return new ViewModel(array(
			'error' => 'Vos identifiants de connexion ne sont pas valides',
		));
	}

	public function saveUserAction()
	{
		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

		$data = $this->getRequest()->getPost();

		$user = new User();
		$user->setUsername(strip_tags($data['player_name']));
		$user->setPassword(md5($data['player_password']));
		$user->setMail(strip_tags($data['player_email']));
		$user->setColor(strip_tags($data['player_color']));

		$em->persist($user);
		$em->flush();

		$authService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');

		$adapter = $authService->getAdapter();
		$adapter->setIdentityValue(strip_tags($data['player_name']));
		$adapter->setCredentialValue(md5($data['player_password']));
		$authResult = $authService->authenticate();

		if ($authResult->isValid()) {
			return $this->redirect()->toRoute('game');
		}

		return new ViewModel(array(
			'error' => 'Votre nom d\'utilisateur n\'est pas valide',
		));
	}
}