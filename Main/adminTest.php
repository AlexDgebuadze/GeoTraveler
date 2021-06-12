<?php 
require_once dirname(__FILE__).'/back-end/php/crud.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    //$imgData = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $imgData = file_get_contents($_FILES['img']['tmp_name']);
   // $img = base64_decode($imgData);

    // $crud->addNewHotel('name', $imgData, '254', 'descrdesceqwqw','Adjara','Art','6','4');    
    // $crud->deleteHotel("36");
    //$crud->addNewRoom($imgData, "aaasas", "1", "230", "Luxury", "5", "3");
    //$crud-> deleteRoom("1","4");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
  <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/jpg">
  <input type="submit" name="submit" value="Submit">  
</form>

    <label for=""></label>


</body>
</html>