<?php

class Room{
        private $pics;    
        private $number;
        private $floorNum;
        private $cost;
        private $bedNum;
        private $desc;
        private $isOccupied;

    function __construct($pics,$number,$floorNum,$cost,$bedNum,$isOccupied,$desc){
        $this->pics = $pics;
        $this->number = $number;
        $this->floorNum = $floorNum;
        $this->cost = $cost;
        $this->bedNum = $bedNum;
        $this->isOccupied = $isOccupied;
        $this->desc = $desc;
    }

    function get_pic(){
        return $this->pics;
    }
    function get_number(){
        return $this->number;
    }
    function get_floorNum(){
        return $this->floorNum;
    }
    function get_cost(){
        return $this->cost;
    }
    function get_bedNum(){
        return $this->bedNum;
    }
    function get_status(){
        return $this->isOccupied;
    }
    function get_desc(){
        return $this->desc;
    }



    function set_pic($newPics){
        $this->pics = $newPics;
    }
    function set_number($newNumber){
        $this->number = $newPics;
    }
    function set_floorNum($newFloorNum){
        $this->floorNum = $newFloorNum;
    }
    function set_cost($newCost){
        $this->cost = $newCost;
    }
    function set_bedNum($newBedNum){
        $this->bedNum = $newBedNum;
    }
    function set_isOccupied($newStatus){
        $this->isOccupied = $newBedNum;
    }
    function set_desc($newDesc){
        $this->desc = $newDesc;
    }




}




?>