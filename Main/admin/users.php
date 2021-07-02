<?php 
require_once '../back-end/php/crud.php';
//session_start(); 
$c = 0;
if($_SESSION["Adminloggedin"] === true){

    $users = $crud->getAllUsers();
}else{
    echo "<script> window.alert('ERROR please login!!!'); window.location.replace('login.php'); </script>";
}

if(isset($_GET['UID'])){
	$result = $crud->deleteUser($_GET['UID']);

	header("location: index.php?page=users");
	session_start();
}



?>

<div class="container-fluid">
	

	<br>
	<div class="row">
		<div class="card col-lg-12">
		<div class="col-lg-12">
			<a href = "usersChange.php" class="btn btn-primary float-right btn-sm myclass" style = "margin-top:15px;"><i class="fa fa-plus"></i> Add Room</a>
			</div>
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
					<th class="text-center">action</th>
				</tr>
			</thead>
			<tbody>
			<?php while($row = $users->fetch(PDO::FETCH_ASSOC)) { ?>      
			<form method="post" action="#" >	
			<tr>
			<td>   <?php echo $row['id']; ?>    </td>
			<td>   <?php echo $row['name']; ?>    </td>
			<td>    <?php echo $row['surname']; ?>  </td>
			<td>   <?php echo $row['mobile']; ?> </td>
			<td>   <?php echo $row['email']; ?>  </td>
			<td>   <?php echo $row['username']; ?> </td>
			<td><?php echo $row['registeredAt']; ?></td>
			<td>
			<a href= <?php echo "usersChange.php?editUID=" . $row['id']; ?>  class="user-btn x-btn" style="color:green; margin-top:5px; margin-right:8px;">Edit</a>
			<a href= <?php echo "users.php?UID=" . $row['id']; ?>  class="user-btn x-btn" style="color:crimson; margin-top:5px;">Remove</a>
			</td>
			</tr>
			</form>
			<?php 
			$c++;
			}?>


			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>
<style>
input{
	text-align : center;
	border: none;
}
</style>

<script>

const inpts = document.querySelectorAll("td")
for (const inp of inpts) {
	inp.addEventListener('click', function(event) {
    inp.firstElementChild.disabled = false;
  })
}
</script>