<?php
session_start();

$username = $_SESSION['username'] ?? 'Guest';
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" type="image/png" href="Tharunlogo.png">
    <link rel="stylesheet" href="addstudent.css">
</head>
<body>
    <div id="ascontainer">
    <div id="sidebar"> 
        <h2 id="admin"><?php echo "Welcome ,{$username}";?></h2>
        <ul id="dashboard">
            <li class="options" ><a href="adminpage.php" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-user icons"></i>My profile</a></li>
            <li  class="options" style="background-color:red"><a href="addstudent.php"  style="text-decoration:none;color:inherit" ><i class="fa-solid fa-user icons" ></i>Add Student Profile</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-clipboard-list icons"  ></i>Manage Attendance</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-chart-simple icons"></i>Marks & Results</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-calendar-week icons"></i>Time Table</a></li>
           <li class="options"> <a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-bell icons"></i>Notifications</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-gear icons"></i>Settings</a></li>
            <li class="options"><a href="loginpage.php" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-gear icons"></i>Logout</a></li>
        </ul>
    </div>
    <div id="ascontent">

        
        <form action="addstudent.php" method="post">
          <div id="personal">
            <h3 class="asmatter">Personal Details</h3>
             
                <p  class="asmatter">Student Id:</p><input type="text" name="studentid" class="wide-input">
                <p class="asmatter">First Name:</p><input type="text" name="firstname" class="wide-input">
                <p class="asmatter">last Name:</p><input type="text" name="lastname" class="wide-input">
                <p class="asmatter">Date of Birth:</p><input type="date" name="dob" class="wide-input">
                
            
          </div>
          <div id="address">
            <h3 class="asmatter">Contact & Address Details</h3>
             
                <p  class="asmatter">Phone Number:</p><input type="tel" name="number" class="wide-input">
                <p class="asmatter">Email:</p><input type="email" name="email" class="wide-input">
                <p class="asmatter">Address:</p><input type="text" name="address" class="wide-input">
                <p class="asmatter">City:</p><input type="text" name="city" class="wide-input">
                <p class="asmatter">State:</p><input type="text" name="state" class="wide-input">
               
             
          </div>
          <div id="academic">
            <h3 class="asmatter">Academic Details</h3>
            
                <p  class="asmatter">Admission no:</p><input type="text" name="admission" class="wide-input">
                <p class="asmatter">Department:</p><input type="text" name="dept" class="wide-input">
                <p class="asmatter">Course:</p><input type="text" name="course" class="wide-input">
                <p class="asmatter">Section:</p><input type="text" name="section" class="wide-input">
                <p class="asmatter">Batch:</p><input type="text" name="batch" class="wide-input">
          </div>
           <?php
           include("database.php");
        if(isset($_POST["addstudent"])){

               if (in_array('',$_POST)) {
                      echo "<script>alert('Enter all the Details')</script>";
              }

          else{
             $sql1="insert into personaldetails values('{$_POST['studentid']}','{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['dob']}')";
             $sql2 = "INSERT INTO contactdetails VALUES ('{$_POST['number']}','{$_POST['email']}','{$_POST['address']}','{$_POST['city']}','{$_POST['state']}')";
              $sql3 = "INSERT INTO academicdetails VALUES ('{$_POST['admission']}','{$_POST['dept']}','{$_POST['course']}','{$_POST['section']}','{$_POST['batch']}')";
              $password=password_hash($_POST['studentid'],PASSWORD_DEFAULT);
              $sql4="Insert into details(username,password) values('{$_POST['studentid']}','$password')";
            if (mysqli_query($con, $sql1) && mysqli_query($con, $sql2) && mysqli_query($con, $sql3) && mysqli_query($con, $sql4)) {
            echo "<script>alert('Student added successfully!');</script>";
            header("Location: addstudent.php?status=success");
            exit();
        } else {
            echo "<script>alert('Error while inserting. Check for duplicate IDs or database errors.');</script>";
        }
          }
        }
           ?>
          <input type="submit" name="addstudent"value="Add Student" id="addstudent">
      </form> 
    </div>
</div>
</body>
</html>