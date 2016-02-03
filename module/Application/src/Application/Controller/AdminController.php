<?php
/**
 * Created by Thibault on 03/02/2016.
 */

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
use Zend\View\Model\JsonModel;

class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    public function tirageAction()
    {
        $result = new JsonModel(array(
            'new' => '5'
        ));

        return $result;
    }
}
