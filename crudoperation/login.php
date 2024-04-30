<?php
include("connection.php");

session_start();

if(isset($_POST['sub']))
{
	$name=$_POST['stdname'];
	$pass=$_POST['password'];

	$sql="select * from student where name='$name' and password='$pass'";

	//echo $sql;exit();
	$que=$conn->query($sql);
	$row=$que->fetch_object();
    header("location:showdata.php");
	//print_r($row);

	// if(count($row)>0)
	// {
	// 	$_SESSION['student']=$row->name;

	// 	header("location:showdata.php");

	
	// }
	// else
	// {
	// 	echo "<p style='color:red'>wrong username or password!</p>";
	// }
}
?>

<form method="post">
	stdname:<input type="text" name="stdname">
	<br>
	password:<input type="password" name="password">
	<br>
	<input type="submit" name="sub">
	
	
	
</form>