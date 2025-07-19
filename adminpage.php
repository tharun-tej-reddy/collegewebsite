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
</head>
<body>
<div id="container">
    <div id="sidebar"> 
        <h2 id="admin"><?php echo "Welcome ,{$username}";?></h2>
        <ul id="dashboard">
            <li class="options" style="background-color:red"><a href="adminpage.php" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-user icons"></i>My profile</a></li>
            <li  class="options"><a href="addstudent.php"  style="text-decoration:none;color:inherit" ><i class="fa-solid fa-user icons" ></i>Add Student Profile</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-clipboard-list icons"  ></i>Manage Attendance</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-chart-simple icons"></i>Marks & Results</a></li>
            <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-calendar-week icons"></i>Time Table</a></li>
           <li class="options"> <a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-bell icons"></i>Notifications</a></li>
           <li class="options"><a href="https:google.com" target="_blank" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-gear icons"></i>Settings</a></li>
            <li class="options"><a href="loginpage.php" style="text-decoration:none;color:inherit" ><i class="fa-solid fa-gear icons"></i>Logout</a></li>
        </ul>
    </div>
    <div id="profile">
     
    <h1 id="biodata">BIO-DATA</h1>
<div id="content">
    
    <i id="matter">
        <span class="high">Dr. Radhika Iyer</span> <br>
Email: riyer@xyz.edu <br>
 Phone: +91-9876543210<br>
LinkedIn: linkedin.com/in/radhikaiyer<br><br>

-> <span class="high">PROFESSIONAL SUMMARY</span> <br>
Dedicated Assistant Professor in Chemistry with 6+ years of teaching and research experience. Specializes in organic synthesis and green chemistry. Passionate about integrating technology into the classroom.
<br><br>

-> <span class="high">EDUCATION</span> <br>
Ph.D. in Chemistry – University of Delhi – 2020<br>
Dissertation: "Green Catalysts in Pharmaceutical Synthesis"<br>
M.Sc. in Chemistry – University of Hyderabad – 2015 <br>
B.Sc. in Chemistry – Osmania University – 2013<br><br>

-> <span class="high">TEACHING EXPERIENCE</span> <br>
Assistant Professor – XYZ College, University of Mumbai (2020–Present)<br>
Courses: Organic Chemistry I & II, Environmental Chemistry<br>
Mentored 20+ undergraduate projects; Received 4.7/5 average teaching score<br><br>

-> <span class="high">PUBLICATIONS</span> <br>
1. Iyer, R., & Sharma, M. (2022). "Eco-friendly Synthesis of Heterocycles." *Journal of Green Chemistry*, 28(3), 205-218.<br>
2. Iyer, R. (2021). "Catalyst Design for Efficient Reactions." *Indian Journal of Chemistry*, 45(2), 130-140.<br><br>

-> <span class="high">REFERENCES</span> <br>
Dr. Meena Kapoor<br>
Professor, University of Delhi<br>
Email: m.kapoor@du.ac.in<br>
Phone: +91-9876543211</i>
    <div id="profilepic"><img src="profilepic.jpeg" alt=""></div>
    
</div>

    </div>

    
</div>
    
</body>
</html>