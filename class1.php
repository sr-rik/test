<?php

class Question{
    private $id;
    private $body;
    private static $count = 0;

    public function __construct($body){
        $this->body = $body;
        self::$count++;
        $this->id = self::$count;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getBody(){
        return $this->body;
    }
}

?>
