<?php

require_once 'C:\Users\Tornike\Desktop\proeqti\GeoTraveler\Main\back-end\php\config.php';


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




}




?>
