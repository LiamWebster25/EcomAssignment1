<?php
namespace app\models;

class Message
{

    public $name;
    public $email;
    public $IP;

    public function __construct($object = null){
		if($object == null)
			return;// avoid this running when there is no parameter....
		$this->name = $object->name;
		$this->email = $object->email;
		$this->IP = $object->IP;
	}

    public static function read()
    {
        //read the file and return the collection of Messages
        $filename = '../../resources/Messages.txt';
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
        //Open file for writing
        $fileName = '../../resources/Messages.txt';
        $file_handle = fopen($fileName, 'a');
        //lock file for writing
        flock($file_handle, LOCK_EX);
        //encode this Message object into JSON format
        $message = json_encode($this);
        //Write to file
        fwrite($file_handle, $message . "\n");
        //Unlock the file
        flock($file_handle, LOCK_UN);
        //Close the file
        fclose($file_handle);
    }

}