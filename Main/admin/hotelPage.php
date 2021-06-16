<?php 
 require_once '../back-end/php/crud.php';
session_start();

if($_SESSION["Adminloggedin"] === true){

    $hotels = $crud->getAllHotels();



}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('login.php'); </script>";
}

if(isset($_GET['HID'])){
	$result = $crud->deleteHotel($_GET['HID']);

	header("location: index.php?page=hotelPage");
	session_start(); 
}

?>



<div class="container-fluid">
	
	<div class="col-lg-12">
	
		<div class="row">
		
			<!-- FORM Panel -->

			<!-- Table Panel -->
		<div class="row">
		
		<div class="card col-lg-12">
			<div class="card-body">
			<div class="row">
			<div class="col-lg-12">
			<a href = "newHotel.php" class="btn btn-primary float-right btn-sm myclass" id="new_hotel"><i class="fa fa-plus"></i> Add Hotel</a>
			</div>
			</div>

				<table class="table-striped table-bordered col-md-12">
							<thead>
								<tr>
									<th class="text-center">id</th>
									<th class="text-center">name</th>
									<th class="text-center">min cost</th>
									<th class="text-center">hotel Description</th>
									<th class="text-center">region</th>
									<th class="text-center">tags</th>
									<th class="text-center">number of rooms</th>
									<th class="text-center">stars</th>
									<th class="text-center">action</th>
								</tr>
							</thead>
							<tbody>
							<?php while($row = $hotels->fetch(PDO::FETCH_ASSOC)) { ?>      

								<tr>
								<td class="text-center" ><?php echo $row['hotelId']; ?> </td>
								<td class="text-center" ><?php echo $row['hotelName']; ?></td>
								<td class="text-center" ><?php echo $row['minCost']; ?></td>
								<td ><?php echo $row['hotelDescr']; ?></td>
								<td class="text-center" ><?php echo $row['region']; ?></td>
								<td class="text-center" ><?php echo $row['nearAtractions']; ?></td>
								<td class="text-center" ><?php echo $row['roomSum']; ?></td>
								<td class="text-center" ><?php echo $row['rate']; ?></td>
								<td><a href= <?php echo "hotelPage.php?HID=" . $row['hotelId']; ?> id = "updateProfile" class="user-btn x-btn" style="color:crimson; margin-top:5px;">Remove</a></td>
								</tr>
							<?php }?>
							</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<style>
	img#cimg,.cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
	th{
		padding: 15px;
	}
	td{
		vertical-align: middle !important;
	}
	.myclass{
		margin : 15px;
	}
</style>
