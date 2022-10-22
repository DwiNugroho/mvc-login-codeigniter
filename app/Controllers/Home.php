<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {

        $this->config = config('App');

    }

    public function index()
    {   
        if (in_groups('admin')) {
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/user');
        }

        // return view('welcome_message', ['config' => $this->config]);
    }
}
