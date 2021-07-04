<?php 
if($_SESSION["Adminloggedin"] === true){

    $reservation = $crud->getAllReservations();
}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('loginForm.php'); </script>";
}

?>
<div class="container-fluid">
	<div class="col-lg-12">
	
		<div class="row mt-3">
			<div class="col-md-12">
			
				<div class="card">
					<div class="card-body">
					<div class="col-lg-12">
			<a href = "newReserv.php" class="btn btn-primary float-right btn-sm myclass" style = "margin-bottom: 10px;"><i class="fa fa-plus"></i> Add Booking</a>
			</div>
						<table class="table table-bordered">
							<thead>
								<th>ReservationID</th>
								<th>HotelID</th>
								<th>RoomID</th>
								<th>UserID</th>
								<th>Check-IN</th>
								<th>Check-OUT</th>
								<th>Action</th>
							</thead>
							<tbody>
						<?php while($row = $reservation->fetch(PDO::FETCH_ASSOC)) { ?>      

                        <tr>
						<td><?php echo $row['reservationID']; ?> </td>
						<td><?php echo $row['hotelID']; ?></td>
						<td><?php echo $row['roomID']; ?></td>
						<td><?php echo $row['userID']; ?></td>
						<td><?php echo $row['checkIN']; ?></td>
						<td><?php echo $row['checkOUT']; ?></td>
						<td>
						<a href= <?php echo "newReserv.php?resID=" . $row['reservationID'] . "&roomID=". $row['roomID'] . "&hotelID=" . $row['hotelID'] . "&checkIN=". $row['checkIN'] .  "&checkOUT=". $row['checkOUT'] . "&userID=". $row['userID']; ?>  class="user-btn x-btn" style="color:green; margin-top:5px; margin-right:8px;">Edit</a>
						<a href= <?php echo "deleteReservation.php?resID=" . $row['reservationID'] . "&roomID=". $row['roomID'] . "&hotelID=" . $row['hotelID']; ?> id = "updateProfile" class="user-btn x-btn" style="color:crimson; margin-top:5px;">Remove</a>
						</td>
						</tr>
                		<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

