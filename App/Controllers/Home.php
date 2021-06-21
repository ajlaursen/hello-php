<?php

namespace App\controllers;

use Core\View;

class Home extends \Core\Controller
{

    public function indexAction()
    {
        //echo 'Hello from the index action in the Home controller!';
        // View::render('Home/index.php', ['name' => 'Dave', 'colors' => ['red', 'green', 'blue']]);
        View::renderTemplate('Home/index.html', ['name' => 'Dave', 'colors' => ['red', 'green', 'blue']]);
    }

    protected function before()
    {
        //     echo "(before) ";
        //     return false;

    }

    protected function after()
    {
        //     echo " (after)";
    }
}
