<?php
// Connect to the database
/*$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "database123";
$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepared statement for security and error handling
$stmt = mysqli_prepare($conn, "INSERT INTO entry_details (name, email, subject, address, contact, message) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Prepared statement failed: " . mysqli_error($conn));
}

// Bind parameters (prevents SQL injection)
mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $subject, $address, $contact, $message);

// If form is submitted
if (isset($_POST['save'])) {
    // Sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        echo "New Details Entry successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);*/

$server_name="localhost";
$username="root";
$password="";
$database_name="database123";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
die("Connection Failed:". mysqli_connect_error());
}
if(isset($_POST['save']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$message = $_POST['message'];


$sql_query = "INSERT INTO entry_details VALUES ('$name', '$email', '$subject', '$address', '$contact', '$message')";

if (mysqli_query($conn, $sql_query)) {
    echo "New Details Entry successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
}


?>
