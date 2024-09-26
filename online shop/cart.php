<?php
$name =$_POST['name'];
$email =$_POST['email'];
$product =$_POST['product'];
$quantity =$_POST['quantity'];

$conn= new mysqli('localhost', 'root', '', 'sindhu');
 if($conn->connect_error) { 
    die('Connection Failed :' .$conn->connect_error);
}else{ $stmt =$conn->prepare("insert into cart(name,email,product,quantity) values(?,?,?,?)");
     $stmt->bind_param("sssi",$name,$email,$product,$quantity); 
$stmt->execute(); echo "registration Successfully...";
header("Location:product.html");
$stmt->close();
$conn->close();
}
?>