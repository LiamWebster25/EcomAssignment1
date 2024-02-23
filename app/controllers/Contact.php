<?php
namespace app\controllers;

class Contact extends \app\core\Controller
{

    function read()
    {
        $messages = \app\models\Message::read();
        $this->view('Contact/read', $messages);
    }

    function index()
    {
        $this->view('Contact/index');
    }
    function contact()
    {
        print_r($_POST);
        $message = new \app\models\Message();

        $message->email = $_POST['email'];
        $message->name = $_POST['name'];
        $message->IP = $_SERVER['REMOTE_ADDR'];

        $message->write();

        header('location:/Contact/read');
    }
}