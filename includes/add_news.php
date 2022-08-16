<?php
require('db.php');
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($db,$_POST['email']);

$query="INSERT INTO newsteller(email) VALUES('$email')";
if(mysqli_query($db,$query)){
    header("location:../index.php");
}else{
    echo "contact is not addedd !";
}

}
?>