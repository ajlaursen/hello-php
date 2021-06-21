<?php

namespace App\controllers;

class Home extends \Core\Controller
{

    public function indexAction()
    {
        echo "hello from the index action in the home controller";
    }

    protected function before()
    {
        echo "(before) ";
        return false;

    }

    protected function after()
    {
        echo " (after)";
    }

}
