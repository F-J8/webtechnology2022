<?php namespace App\Controllers;
class Login extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        return view('todolist/login');
    }
}