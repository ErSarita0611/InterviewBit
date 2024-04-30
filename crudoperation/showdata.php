<?php
include("connection.php");
session_start();

$sql="select * from student";
$que=$conn->query($sql);

if(isset($_REQUEST['did']))
{
	$id=$_GET['did'];
	$sql1="delete from student where id='$id'";
	$conn->query($sql1);
}


?>

<h1>Show Data</h1>
<a href="login.php">Logout</a>
<form method="POST">
	<table border="1">
		<td>Id</td>
		<td>Name</td>
		<td>Password</td>
		<td>mobile1</td>
		<td>mobile2</td>
		<td>email</td>
		<td>gender</td>
		<td>hobbie</td>
		<td>address</td>
		<td>dob</td>
		<td>image</td>
		<td>Edit</td>
		<td>Delete</td>
		<?php
		while($row=$que->fetch_object())
		{
			?>
			<tr>

			<td><?php echo $row->id ?></td>
			<td><?php echo $row->name ?></td>
			<td><?php echo $row->password ?></td>
			<td><?php echo $row->mobile1 ?></td>
			<td><?php echo $row->mobile2 ?></td>
			<td><?php echo $row->email ?></td>
			<td><?php echo $row->gender ?></td>
			<td><?php echo $row->hobbie ?></td>
			<td><?php echo $row->address ?></td>
			<td><?php echo $row->dob ?></td>
			<td><img src="img/<?php echo $row->image ?>" hight="70" width="70"></td>
			<?php
			?>

			<td><a href="form.php? eid=<?php echo $row->id ?>">Edit</a></td>

			<td><a href="showdata.php? did=<?php echo $row->id ?>">Delete</a></td>
			
			<?php
		}
		?>
	</tr>

	</table>
	
</form>