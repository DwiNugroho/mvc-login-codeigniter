<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function __construct()
    {

        $this->config = config('App');
    }

    public function index()
    {   
        return view('admin/index', ['config' => $this->config]);
    }
}
