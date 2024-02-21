<?php


function complete_registration(){
    print_r($_POST);

    $message = new \app\models\Message();

    $message->name = $_POST['name'];
    $message->email = $_POST['email'];
    $message->IP = $_SERVER['REMOTE_ADDR'];

    $message->write();

    header('location:/Contact/read');
}