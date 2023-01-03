<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Project extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        return view('todolist/project');
    }
}