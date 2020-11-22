<?php

class Hotel{
    private $name;
    private $pics;
    private $roomObj;
    private $desc;

    function __construct($name,$pics,$roomObj,$desc){
        $this->name = $name;
        $this->pics = $pics;
        $this->roomObj = $roomObj;
        $this->desc = $desc;
    }

    function set_name($newName){
        $this->name = $newName;
    }
    function set_pics($newPics){
        $this->pics = $newPics;
    }
    function set_roomObj($newRoomObj){
        $this->roomObj = $newRoomObj;
    }
    function set_desc($newDesc){
        $this->desc = $newDesc;
    }


    function get_name(){
        return $this->name;
    }

    function get_pics(){
        return $this->pics;
    }
    function get_roomObj(){
        return $this->roomObj;
    }
    function get_desc(){
        return $this->desc;
    }


}





?>