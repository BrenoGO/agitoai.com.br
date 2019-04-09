<?php

namespace App\Controllers;

use Core\View;
use App\Models\Post;    

/**
 * Posts Controller
 * 
 */
class Posts extends \Core\Controller
{
    /**
     * Show in the index page
     * @return void
     */
    public function indexAction()
    {
        $posts = Post::getAll();

        View::renderTemplate('Posts/index.html',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the add new Post
     * 
     * @return void
     */
    public function addNewAction() 
    {
        echo 'Hello from addNew action in the Posts controller';
    }

    public function editAction()
    {
        echo 'Hello from the edit action of Posts Controller';
        echo '<p>Route Parameters: <pre>'.
        htmlspecialchars(print_r($this->route_params, true)).'</pre></p>';
        echo '<p>Query string Params: <pre>'.
        htmlspecialchars(print_r($_GET, true)).'</pre></p>';
    }
}
