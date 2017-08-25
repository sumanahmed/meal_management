<?php 
include('lib/user.php');
include('inc/header.php'); 
Session::checkSession();
?>

<?php
if (isset($_GET['id'])) {
	$userid = (int)$_GET['id'];
	$sessId = Session::get("id");
	if ($userid != $sessId) {
		header("Location:index.php");
	}
}

$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
	$updatepass = $user->updatePassword($userid, $_POST);
}

?>

<div class="panel panel-default">
	<div class="panel-heading"> 
		<h2>Change Password<span class="pull-right"><a class="btn btn-primary" href="profile.php?id=<?php echo $userid; ?>">Back</a></span></h2>
	</div>
	<div class="panel-body">
		<div style="max-width:600px; margin:0 auto;">
	<?php
	if (isset($updatepass)) {
		echo $updatepass;
	}
	?>
	
		<form action="" method="POST">
			<div class="form-group">
				<label for="old_pass">Old Password</label>
				<input type="password" name="old_pass" id="old_pass" class="form-control" value="<?php ?>" />
			</div>
			<div class="form-group">
				<label for="new_pass">New Password</label>
				<input type="password" name="new_pass" id="new_pass" class="form-control" value="<?php  ?>" />
			</div>
			<button type="submit" name="update" class="btn btn-success">Update</button>		
		</form>
		
			
		</div>
	</div>
</div>
<?php include('inc/footer.php'); ?>