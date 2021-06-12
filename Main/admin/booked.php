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
						<table class="table table-bordered">
							<thead>
								<th>reservationID</th>
								<th>hotelID</th>
								<th>roomID</th>
								<th>userID</th>
								<th>checkIN</th>
								<th>checkOUT</th>
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
						<td><a href= <?php echo "deleteReservation.php?resID=" . $row['reservationID']; ?> id = "updateProfile" class="user-btn x-btn" style="color:crimson; margin-top:5px;">Remove</a></td>
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

