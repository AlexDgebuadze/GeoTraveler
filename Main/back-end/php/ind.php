   <h1 class="MainP">Pages We Already Did</h1>
    <?php $con = include_once('connect.php');
    $data = "SELECT * FROM item";
    $attribid = mysqli_query($con,$data) or die($con->error_log);
    $item = mysqli_query($con,$data) or die($con);
    $count=mysqli_num_rows($attribid);
    ?>
    <p class="itemCount">მოიძებნა: <?php echo $count; ?></p><br>

  <div class="items">  

  <?php  while($row = mysqli_fetch_array($item))
      {
        ?>
    <div class="item">
    
        <div class="picture">
       <?php echo '<img style="height: 170px; width: 175px;" src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>'; ?>
        </div>
        <div class="about">
            <p class="itemName"><?php echo $row['webname']; ?></p>
            <p class="itemDesc">აღწერა: <?php echo $row['descr']; ?></p>
        </div>
        </div> 

        <?php
      }
    ?>

