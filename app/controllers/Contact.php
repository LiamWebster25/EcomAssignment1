<?php
namespace app\controllers;

class Contact extends \app\core\Controller
{

    function read()
    {
        $messages = file_get_contents('resources/messages.txt');
        // You might want to pass $messages to the view in a way that's appropriate for your framework
        $this->view('Contact/read', ['messages' => $messages]);
        //showing the read view
        // $this->view('Contact/read');
    }

    function index()
    {
        $this->view('Contact/index');
    }
    function contact()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'], $_POST['message'])) {
            $message = htmlspecialchars($_POST['message']); // Basic sanitization
            $email = htmlspecialchars($_POST['email']); // Basic sanitization
            $ip = $_SERVER['REMOTE_ADDR'];

            $entry = "Email: $email\nMessage: $message\nIP: $ip\n---\n";
            file_put_contents('resources/messages.txt', $entry, FILE_APPEND | LOCK_EX);

            header('Location: /Contact/read');
            exit;
        }
        // $message = new \app\models\Message();

        // $message->name = $_POST['name'];
        // $message->email = $_POST['email'];
        // $message->IP = $_SERVER['REMOTE_ADDR'];

        // $message->write();

        // header('location:/Contact/read');
    }
}