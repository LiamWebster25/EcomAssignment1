<?php

class Counter {
public $count;

public function __construct() {
    //file name
    $fileName = 'resources/counter.txt';
    //Checking to see if counter.txt file exists
    if (file_exists($fileName)) {
        //open the file
        $file_handle = fopen($fileName, 'r');
        //Locking the file
        flock($file_handle, LOCK_SH);
        //retrieving the information from the file
        $this->count = fread($file_handle, filesize($fileName));
        //close the file
        fclose($file_handle);
    } else {
        $this->count = '{"count":0}';
    }
        $this->count = json_decode($this->count)->count;
}

public function increment() {
    $this->count++;
}

public function write() {
    
}

public function __toString() {
    return json_encode($this);
}

}