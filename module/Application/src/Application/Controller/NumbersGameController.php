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
use Zend\Log\Logger;
use Zend\Log\Writer\AbstractWriter;
use Zend\Log\Writer\Stream;
use Application\Entity\Numbers;

class NumbersGameController extends AbstractActionController
{
    public function newAction(){
        $this->layout('layout/empty');
        $random = rand(1,99);
        $this->logTirage($random);
        echo $random;
    }

    public function logTirage($randomize)
    {
        $path =__DIR__.'/../../../../../data/log/log_tirage.php';
        $logger = new Logger;
        $writer = new Stream($path);
        $logger->addWriter ($writer);
        $logger->log(Logger::INFO, $randomize);

    }

}