<?php

require_once 'config.php';


class crud{

   private $db;

   function __construct($conn){
          $this->db = $conn;
   }




   public function SendFeedback($cname, $cmail,$cmessage){
      try {
         $sql = "INSERT INTO geotraveler.feedback (fullname,mail,message) VALUES (:fullname,:mail,:message)";
         $stmt = $this-> db->prepare($sql); 
         $stmt->bindparam(':fullname',$cname);
         $stmt->bindparam(':mail',$cmail);
         $stmt->bindparam(':message',$cmessage);
         $stmt->execute();
         return true;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }

   }


   public function getUser($username, $password){
      try {
         $sql = "SELECT * FROM geotraveler.users WHERE username = :username AND password = :password";
         $stmt = $this-> db->prepare($sql); 
         $stmt->bindparam(':username',$username);
         $stmt->bindparam(':password',$password);
         $stmt->execute();
         $result = $stmt->fetch();
         return $result;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }

   }


   public function getHotelsTop(){
      try{
          $sql = "SELECT * FROM geotraveler.hotel limit 4";
          $result = $this->db->query($sql);
          return $result;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
  }

   public function getAllHotels(){
   try{
       $sql = "SELECT * FROM geotraveler.hotel";
       $result = $this->db->query($sql);
       return $result;
   }catch(PDOException $e){
       echo $e->getMessage();
       return false;
   }
   }

   public function countHotels(){
      try{
          $sql = "SELECT COUNT(*) FROM geotraveler.hotel";
          $res =  $this->db->query($sql);
          $count = $res->fetchColumn();
          return $count;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   } 

   public function getHotelFrom($start,$end){
      try{
          $sql = "SELECT * FROM geotraveler.hotel limit $start , $end "; 
          $stmt = $this->db->query($sql);
          return $stmt;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }

   public function getHotelFromSearch($region,$tag,$pFrom,$pTo){
      if(strval($region) == 'any'){
         $regionF = "region = region"; 
      }else{
         $regionF = "region = '".strval($region)."'"; 
      }
      if(strval($tag) == 'Anything'){
         $tagF = "nearAtractions = nearAtractions"; 
      }else{
         $tagF = "nearAtractions like '%".strval($tag)."%'";
      }

// AND ( minCost >= $pFrom AND minCost <= $pTo)
      try{
          $sql = "SELECT * FROM geotraveler.hotel WHERE $regionF AND $tagF  AND ( minCost >= $pFrom AND minCost <= $pTo)"; 
          $stmt = $this->db->query($sql);
          return $stmt;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }

   public function getHotelFromSearchCount($region,$tag,$pFrom,$pTo){
      if(strval($region) == 'any'){
         $regionF = "region = region"; 
      }else{
         $regionF = "region = '".strval($region)."'"; 
      }
      if(strval($tag) == 'Anything'){
         $tagF = "nearAtractions = nearAtractions"; 
      }else{
         $tagF = "nearAtractions like '%".strval($tag)."%'";
      }
      try{
         $sql = "SELECT * FROM geotraveler.hotel WHERE $regionF AND $tagF AND ( minCost >= $pFrom AND minCost <= $pTo) "; 
          $res = $this->db->query($sql);
          $count = $res->fetchColumn();
          return $count;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }

   public function getRooms($hotelID){
      try{
          $sql = "SELECT * FROM geotraveler.room WHERE hotelID = '$hotelID' AND reserved = '0'"; 
          $res = $this->db->query($sql);
          return $res;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }
   public function getRoom($hotelID,$roomid){
      try{
          $sql = "SELECT * FROM geotraveler.room WHERE hotelID = '$hotelID' AND roomid = '$roomid' "; 
          $res = $this->db->query($sql);
          return $res;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }
   public function getRoomPics($hotelID,$roomID){
      try{
         $sql = "SELECT * FROM geotraveler.roomPictures WHERE hotelID = '$hotelID' AND roomID = '$roomID' "; 
          $res = $this->db->query($sql);
          return $res;
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }
   public function markRoomReserved($hotelID,$roomID){
      try{
         $sql = "UPDATE geotraveler.room SET reserved='1' WHERE hotelID = '$hotelID' AND roomid = '$roomID'";
         $stmt = $this->db->query($sql);
         $stmt->execute();
         return true;
     }catch(PDOException $e){
         echo $e->getMessage();
         return false;
     }
   }
   public function markRoomUnreserved($hotelID,$roomID){
      try{
         $sql = "UPDATE geotraveler.room SET reserved='0' WHERE hotelID = '$hotelID' AND roomid = '$roomID'";
         $stmt = $this->db->query($sql);
         $stmt->execute();
         return true;
     }catch(PDOException $e){
         echo $e->getMessage();
         return false;
     }
   }

   public function getUserReservations($uid){
      try{
         $sql = "SELECT * FROM geotraveler.reservation WHERE userID = '$uid'"; 
          $res = $this->db->query($sql);
          return $res;
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }
   public function getReservationsByID($ID){
      try{
         $sql = "SELECT * FROM geotraveler.reservation WHERE reservationID = '$ID'"; 
          $res = $this->db->query($sql);
          return $res;
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }
   public function deleteReservation($ID){
      try{
         $sql = "DELETE FROM geotraveler.reservation WHERE reservationID = '$ID'"; 
         $stmt = $this->db->query($sql);
         $stmt->execute();
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }
   



   public function createReservation($hotelid,$roomid,$uid,$checkIn,$checkOut){
      try {
         $sql = "INSERT INTO geotraveler.reservation (hotelID,roomID,userID,checkIN,checkOUT) VALUES (:hotelID,:roomID,:userID,:checkIN,:checkOUT)";
         $stmt = $this-> db->prepare($sql); 
         $stmt->bindparam(':hotelID',$hotelid);
         $stmt->bindparam(':roomID',$roomid);
         $stmt->bindparam(':userID',$uid);
         $stmt->bindparam(':checkIN',$checkIn);
         $stmt->bindparam(':checkOUT',$checkOut);
         $stmt->execute();
         return true;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }

   }
}




?>
