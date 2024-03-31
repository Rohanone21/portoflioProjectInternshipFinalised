
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if($conn){
    echo "connected;;;;;;;;;;;;;;;;;;;;;;;;;;;;";
}else
{
die("Connection Failed:". mysqli_connect_error());
}

$sql_query = "INSERT INTO entry_details VALUES ('rohan', 'rt@gmail.com', 'woow', 'bud', '8796098765', 'hey u chll')";
$res=mysqli_query($conn,$sql_query);

if($res){
    echo "ho gya insert";
}else{
    echo "gya";
}

?>