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
      if(strval($region) == 'Any'){
         $region = region; 
      }

      if(strval($tag) == 'Anything'){
         $tag = nearAtractions; 
      }else{
         $tag = '%'.strval($tag).'%';
      }

//AND ( minCost >= '$pFrom' AND minCost <= '$pTo')
      try{
          $sql = "SELECT * FROM geotraveler.hotel WHERE region = $region AND (nearAtractions like $tag )  AND ( minCost >= '$pFrom' AND minCost <= '$pTo')"; 
          $stmt = $this->db->query($sql);
          return $stmt;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }

   public function getHotelFromSearchCount($region,$tag,$pFrom,$pTo){
      try{
          $sql = "SELECT * FROM geotraveler.hotel WHERE region = '$region' AND (nearAtractions like '%$tag%' ) AND ( minCost >= '$pFrom' AND minCost <= '$pTo') "; 
          $res = $this->db->query($sql);
          $count = $res->fetchColumn();
          return $count;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }

}




?>
