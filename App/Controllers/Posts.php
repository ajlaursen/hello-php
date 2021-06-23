<?php

namespace App\controllers;

use \Core\View;
use App\Models\Post;

class Posts extends \Core\Controller
{


    public function indexAction()
    {

        $posts = Post::getAll();
        View::renderTemplate('Posts/index.html', ["posts" => $posts]);

        // echo '<p>Query string parameters: <pre>' .
        //     htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function addNewAction()
    {
        echo "hello from the addNew action in the posts controller";
    }

    public function editAction()
    {
        echo 'hello from the edit action in the Posts controller';
        echo '<p>Router Parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '<pre><p>';
    }
}
