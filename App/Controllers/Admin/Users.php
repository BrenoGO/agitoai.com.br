<?php

namespace App\Controllers\Admin;

class Users extends \Core\Controller
{
    protected function before()
    {
        //for example: make sure the Admin is logged in
    }
    public function indexAction()
    {
        echo 'User Admin action';
    }
}