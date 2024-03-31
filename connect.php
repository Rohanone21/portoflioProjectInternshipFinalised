<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$message=$_POST['message'];
//Database connection
$conn=new mysqli('localhost','root','','test');
if($conn->connect_error){
die('Connection Failed : '.$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into test3(name,email,subject,address,contact,message) values(?,?,?,?,?,?)");
$stmt->bind_param("ssssis",$name,$email,$subject,$address,$contact,$message);
$stmt->execute();
echo "Registration Successfully...";
$stmt->close();
$conn->close();

}
?>