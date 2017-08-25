<?php 
 include('inc/header.php'); 
 include('lib/user.php');
 Session::checkSession();

 ?>

<?php
$loginmsg = Session::get("loginmsg");
if (isset($loginmsg)) {
	echo $loginmsg;
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User list <span class="pull-right">Welcome !<strong>
			<?php
				$name = Session::get("name");
				if(isset($name)){
					echo $name;
				}
				Session::set("loginmsg", NULL);
			?>
		</strong>
		</span></h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<th width="20%">Serial</th>
			<th width="20%">Name</th>
			<th width="20%">Username</th>
			<th width="20%">Email</th>
			<th width="20%">Action</th>
			<?php
			 $user = new User();
			 $userData = $user->getUserData();
			 if ($userData) {
			 	$i=0;
			 	foreach($userData as $data) {
			 		$i++;
			 		?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $data['name']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=<?php echo $data['id']; ?>">view</a>
						</td>
					</tr>
			 		<?php
			 	}}else{	?>
			 		<tr><td colspan="5"><h2>No User Data Found.....</h2></td></tr>
					<?php
			 	}
			 
			?>
			

		</table>
	</div>
</div>
<?php include('inc/footer.php'); ?>