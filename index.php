<?php  include('server.php');

	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$edit_state=true;
		$rec=@mysqli_query($db,"select * from info where id='$id'");
		$record=@mysqli_fetch_array($rec);
		$name=$record['name'];
		$college=$record['college'];
		$id=$record['id'];
	}


?>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
	
		<?php if(isset($_SESSION['msg'])): ?>
			<div class="alert alert-info">
				<?php
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				?>
			</div>
		<?php endif ?>
	
		<form method="post" action="server.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label>Name</label><br />
				<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
			</div>
			<div class="form-group">
				<label>College</label><br />
				<input type="text" name="college" class="form-control" value="<?php echo $college; ?>" required>
			</div>
			<div class="form-group">
			<?php if($edit_state==false): ?>
				<button class="btn btn-primary" type="submit" name="save" >Save</button>
			<?php else: ?>
				<button class="btn btn-primary" type="submit" name="update" >Update</button>				
			<?php endif ?>
			<a class="btn btn-info" href="display.php">Display Records</a>
			</div>
		</form>
		<div class="footer-copyright text-center py-3">
				Copyright &copy; 2019 Raj Mehta.
		</div>
	</body>
</html>