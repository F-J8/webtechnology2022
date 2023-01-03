<?php namespace App\Controllers;
class Personen extends BaseController
{
    public function index()
    {
        $data['personen'] = array(
            array(
                "username" => "Some Dude",
                "email" => "some@test.com",
                "inproject" => false,
            ),
            array(
                "username" => "Max Mustermann",
                "email" => "mustermann@test.com",
                "inproject" => true,
            )
        );

        echo view('templates/header');
        return view('todolist/person', $data);
    }
}