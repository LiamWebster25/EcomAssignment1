<?php
namespace app\controllers;

class Main extends \app\core\Controller
{

    function about_us()
    {
        //showing the about_us view
        $this->view('Main/about_us');
    }

    function index()
    {
        $this->view('Main/index');
    }

}