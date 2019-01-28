<?php
/**
 * Created by PhpStorm.
 * User: Suellen
 * Date: 27/01/2019
 * Time: 00:26
 */

namespace Ekki;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface {
    public function getConfig () {
        return include __DIR__."/../config/module.config.php";
    }
}