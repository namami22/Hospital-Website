<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'namami');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="INSERT INTO userinfodata(user, email, mobile, comment) VALUES ('$user','$email','$mobile','$comment')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>