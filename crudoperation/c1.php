<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create operation
if(isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read operation
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Update operation
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete operation
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM users WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML form for Create and Update -->
<form method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <button type="submit" name="create">Create</button>
</form>

<form method="post">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <button type="submit" name="update">Update</button>
</form>

<!-- HTML form for Delete -->
<form method="post">
    <input type="text" name="id" placeholder="ID">
    <button type="submit" name="delete">Delete</button>
</form>
