<?php
include_once("connect.php");

    if(isset($_SESSION['admin'])){
    echo"Welcome"; 
    }else{
        echo"<script>window.open('login.php','_self')</script>";
        echo"admin";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Page</title>
    <style>
        body{
            display: flex;
            flex-direction: center;
            text-align: center;
            align-items: center;
            text-decoration: none;
            color: yellow;
            background-color: gray;
        }
        .place{
            margin-left: 80px;
            font-size: 38px;
        }
    </style>
</head>
<body>
    <div class="palacemet">
        <div class="place">
           <a href=""><h1>Placement Lega Muh Dekha Hai ..</h1></a> 
            
        </div>
    </div>
</body>
</html>