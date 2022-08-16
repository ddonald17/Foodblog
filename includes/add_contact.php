<?php
require('db.php');
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($db,$_POST['name']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$message=mysqli_real_escape_string($db,$_POST['message']);

$query="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
if(mysqli_query($db,$query)){
    header("location:../contact.php");
}else{
    echo "contact is not addedd !";
}

}
?>