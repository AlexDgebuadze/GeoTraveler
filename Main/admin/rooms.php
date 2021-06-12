<?php
	session_start(); 
	require_once '../back-end/php/crud.php';
if($_SESSION["Adminloggedin"] === true){

    $room = $crud->getAllRooms();
}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('login.php'); </script>";
}

if(isset($_GET['RID'])){
	$result = $crud->deleteRoom($_GET['RID']);
	header("location: index.php?page=rooms");
	session_start(); 
}
?>

<div class="container-fluid">
	

	<br>
	<div class="row">
		<div class="card col-lg-12">
		<div class="col-lg-12">
			<a href = "newRoom.php" class="btn btn-primary float-right btn-sm myclass" id="new_hotel"><i class="fa fa-plus"></i> Add Room</a>
			</div>
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>	
				<tr>
					<th class="text-center">id</th>
					<th class="text-center">room description</th>
					<th class="text-center">hotel id</th>
					<th class="text-center">cost</th>
					<th class="text-center">room category</th>
					<th class="text-center">rooms</th>
					<th class="text-center">person number</th>
					<th class="text-center">reserved</th>
					<th class="text-center">action</th>
				</tr>
			</thead>
			<tbody>
			<?php while($row = $room->fetch(PDO::FETCH_ASSOC)) { ?>      

			<tr>
			<td class="text-center"><?php echo $row['roomid']; ?> </td>
			<td><?php echo $row['roomDescr']; ?></td>
			<td class="text-center"><?php echo $row['hotelID']; ?></td>
			<td class="text-center"><?php echo $row['cost']; ?></td>
			<td class="text-center"><?php echo $row['roomCategory']; ?></td>
			<td class="text-center"><?php echo $row['rooms']; ?></td>
			<td class="text-center"><?php echo $row['personNum']; ?></td>
			<td class="text-center"><?php echo $row['reserved']; ?></td>
			<td><a href= <?php echo "rooms.php?RID=" . $row['roomid']; ?> id = "updateProfile" class="user-btn x-btn" style="color:crimson; margin-top:5px;">Remove</a></td>
			</tr>
			<?php }?>


			</tbody>
		</table>
			</div>	
		</div>
	</div>

<style>
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

</div>