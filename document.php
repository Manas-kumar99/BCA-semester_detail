<?php
include_once("connect.php");

if(isset($_SESSION['admin'])){
    echo"Welcome"; 
    }else{
        echo"<script>window.open('login.php','_self')</script>";}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document page</title>
    <link rel="stylesheet" href="document.css">

</head>
   <body> 
   
      <p><?= $_SESSION['admin'];?></p>

        <?php
            $emailid =$_SESSION['admin'];
            

            // $conn =mysqli_connect("localhost","root","","collage") or die('Nhi ho paya...');
            $sql2 = "SELECT * FROM `detail` WHERE email='$emailid'";
            $result2 = mysqli_query($connect,$sql2);
            while($fetch = mysqli_fetch_assoc($result2)){
                echo "";
                ?>
            

             <div class="container">
                <div class="detail">
                    <div class="id">
                            <div class="contain">Id: <?php echo $fetch['id'] ?></div>
                            
                    </div>
                    <div class="name">
                            <div class="contain">Name :<?php echo $fetch['name'] ?> </div>
                            
                    </div>
                    <div class="uan">
                            <div class="contain">UA Number: <?php echo $fetch['uan'] ?></div>
                      
                    </div>
                    <div class="Reg_no">
                            <div class="contain">REG Number: <?php echo $fetch['regno'] ?></div>
                           
                    </div>
                    <div class="fname">  
                           <div class="contain">Father Name:  <?php echo $fetch['fname'] ?></div>
                            
                    </div>
                    <div class="mname">
                            <div class="contain">Mother: <?php echo $fetch['mname'] ?></div>
                           
                    </div>
                    <div class="dob">
                            <div class="contain">Date of Birth:  <?php echo $fetch['dob'] ?></div>
                   
                    </div>
                </div>   
           
            <div class="admit">Admit_Card
                <div class="admit1">sem-1 : <a href="./data/<?php echo $fetch['admitcardone']?>"><?php echo $fetch['admitcardone'] ?></a></div>
                <div class="admit1">sem-2 : <a href="./data/<?php echo $fetch['admitcardtwo']?>"><?php echo $fetch['admitcardtwo'] ?></a></div>
                <div class="admit1">sem-3 : <a href="./data/<?php echo $fetch['admitcardthree']?>"><?php echo $fetch['admitcardthree'] ?></a></div>
                <div class="admit1">sem-4: <a href="./data/<?php echo $fetch['admitcardfour']?>"><?php echo $fetch['admitcardfour'] ?></a></div>
                <div class="admit1">sem-5: <a href="./data/<?php echo $fetch['admitcardfive']?>"><?php echo $fetch['admitcardfive'] ?></a></div>
                <div class="admit1">sem-6 : <a href="./data/<?php echo $fetch['admitcardsix']?>"><?php echo $fetch['admitcardsix'] ?></a></div>
            </div>
            <div class="marksheet">Marksheet
                <div class="admit1">sem-1 :<a href="./data/<?php echo $fetch   ['marksheetone']?>"><?php echo $fetch['marksheetone'] ?></a> </div>
                <div class="admit1">sem-2 :<a href="./data/<?php echo $fetch   ['marksheettwo']?>"><?php echo $fetch['marksheettwo'] ?></a></div>
                <div class="admit1">sem-3 :<a href="./data/<?php echo $fetch   ['marksheetthree']?>"><?php echo $fetch['marksheetthree'] ?></a></div>
                <div class="admit1">sem-4 :<a href="./data/<?php echo $fetch   ['marksheetfour']?>"><?php echo $fetch['marksheetfour'] ?></a></div>
                <div class="admit1">sem-5 :<a href="./data/<?php echo $fetch   ['marksheetfive']?>"><?php echo $fetch['marksheetfive'] ?></a></div>
                <div class="admit1">sem-6 :<a href="./data/<?php echo $fetch   ['marksheetsix']?>"><?php echo $fetch['marksheetsix'] ?></a></div>
            </div>
            <div class="examination">Admission Recipt
                <div class="admit1">part-1 :<a href="./data/<?php echo $fetch['admissionone']?>"><?php echo $fetch['admissionone'] ?></a></div>
                <div class="admit1">part-2 :<a href="./data/<?php echo $fetch['admissiontwo']?>"><?php echo $fetch['admissiontwo'] ?></a></div>
                <div class="admit1">part-3 :<a href="./data/<?php echo $fetch['admissionthree']?>"><?php echo $fetch['admissionthree'] ?></a></div>
            </div>
            <div class="button">Action    :
            <div class="del">
            <a href="delete.php?id=<?php echo $fetch['id'] ?>"><button>Delete</button></a></div>

            <a href="logout.php"><button>Logout Here</button></a>
            </div>

           
        </div>  

                   
                <?php
                "";
            }
        ?> 
        <a href="logout.php">logout herr</a>
     </body>
</html>
