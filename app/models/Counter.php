<?php

$count;

public function __construct() {
    //file name
    $fileName = 'resources/counter.txt';
    //Checking to see if counter.txt file exists
    if (file_exists($fileName)) {
        //open the file
        $file_handle = fopen($fileName, 'a');
        //Locking the file
        flock($file_handle, LOCK_EX);
        
    }
}

public function increment() {

}

public function write() {

}

public function __toString() {

}