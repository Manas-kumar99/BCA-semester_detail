<?php
include_once("connect.php");

    if(isset($_SESSION['admin'])){
    // echo"Welcome"; 
    }else{
        echo"<script>window.open('login.php','_self')</script>";
        // echo"admin";

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty</title>
    <style>
        body{
            background-color: black;
            display: flex;
            justify-content: center;
        }
        
        .img{
            height: 96vh;
            width: 90%;
            border: 2px solid white;
            border-radius: 10px ;
           
           
        }
        .img>img{
            height: 80vh;
            width: 98%;
            padding-top: 10px;
            margin-left: 10px;
           
           
        }
        h1{
            text-align: center;
            color: white;
  
        }
    </style>
</head>
<body>
    <div class="img">
        <h1>Faculty of Bca Department</h1>
    <img src="./img/faculty.png" alt="">
    </div>
   
</body>
</html>