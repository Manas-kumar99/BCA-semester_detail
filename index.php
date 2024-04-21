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
    <title>Index page</title>
    <link rel="stylesheet" href="main.css">
    
</head>
<body><?php
include_once("header.php");
?>
    <div class="header2">
        <div class="link"><a href=""></a>  <?php
            $emailid =$_SESSION['admin'];
            $sql2 = "SELECT * FROM `student` WHERE email='$emailid'";
            $result2 = mysqli_query($connect,$sql2);
            while($fetch = mysqli_fetch_assoc($result2)){
                echo "";
                
                ?>
                <div class="detail">
                    
                            <div class="contain1">
                            <?php echo $fetch['name'] ?> 
                        </div>
                        
                           
                    </div>
                </tr>
                <?php break;
                
            }
        ?> </div>
        <div class="link"><a href="about.php">About</a></div>
        <div class="link"><a href="https://admissionpup.in/Index/institute_index/ins/Purnea">Admission University</a></div>
        <div class="link"><a href="https://online.purneacollege.ac.in/vocational/check-university-record.php?JSON=PPRaf2sADw5KgpHOdk4P2CT2qr0QKJoBKrwFVuFqSTm7bIFcrz">Admission BCA(collage)</a></div>
        <div class="link"><a href="https://examinationpup.in/build/index.php">Examination Form</a></div>
        <div class="link"><a href="https://examinationpup.in/build/index.php">Registration</a></div>
        <div class="link"><a href="https://www.purneauniversity.ac.in/news.php?type=examination">Result</a></div>
        <div class="link"><a href="faculty.php">Bca faculty</a></div>
    </div>
    <div class="contain">
   <div class="info"> 
      <div class="purnea">
        <a href="https://purneacollege.ac.in/">Purnea Collage Official Website</a>
        <a href="https://purneacollege.ac.in/">Purnea University Official Website</a>
    </div>
   
    </div>
  </div>

  <div class="bcadepartment">
    <div class="images">
        <div class="head"><p>Holi Celebration</p></div>
        <div class="mb-3">
        
            <video autoplay muted loop class="myVideo">
            <source class="myVideo" src="./bcaimg/videoholi.mp4" type="video/mp4">
            </video>
        </div>
       <div class="mb-3">
            <div class="img1">
                <img src="./bcaimg/pic3.jpg" alt="">
            </div>
            <div class="img2">
                <img src="./bcaimg/pic5.jpg" alt="">
            
            </div>
        </div>

        <div class="mb-3">
            <div class="img1">
                <img src="./bcaimg/pic6.jpg" alt="">
            </div>
            <div class="img2">
                <img src="./bcaimg/pic7.jpg" alt="">
            
            </div>
        </div>
       
    </div>

    </div>
  </div>

<div class="BcaPurnea">
    <div class="head"><p>Description - BCA in Purnea collage</p></div>
    <div class="des"><p>Information about the BCA (Bachelor of Computer Applications) program at Purnea College:-</p>
    </div>
    <div class="course">
        <p class="p-class"><div class="text">Course Overview :</div></p>
        <p>
        The Bachelor of Computer Applications (BCA) program at Purnea College offers a dynamic platform for students to delve into the world of computer science and applications. With a robust curriculum designed to blend theoretical knowledge with practical skills, students are equipped to tackle real-world challenges in the ever-evolving field of technology. Purnea College boasts state-of-the-art infrastructure and experienced faculty members who nurture and guide aspiring computer professionals. Through a combination of lectures, hands-on projects, and industry exposure, students develop a strong foundation in programming languages, database management, software engineering, and more. The BCA program at Purnea College not only focuses on academic excellence but also encourages holistic development, fostering critical thinking, creativity, and teamwork among its students. Graduates emerge well-prepared to excel in various roles across the IT industry or pursue advanced studies in the field.BCA is a three-year full-time undergraduate course offered by Purnea University, Purnea. The program aims to equip students with foundational knowledge and practical skills in computer applications.</p>
    </div>
    <div class="label-sem">Syllabus For BCA</div>
    <div class="syllabus">
        
       <div class="sem">
        <div class="first">First Semester</div>
        <p>Subjects: ISC (Introduction to Computer Science)<br> Fundamentals of Computers<br> and English Language.</p>
       </div>
       <div class="sem">
        <div class="first">Second Semester</div>
        <p>Subjects:
            <br<br> C++ Programming<br> Data Structures<br> and Mathematics.</p>
       </div>
       <div class="sem">
        <div class="first">Third Semester</div>
        <p>Subjects: Database Management Systems (DBMS), Digital Computer Organization (DCO), and .NET Framework</p>
       </div>
       <div class="sem">
        <div class="first">Forth Semester</div>
        <p>Subjects: Mathematics<br> Operating Systems<br> and Relational Database Management Systems (RDBMS)</p>
       </div>
       <div class="sem">
        <div class="first">Five Semester</div>
        <p>Subject: Java Programming <br> Internet And Ecommwece <br> Computer Network</p>
       </div>
       <div class="sem">
        <div class="first">Six Semester</div>
        <p>Subject: Multimedia And Applications <br> Finanicial Accounting <br> Principal of Management</p>
       </div>

    </div>
</div>
<div class="footer">  
        <div class="footerone">
            <a href="https://www.bing.com/maps?mepi=127%7EDirections%7EUnknown%7EDirection_Button&ty=0&rtp=pos.25.768020629882812_87.45045471191406__Purnea+College__e_%7E&mode=d&v=2&sV=1&cp=25.758899%7E87.460186&lvl=12.7">Location</a>
        </div>
    <div class="footerone"><a href="placement.php">Placement</a></div>
    <div class="footerone"><a href="faculty.php">Faculty</a></div>
    <div class="footerone"><a href=""></a>Tel: 06454 2242667</div>
    <div class="footerone"><a href=""> purneacollege48@gmail.com
</a></div>
    
</div>
</body>
</html>
<!-- 
 
    <h2><a href="register.php">Register Page</a></h2>
    <h2><a href="logout.php">logout Page</a></h2>
    <h2><a href="login.php">login Page</a></h2>
    <h2><a href="detail.php">Detail Page</a></h2>
    <h2><a href="document.php">Document Page</a></h2>
footerone -->