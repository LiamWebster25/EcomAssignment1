<?php
namespace \app\models;

class Counter
{
    public $count;

    public function __construct()
    {
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
            //Unlock the file
            flock($file_handle, LOCK_UN);
            //close the file
            fclose($file_handle);
        } else {
            $this->count = '{"count":0}';
        }
        $this->count = json_decode($this->count)->count;
    }

    public function increment()
    {
        $this->count++;
    }

    public function write()
    {
        //encode count into JSON format
        $this->count = json_encode($this->count);
        //Open file for writing
        $fileName = 'resources/counter.txt';
        $file_handle = fopen($fileName, 'w');
        //lock file for writing
        flock($file_handle, LOCK_EX);
        //Overwrite the content with $count
        fwrite($file_handle, $this->count);
        //Unlock the file
        flock($file_handle, LOCK_UN);
        //Close the file
        fclose($file_handle);
    }

    public function __toString()
    {
        return json_encode($this);
    }
}