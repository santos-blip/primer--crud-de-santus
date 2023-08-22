<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo base_url('http://localhost/todos/');
    }
}
