<?php
include_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <form action="" method="post">
        <h2 class="h2-login">Login Here</h2>
       <div class="contain">
       <div class="mb-3">
            <label for="email">Email :</label>
            <input type="email" name="email" placeholder="Enter your Email" >
        </div>
        <div class="mb-3">
            <label for="">Password :</label>
            <input type="password" name="password" placeholder="Enter your password" >
        </div>
        <div class="linkregister"><a href="register.php">Not an a Account yet </a></div>
        <div class="bt-login">
            <input class="btn-login" type="submit" name="login" value="Login here">
        </div>
       </div>
        
    </form>

    <?php
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password =$_POST['password'];

            $query = mysqli_query($connect,"select * from student where password ='$password' and email ='$email'");

            $count = mysqli_num_rows($query);
            echo "$count";

            if($count >0){
                $_SESSION['admin']= $email;
                echo"<script>window.open('index.php','_self')</script>";
            }else{
               echo '<script>alert("Please enter valid Email or Password");</script>';
            }
        }
    ?>
    <!-- <script type="text/javascript">
               function showMessage() {
                   
               }
           </script>"; -->
    
</body>
</html>