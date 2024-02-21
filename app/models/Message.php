<?php


class Message {

public $name;
public $email;
public $IP;

public function read() {
    //read the file and return the collection of Messages
		$filename = 'resources/messages.txt';
		$records = file($filename);
		//process the JSON strings into objects
		foreach ($records as $key => $value) {
			$object = json_decode($value);
			$message = new \app\models\Message($object);
			$records[$key] = $message;
		}
		return $records;
}

public function write()
    {
        //encode this Message object into JSON format
        $message = json_encode($this);
        //Open file for writing
        $fileName = '/resources/messages.txt';
        $file_handle = fopen($fileName, 'w');
        //lock file for writing
        flock($file_handle, LOCK_EX);
        //Overwrite the content with $count
        fwrite($file_handle, $message . "\n");
        //Unlock the file
        flock($file_handle, LOCK_UN);
        //Close the file
        fclose($file_handle);
    }

}