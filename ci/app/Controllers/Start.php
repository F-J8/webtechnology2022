<?php namespace App\Controllers;

class Start extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        return view('todolist/start');
    }
}