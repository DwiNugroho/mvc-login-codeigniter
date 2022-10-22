<?php

namespace App\Controllers;

class User extends BaseController
{

    public function __construct()
    {

        $this->config = config('App');
    }

    public function index()
    {   
        return view('user/index', ['config' => $this->config]);
    }
}
