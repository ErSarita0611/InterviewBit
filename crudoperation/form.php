<?php
include("connection.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $pass = $_POST['password'];
    $mobile1 = $_POST['mobile1'];
    $mobile2 = $_POST['mobile2'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $hoby = implode(',',$_POST['hobbie']);
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $photo = $_FILES['image']['name'];

    $sql = " insert into student(name,password,mobile1,mobile2,email,gender,hobbie,address,dob,image)
    VALUE('$name','$pass','$mobile1','$mobile2','$email','$gender','$hoby','$address','$dob','$photo')";
    // echo $sql; exit;
    $conn->query($sql);
    // print_r($conn);

    move_uploaded_file($_FILES['image']['tmp_name'], "img/".$photo);
    // header("location:login.php");
}

if(isset($_REQUEST['eid']))
{
	$id=$_GET['eid'];

	$sql1="select * from student where id='$id'";
	$q1=$conn->query($sql1);
	$row1=$q1->fetch_object();

	if(isset($_POST['update']))
	{
	$name1=$_POST['name'];
	$pass=$_POST['password'];
	$mob1=$_POST['mobile1'];
	$mob2=$_POST['mobile2'];
	$emal = $_POST['email'];
    $gen = $_POST['gender'];
    $hobi = implode(',',$_POST['hobbie']);
    $address = $_POST['address'];
    $db = $_POST['dob'];
    $photos = $_FILES['image']['name'];

	$sql2="update student set name='$name1',password='$pass',mobile1='$mob1',mobile2='$mob2'
    ,email='$emal',gender='$gen',hobbie='$hobi',address='$address',dob='$db',image='$photos'";

	$conn->query($sql2);
	$dir="img/".$_FILES['image']['name'];

	if(file_exists($dir))
	{
		unlink($image);
	}
else
{
	move_uploaded_file($_FILES['image']['tmp_name'], "img/".$images);
}

header("location:showdata.php");
	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session CrudOperation</title>
</head>
<body>

<?php
	if(isset($_REQUEST['eid']))
	{
		?>
<form action="" method="post" enctype="multipart/form-data">
        <table border="2">
            <tr>
                <th>Enter Name</th>
                <td><label for=""><input type="text" name="name" id="" value="<?php echo $row1->name ?>"></label></td>
            </tr>
            <tr>
                <th>Enter Password</th>
                <td><label for=""><input type="password" name="password" id="" value="<?php echo $row1->password ?>"></label></td>
            </tr>
            <tr>
                <th>Enter Mobile1</th>
                <td><label for=""><input type="text" name="mobile1" id="" value="<?php echo $row1->mobile1 ?>"></label></td>
            </tr>
            <tr>
                <th>Enter Mobile2</th>
                <td><label for=""><input type="text" name="mobile2" id="" value="<?php echo $row1->mobile2 ?>"></label></td>
            </tr>

            <tr>
                <th>Enter Email</th>
                <td><label for=""><input type="email" name="email" id="" value="<?php echo $row1->email ?>"></label></td>
            </tr>
            <tr>
                <th>Enter Gender</th>
                <td><label for=""><input type="radio" name="gender" value="male"
                <?php

	                	if($row1->gender =='male')
	                	{
	                		echo "checked";
	                	}
	                	?>>male
                                  <input type="radio" name="gender" value="female"
                                  <?php
	                	if($row1->gender =='female')
	                	{
	                		echo "checked";
	                	}
	                	?>>Female
                    </label></td>
            </tr>
            <tr>
                <th><label for="">Enter Hobbies</label></th>
                <td>
                <?php
						$ex=explode(",",$row1->hobbie);
						?>
                        <input type="checkbox" name="hobbie[]" id="" value="Cricket"
                        <?php
						if(in_array("Cricket",$ex))
						{
							echo "checked";
						}
						?>>Cricket
                    <input type="checkbox" name="hobbie[]" id="" value="Yoga"
                    <?php
						if(in_array("Yoga",$ex))
						{
							echo "checked";
						}
						?>>Yoga
                    <input type="checkbox" name="hobbie[]" id="" value="meditasion"
                    <?php
						if(in_array("meditasion",$ex))
						{
							echo "checked";
						}
						?>>Meditasion
                    <input type="checkbox" name="hobbie[]" id="" value="dancing"
                    <?php
						if(in_array("dancing",$ex))
						{
							echo "checked";
						}
						?>>Dancing
            </td>
            </tr>
            <tr>
			<th><label>Enter address</label></th>
			<td><textarea name="address" id="" value="<?php echo $row1->address ?>"></textarea></td>
		</tr>
            <tr>
                <th><label for="">Select DOB</label></th>
                <td><input type="date" name="dob" id="" value="<?php echo $row1->dob ?>"></td>
            </tr>

            <tr>
                <th><label for="">Upload Your Image</label></th>
                <td><input type="file" name="image" value="<?php echo $row1->image ?>"></td>
            </tr>
            <tr>
                <th colspan="2" align="center"><input type="submit" name="submit" id=""></th>
            </tr>
        </table>
    </form>
    <?php
	}
	else
	{
        ?>




    <form action="" method="post" enctype="multipart/form-data">
        <table border="2">
            <tr>
                <th>Enter Name</th>
                <td><label for=""><input type="text" name="name" id=""></label></td>
            </tr>
            <tr>
                <th>Enter Password</th>
                <td><label for=""><input type="password" name="password" id=""></label></td>
            </tr>
            <tr>
                <th>Enter Mobile1</th>
                <td><label for=""><input type="text" name="mobile1" id=""></label></td>
            </tr>
            <tr>
                <th>Enter Mobile2</th>
                <td><label for=""><input type="text" name="mobile2" id=""></label></td>
            </tr>

            <tr>
                <th>Enter Email</th>
                <td><label for=""><input type="email" name="email" id=""></label></td>
            </tr>
            <tr>
                <th>Enter Gender</th>
                <td><label for=""><input type="radio" name="gender" value="male">male
                                  <input type="radio" name="gender" value="female">Female
                    </label></td>
            </tr>
            <tr>
                <th><label for="">Enter Hobbies</label></th>
                <td><input type="checkbox" name="hobbie[]" id="" value="Cricket">Cricket
                    <input type="checkbox" name="hobbie[]" id="" value="Yoga">Yoga
                    <input type="checkbox" name="hobbie[]" id="" value="meditasion">Meditasion
                    <input type="checkbox" name="hobbie[]" id="" value="dancing">Dancing
            </td>
            </tr>
            <tr>
			<th><label>Enter address</label></th>
			<td><textarea name="address" id=""></textarea></td>
		</tr>
            <tr>
                <th><label for="">Select DOB</label></th>
                <td><input type="date" name="dob" id=""></td>
            </tr>

            <tr>
                <th><label for="">Upload Your Image</label></th>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <th colspan="2" align="center"><input type="submit" name="submit" id=""></th>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
    
    
</body>
</html>