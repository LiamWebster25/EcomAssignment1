<?php
namespace app\controllers;

class Message extends \app\core\Controller
{

    function read()
    {
        //showing the read view
        $this->view('Contact/read');
    }

    function index()
    {
        $this->view('Contact/index');
    }
    function contact()
    {

        $message = new \app\models\Message();

        $message->name = $_POST['name'];
        $message->email = $_POST['email'];
        $message->IP = $_SERVER['REMOTE_ADDR'];

        $message->write();

        header('location:/Contact/read');
    }
}