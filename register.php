<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registerr.css">
</head>
<body>
    
   <div class="form">
   <form action="" method="post">
        <h2>Register Here</h2>
       <div class="contain">
        <div class="img"><br><img src="./img/login_girl.png" alt=""></div>
       <div class="container">
       <div class="mb-3">
            <label for="">Name :</label>
            <input type="text" name="name" placeholder="Enter your Name" >
        </div>
        <div class="mb-3">
            <label for="">Email  :</label>
            <input type="email" name="email" placeholder="Enter your Email" >
        </div>
        <div class="mb-3">
            <label for="">Password :</label>
            <input type="password" name="password" placeholder="Enter your password" >
        </div>
        <div class="link">
        <a href="login.php">Already have an account</a>
        </div>
        <div class="regist-btn">
            <input type="submit" name="register" value="Register here">
        </div>
       
       </div>
       </div>
    </form>
   </div>
    <?php
        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password =$_POST['password'];

            //check wheather Email is already exixt 
            $check_query = mysqli_query($connect,"select * from student where email='$email'");
            $count = mysqli_num_rows($check_query);
            if($count >0){
                echo"<script>alert('This account is already exist please try with another email id or login  ');</script>";
            }else{
                $query= mysqli_query($connect,"insert into student(name,email,password) value('$name','$email','$password')");

                if($query){
                    echo "<script>window.open('login.php','_self')</script>";
                }else{
                    echo "Ho gaya Kuch Gadbad..";
                }
            }

           
        }
    ?>
</body>
</html>