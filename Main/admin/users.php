<?php 
if($_SESSION["Adminloggedin"] === true){

    $users = $crud->getAllUsers();
}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('login.php'); </script>";
}

?>

<div class="container-fluid">
	

	<br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>	
				<tr>
					<th class="text-center">id</th>
					<th class="text-center">name</th>
					<th class="text-center">surname</th>
					<th class="text-center">mobile</th>
					<th class="text-center">email</th>
					<th class="text-center">username</th>
					<th class="text-center">Registered at</th>
				</tr>
			</thead>
			<tbody>
			<?php while($row = $users->fetch(PDO::FETCH_ASSOC)) { ?>      

			<tr>
			<td><?php echo $row['id']; ?> </td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['surname']; ?></td>
			<td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['registeredAt']; ?></td>
			</tr>
			<?php }?>


			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>
