<?php
$username =$_POST['username'];
$password =$_POST['password'];


$conn= new mysqli('localhost', 'root', '', 'sindhu');
 if($conn->connect_error) { 
    die('Connection Failed :' .$conn->connect_error);
}else{ $stmt =$conn->prepare("insert into signup(username,password) values(?, ?)");
     $stmt->bind_param("ss",$username,$password); 
$stmt->execute(); echo "registration Successfully...";
$stmt->close();
$conn->close();
}
?>