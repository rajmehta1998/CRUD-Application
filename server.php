<?php
	session_start();

	$name="";
	$college="";
	$id=0;
	$edit_state=false;

	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '1234');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'crud1');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .mysqli_connect_error());
	
	
	if(isset($_POST['save']))
	{
		$name=$_POST['name'];
		$college=$_POST['college'];
		$query="insert into info(name, college) values('$name', '$college')";
		@mysqli_query($db,$query);
		$_SESSION['msg']="Saved";
		header('location: index.php');
	}
	
	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$college=$_POST['college'];
		$id=$_POST['id'];
		
		@mysqli_query($db,"update info set name='$name', college='$college' where id=$id");
		$_SESSION['msg']="Updated";
		header('location: display.php');
	}
	
	if(isset($_GET['del']))
	{
		$id=$_GET['del'];
		@mysqli_query($db,"delete from info where id='$id'");
		$_SESSION['msg']="Deleted";
		header('location: display.php');
	}
	
	$results= @mysqli_query($db,"select * from info");

?>