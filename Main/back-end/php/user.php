<?php 

require_once 'config.php'; 

    class user{
        private $db;
        
        function __construct($conn){
            $this->db = $conn;
        }

        public function insertUser($name,$surname,$mobile,$email,$username,$password){
            try {
                $result = $this->getUserbyUsername($username);
                if($result['num'] > 0){
                    return false;
                } else{
                    $new_password = md5($password.$username);
                    // define sql statement to be executed

                    date_default_timezone_set('Asia/Tbilisi');
                    $createdAt = date("Y-m-d H:i:s"); 


                    $sql = "INSERT INTO geotraveler.users (name,surname,mobile,email,username,password,registeredAt) VALUES (:name,:surname,:mobile,:email,:username,:password,:registeredAt)";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam(':name',$name);
                    $stmt->bindparam(':surname',$surname);
                    $stmt->bindparam(':mobile',$mobile);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':username',$username);
                    $stmt->bindparam(':password',$new_password);
                    $stmt->bindparam(':registeredAt',$createdAt);
                    
                    $stmt->execute();
                    return true;
                }
                
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUser($username,$password){
            try{
                $sql = "select * from geotraveler.users where username = :username AND password = :password ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->bindparam(':password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserbyUsername($username){
            try{
                $sql = "select * from geotraveler.users where username = :username";
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
                 $result = $stmt->fetch();
                 return true;
            }catch (PDOException $e) {
             echo $e->getMessage();
             return false;
            }
             
         }

         public function getCard($userID){
            try{
                $sql = "select * from geotraveler.cards where userid = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$userID);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        } 
        public function createCard($cardNum,$expdate,$carduser,$cardcvv,$userID){
            try{
                $sql = "insert into geotraveler.cards (cardNumber,exprDate,cardUser,cardcvv,userid) values ('$cardNum','$expdate','$carduser','$cardcvv','$userID')";
                $stmt = $this->db->query($sql);
                // $stmt->bindparam(':card_number', $card_num);
                // $stmt->bindparam(':expr_date', $exp_date);
                // $stmt->bindparam(':card_user', $card_user);
                // $stmt->bindparam(':cvv', $cvv);
                // $stmt->bindparam(':userid', intval($userID,10), \PDO::PARAM_INT);
               // $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        } 

        public function updateCard($card_num,$exp_date,$card_user,$cvv,$userID){
            try{
                $sql = "UPDATE geotraveler.cards SET cardNumber='$card_num', exprDate='$exp_date', cardUser='$card_user', cardcvv='$cvv', userid='$userID' WHERE userid = '$userID' ";
                $stmt = $this->db->query($sql);
                // $stmt->bindparam(':card_num',$card_num);
                // $stmt->bindparam(':exp_date',$exp_date);
                // $stmt->bindparam(':card_user',$card_user);
                // $stmt->bindparam(':cvv',$cvv);
                // $stmt->bindparam(':usrid',$userID);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        } 
          



        public function getUsers(){
            try{
                $sql = "SELECT * FROM geotraveler.users";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
?>