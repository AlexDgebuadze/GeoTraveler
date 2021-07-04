<?php
require_once 'config.php';

class crud{

   private $db;

   function __construct($conn){
          $this->db = $conn;
   }
   public function editUser($id, $fname, $lname, $mobile, $email){
      try{ 
           $sql = "UPDATE geotraveler.users SET name=:fname,surname=:lname,mobile=:mobile, email=:mail WHERE id = :id ";
           $stmt = $this->db->prepare($sql);
           $stmt->bindparam(':id',$id);
           $stmt->bindparam(':fname',$fname);
           $stmt->bindparam(':lname',$lname);
           $stmt->bindparam(':mobile',$mobile);
           $stmt->bindparam(':mail',$email);
              
           $stmt->execute();
           return true;
      }catch (PDOException $e) {
       echo $e->getMessage();
       return false;
      }
       
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

   public function returnTags($region){
      try {
         $sql = "SELECT DISTINCT (nearAtractions), region FROM geotraveler.hotel WHERE region = '$region'";
         $stmt = $this-> db->prepare($sql); 
         //$stmt->bindparam(':region',$region);
         $stmt = $this->db->query($sql);
          return $stmt;
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
   public function getAdminUser($username, $password){
      try {
         $sql = "SELECT * FROM geotraveler.adminusers WHERE auser = :username AND apass = :password";
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
   public function getAdminUserbyUsername($username){
      try{
          $sql = "select * from geotraveler.adminusers where auser = :username";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':username',$username);
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;
      }catch (PDOException $e) {
              echo $e->getMessage();
              return false;
      }
  }


   public function getHotelsTop(){
      try{
          $sql = "SELECT * FROM geotraveler.hotel ORDER BY rate DESC limit 4";
          $result = $this->db->query($sql);
          return $result;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
  }

  public function addNewHotel($hname, $photo,$minCost, $hotelDescr, $region, $nearAtr,$roomSum,$stars){
   try {
      $sql = "INSERT INTO geotraveler.hotel (hotelName,photo,minCost,hotelDescr,region,nearAtractions,roomSum,rate) VALUES (:hotelName,:photo,:minCost, :hotelDescr,:region,:nearAtractions,:roomSum,:rate)";
      $stmt = $this-> db->prepare($sql); 
      $stmt->bindparam(':hotelName',$hname);
      $stmt->bindparam(':photo',$photo);
      $stmt->bindparam(':minCost',$minCost);
      $stmt->bindparam(':hotelDescr',$hotelDescr);
      $stmt->bindparam(':region',$region);
      $stmt->bindparam(':nearAtractions',$nearAtr);
      $stmt->bindparam(':roomSum',$roomSum);
      $stmt->bindparam(':rate',$stars);
      $stmt->execute();
      return true;
   } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
   }

}

public function updateHotel($id,$hname, $photo,$minCost, $hotelDescr, $region, $nearAtr,$roomSum,$stars){
   try {
      $sql = "UPDATE geotraveler.hotel SET hotelName=:hotelName,photo=:photo,minCost=:minCost, hotelDescr=:hotelDescr , region=:region , nearAtractions=:nearAtractions, roomSum=:roomSum, rate=:rate  WHERE hotelId = :id ";
      $stmt = $this-> db->prepare($sql); 
      $stmt->bindparam(':id',$id);
      $stmt->bindparam(':hotelName',$hname);
      $stmt->bindparam(':photo',$photo);
      $stmt->bindparam(':minCost',$minCost);
      $stmt->bindparam(':hotelDescr',$hotelDescr);
      $stmt->bindparam(':region',$region);
      $stmt->bindparam(':nearAtractions',$nearAtr);
      $stmt->bindparam(':roomSum',$roomSum);
      $stmt->bindparam(':rate',$stars);
      $stmt->execute();
      return true;
   } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
   }

}



   public function deleteHotel($HID){
      try{
         $sql = "DELETE FROM geotraveler.hotel WHERE hotelId = :hotelid "; 
         $stmt = $this->db->prepare($sql);
         $stmt->bindparam(':hotelid',$HID);
         $stmt->execute();
         return true;
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }
   public function deleteUser($UID){
      try{
         $sql = "DELETE FROM geotraveler.users WHERE id = :userid "; 
         $stmt = $this->db->prepare($sql);
         $stmt->bindparam(':userid',$UID);
         $stmt->execute();
         return true;
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }

   public function addNewRoom($photo, $roomDescr, $hotelid, $cost, $roomCategory, $rooms, $personNum){
      try {
         $sql = "INSERT INTO geotraveler.room (roomPhoto,roomDescr,hotelID,cost,roomCategory,rooms,personNum,reserved) VALUES (:roomPhoto,:roomDescr, :hotelID,:cost,:roomCategory,:rooms,:personNum,'0')";
         $stmt = $this-> db->prepare($sql); 
         $stmt->bindparam(':roomPhoto',$photo);
         $stmt->bindparam(':roomDescr',$roomDescr);
         $stmt->bindparam(':hotelID',$hotelid);
         $stmt->bindparam(':cost',$cost);
         $stmt->bindparam(':roomCategory',$roomCategory);
         $stmt->bindparam(':rooms',$rooms);
         $stmt->bindparam(':personNum',$personNum);
         $stmt->execute();
         return true;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }
   }

   public function updateRoom($id,$photo, $roomDescr, $hotelid, $cost, $roomCategory, $rooms, $personNum){
      try {
         $sql = "UPDATE geotraveler.room SET roomPhoto=:roomPhoto,roomDescr=:roomDescr,hotelID=:hotelID, cost=:cost ,roomCategory=:roomCategory ,rooms=:rooms ,personNum=:personNum, reserved = '0'  WHERE roomid = :id ";
         $stmt = $this-> db->prepare($sql); 
         $stmt->bindparam(':id',$id);
         $stmt->bindparam(':roomPhoto',$photo);
         $stmt->bindparam(':roomDescr',$roomDescr);
         $stmt->bindparam(':hotelID',$hotelid);
         $stmt->bindparam(':cost',$cost);
         $stmt->bindparam(':roomCategory',$roomCategory);
         $stmt->bindparam(':rooms',$rooms);
         $stmt->bindparam(':personNum',$personNum);
         $stmt->execute();
         return true;
      } catch (PDOException $e) {
         echo $e->getMessage();
         return false;
      }
   }


   public function deleteRoom($roomID){
      try{
         $sql = "DELETE FROM geotraveler.room WHERE roomid = :roomID"; 
         $stmt = $this->db->prepare($sql);
         $stmt->bindparam(':roomID',$roomID);
         $stmt->execute();
         return true;
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
   public function getAllRooms(){
      try{
          $sql = "SELECT * FROM geotraveler.room";
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

   public function getHotelWithID($id){
      try{
          $sql = "SELECT * FROM geotraveler.hotel WHERE hotelId = :id "; 
          $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
      }catch(PDOException $e){
          echo $e->getMessage();
          return false;
      }
   }
   public function getRoomHR($HID,$RID){
      try{
          $sql = "SELECT * FROM geotraveler.room WHERE hotelID = :hid AND roomid = :rid "; 
          $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':hid',$HID);
                $stmt->bindparam(':rid',$RID);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
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
         $sql = "SELECT * FROM geotraveler.roompictures WHERE hotelID = '$hotelID' AND roomID = '$roomID' "; 
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
   public function getAllReservations(){
      try{
         $sql = "SELECT * FROM geotraveler.reservation "; 
          $res = $this->db->query($sql);
          return $res;
      }catch(PDOException $e){
         echo $e->getMessage();
          return false;
      }
   }

   public function getAllUsers(){
      try{
         $sql = "SELECT * FROM geotraveler.users"; 
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

   public function updateReservation($resID,$hotelid,$roomid,$uid,$checkIn,$checkOut){
      try {
         $sql = "UPDATE geotraveler.reservation SET hotelID=:hotelID,roomID=:roomID,userID=:userID, checkIN=:checkIN , checkOUT=:checkOUT WHERE reservationID = :resID ";
         $stmt = $this-> db->prepare($sql); 
         $stmt->bindparam(':resID',$resID);
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
