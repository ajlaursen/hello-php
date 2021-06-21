<?php

namespace App\controllers;

class Posts extends \Core\Controller
{
    public function index()
    {
        echo "hello from the index action in the posts controller";
        echo '<p>Query string parameters: <pre>' .
        htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function addNew()
    {
        echo "hello from the addNew action in the posts controller";
    }

    public function edit()
    {
        echo 'hello from the edit action in the Posts controller';
        echo '<p>Router Parameters: <pre>' . 
            htmlspecialchars(print_r($this->route_params, true)) . '<pre><p>';
    }

}
