<?php
include_once("connect.php");

    if(isset($_SESSION['admin'])){
    // echo"Welcome"; 
    }else{
        echo"<script>window.open('login.php','_self')</script>";
        // echo"admin";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        .main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px 80px;
            border: 2px solid white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="main">
        <img src="./img/aboutuniver.png" alt="">
        <img src="./img/university.png" alt="">
    </div>
</body>
</html>