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
        </ul>
    </div>
    <div id="ascontent">

        
        <form action="" method="post">
          <div id="personal">
            <h3 class="asmatter">Personal Details</h3>
             
                <p  class="asmatter">Student Id:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">First Name:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">last Name:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">Date of Birth:</p><input type="date" name="name" class="wide-input">
                <p class="asmatter">Photo:</p><input type="file" name="name" class="wide-input">
            
          </div>
          <div id="address">
            <h3 class="asmatter">Contact & Address Details</h3>
             
                <p  class="asmatter">Phone Number:</p><input type="tel" name="name" class="wide-input">
                <p class="asmatter">Email:</p><input type="email" name="name" class="wide-input">
                <p class="asmatter">Address:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">City:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">State:</p><input type="text" name="name" class="wide-input">
               
             
          </div>
          <div id="academic">
            <h3 class="asmatter">Academic Details</h3>
            
                <p  class="asmatter">Admission no:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">Department:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">Course:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">Section:</p><input type="text" name="name" class="wide-input">
                <p class="asmatter">Batch:</p><input type="text" name="name" class="wide-input">
          </div>
           
          <input type="submit" value="Add student">
      </form> 
    </div>
</div>
</body>
</html>