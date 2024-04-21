<?php
include_once("connect.php");
$id = $_GET['id'];

 $result = mysqli_query($connect,"delete from detail where id=$id");
 if($result){
    echo"Delete ho gaya";
    header("location: document.php");

 }

?>