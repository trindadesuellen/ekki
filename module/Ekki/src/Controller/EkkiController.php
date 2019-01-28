<?php
/**
 * Created by PhpStorm.
 * User: Suellen
 * Date: 27/01/2019
 * Time: 16:43
 */

namespace Ekki\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EkkiController extends AbstractActionController {

    public function indexAction () {
        return new ViewModel();
    }

}