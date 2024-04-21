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
    <title>Detail Page</title>
    <link rel="stylesheet" href="stylee.css">
   
</head>
<body>
    <?php include_once("header.php"); ?><br><br><br>
    <h1><?= $_SESSION['admin'];?></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Please Input Detail .....</h1>
        <div class="mb-3">
            <label for="">Email for Verification -</label>
            <input type="email" name="email" placeholder="email" id="email">
        </div>
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" id="name">
        </div>
        <div class="mb-3">
            <label for="">UAN</label>
            <input type="text" name="uan" placeholder="UAN Number" id="uan">
        </div>
        <div class="mb-3">
            <label for="">Reg No</label>
            <input type="text" name="regno" placeholder="Registration Number" id="regno">
        </div>
        <div class="mb-3">
            <label for="">Father Name</label>
            <input type="text" name="fname" placeholder="Father's Name" id="fname">
        </div>
        <div class="mb-3">
            <label for="">Mother Name</label>
            <input type="text" name="mname" placeholder="Mother's Name" id="mname">
        </div>
        <div class="mb-3">
            <label for="">Date Of Birth</label>
            <input type="date" name="dob" placeholder="Date Of Birth" id="fname">
        </div>
      


<!-----------------------------Admit card----------- --> 

        <div class="mb-3">
        <label for=" ">Admit Card Of Semester 1 to 6</label><br>
        <label for=" ">Admit Card(sem-1)</label>
        <input type="file" name="admitcardone" id ="admitcardone" placeholder="Admit-Card(sem-1)">
    
        <label for="">Admit Card(sem-2)</label>
        <input type="file" name="admitcardtwo" id ="admitcardtwo" placeholder="Admit-Card(sem-2)">
         <label for=" ">Admit Card(sem-3)</label>
        <input type="file" name="admitcardthree" id ="admitcardthree" placeholder="Admit-Card(sem-3)">
          <label for=" ">Admit Card(sem-4)</label>
        <input type="file" name="admitcardfour" id ="admitcardfour" placeholder="Admit-Card(sem-4)">
         <label for=" ">Admit Card(sem-5)</label>
        <input type="file" name="admitcardfive" id ="admitcardfive" placeholder="Admit-Card(sem-5)">
         <label for=" ">Admit Card(sem-6)</label>
        <input type="file" name="admitcardsix" id ="admitcardsix" placeholder="Admit-Card(sem-6)">  
       
       </div>

<!-- ---------------------------MARKSHEET SECTION----------------------- -->
      
        <div class="mb-3">
        <label for="">Marksheet of Semester 1 to 6 </label><br>
        <label for="">Marksheet(sem-1)</label>
        <input type="file" name="marksheetone" id ="marksheetone" placeholder="marksheet(sem-1)">
        <label for=" ">Marksheet(sem-2)</label>
        <input type="file" name="marksheettwo" id ="marksheettwo" placeholder="marksheet(sem-2)">
        <label for=" ">Marksheet(sem-3)</label>
        <input type="file" name="marksheetthree" id ="marksheetthree" placeholder="marksheet(sem-3)">
        <label for=" ">Marksheet(sem-4)</label>
        <input type="file" name="marksheetfour" id ="marksheetfour" placeholder="marksheet(sem-4)">
        <label for=" ">Marksheet(sem-5)</label>
        <input type="file" name="marksheetfive" id ="marksheetfive" placeholder="marksheet(sem-5)">
        <label for=" ">Marksheet(sem-6)</label>
        <input type="file" name="marksheetsix" id ="marksheetsix" placeholder="marksheet(sem-6)">
    
       </div> 


       <!------------------Admission-------------------->
       <div class="mb-3">
        <label for=" ">Admission Recipt</label><br>
        <label for=" ">Admission (sem-1)</label>
        <input type="file" name="admissionone" id ="admissionone" placeholder="admission(part-1)">
        <label for=" ">Admission (sem-2)</label>
        <input type="file" name="admissiontwo" id ="admissiontwo" placeholder="admission(part-2)">
        <label for=" ">Admission (sem-3)</label>
        <input type="file" name="admissionthree" id ="admissionthree" placeholder="admission(part-3)">
       </div>

       <div class="mb-3">
        <input type="submit" name="submit" value="submit">
       </div>
   
    </form>


    <!-- __________________Php Work________________________ -->
    <?php
        if(isset($_POST['submit'])){
            //connection---------- not written
            $email = $_POST['email'];
            $name = $_POST['name'];
            $uan =$_POST['uan'];
            $regno =$_POST['regno'];
            $fname =$_POST['fname'];
            $mname =$_POST['mname'];
            $dob=$_POST['dob'];

            // __________________Images_________
            $admitone =$_FILES["admitcardone"]["name"];
            $tmp1_file =$_FILES["admitcardone"]["tmp_name"];
            $admittwo =$_FILES["admitcardtwo"]["name"];
            $tmp2_file =$_FILES["admitcardtwo"]["tmp_name"];
            $admitthree =$_FILES["admitcardthree"]["name"];
            $tmp3_file= $_FILES["admitcardthree"]["tmp_name"];
            $admitfour =$_FILES["admitcardfour"]["name"];
            $tmp4_file= $_FILES["admitcardfour"]["tmp_name"];
            $admitfive =$_FILES["admitcardfive"]["name"];
            $tmp5_file= $_FILES["admitcardfive"]["tmp_name"];
            $admitsix =$_FILES["admitcardsix"]["name"];
            $tmp6_file= $_FILES["admitcardsix"]["tmp_name"];
// ---------------------------------------------------------------------------
            $markone =$_FILES["marksheetone"]["name"];
            $tmp7_file= $_FILES["marksheetone"]["tmp_name"];
           
            $marktwo =$_FILES["marksheettwo"]["name"];
            $tmp8_file= $_FILES["marksheettwo"]["tmp_name"];

            $markthree =$_FILES["marksheetthree"]["name"];
            $tmp9_file= $_FILES["marksheetthree"]["tmp_name"];

            $markfour =$_FILES["marksheetfour"]["name"];
            $tmp10_file= $_FILES["marksheetfour"]["tmp_name"];

            $markfive =$_FILES["marksheetfive"]["name"];
            $tmp11_file= $_FILES["marksheetfive"]["tmp_name"];

            $marksix =$_FILES["marksheetsix"]["name"];
            $tmp12_file= $_FILES["marksheetsix"]["tmp_name"];

// --------------------------------------------------------------------------------
            $addone =$_FILES["admissionone"]["name"];
            $tmp13_file= $_FILES["admissionone"]["tmp_name"];
           
            $addtwo =$_FILES["admissiontwo"]["name"];
              $tmp14_file= $_FILES["admissiontwo"]["tmp_name"];

            $addthree =$_FILES["admissionthree"]["name"];
              $tmp15_file= $_FILES["admissionthree"]["tmp_name"];


            // $tempfile =$_FILES["admitcardone"]["temp_name"];
            $folder1="data/".$admitone;
            $folder2="data/".$admittwo;
            $folder3="data/".$admitthree;
            $folder4="data/".$admitfour;
            $folder5="data/".$admitfive;
            $folder6="data/".$admitsix;


            $folder7="data/".$markone;
            $folder8="data/".$marktwo;
            $folder9="data/".$markthree;
            $folder10="data/".$markfour;
            $folder11="data/".$markfive;
            $folder12="data/".$marksix;

            $folder13="data/".$addone;
            $folder14="data/".$addtwo;
            $folder15="data/".$addthree;
            
            $sql = "INSERT INTO `detail`(email,name,uan,regno,fname,mname,dob,admitcardone,admitcardtwo,admitcardthree,admitcardfour,admitcardfive,admitcardsix,marksheetone,marksheettwo,marksheetthree,marksheetfour,marksheetfive,marksheetsix,admissionone,admissiontwo,admissionthree)VALUES('$email','$name','$uan','$regno','$fname','$mname','$dob','$admitone','$admittwo','$admitthree','$admitfour','$admitfive','$admitsix','$markone','$marktwo','$markthree','$markfour','$markfive','$marksix','$addone','$addtwo','$addthree')";

            $result = mysqli_query($connect,$sql);
            move_uploaded_file($tmp1_file,$folder1);
            move_uploaded_file($tmp2_file,$folder2);
            move_uploaded_file($tmp3_file,$folder3);
            move_uploaded_file($tmp4_file,$folder4);
            move_uploaded_file($tmp5_file,$folder5);
            move_uploaded_file($tmp6_file,$folder6);
            move_uploaded_file($tmp7_file,$folder7);
            move_uploaded_file($tmp8_file,$folder8);
            move_uploaded_file($tmp9_file,$folder9);
            move_uploaded_file($tmp10_file,$folder10);
            move_uploaded_file($tmp11_file,$folder11);
            move_uploaded_file($tmp12_file,$folder12);
            move_uploaded_file($tmp13_file,$folder13);
            move_uploaded_file($tmp14_file,$folder14);
            move_uploaded_file($tmp15_file,$folder14);
            
            
             if($result){
               echo "<script>alert('Successfully submited')</script>";
               echo"<script>window.open('document.php','_self')</script>";
               
             }else{
                echo"you need to uploade Right document";
             }
        }
    ?>
 </body>
</html> 
