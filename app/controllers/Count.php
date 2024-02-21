<?php
namespace \app\controllers;

function index() {
    //Counter model object
    $counter = new Counter();
    //Increment counter object
    $counter->increment();
    //Write method
    $counter->write();
    //Echo the counter
    echo $counter;
}