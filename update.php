<?php include('server.php'); ?>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
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
			</div>
		</form>
	</body>
</html>