<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college</title>
    <link rel="stylesheet" href="style.css">
     <link rel="icon" type="image/png" href="Tharunlogo.png">
</head>

<body>

    <div id="studentlogin">
        <br>
        <h4>Student login</h4>
        <form action="loginpage.php" method="post">
            <br><br><br>
            Username: <input type="text" name="user_s"> <br><br><br>
            Password: <input type="password" name="pass_s"><br><br>
            <?php
            include("database.php");

            if (isset($_POST["login_s"])) {
                if (empty($_POST["user_s"]) || empty($_POST["pass_s"])) {
                    echo '<p style="color:red;">Enter the valid username/password </p>';
                } else {
                    $found=false;
                    $username = $_POST["user_s"];
                    $password = $_POST["pass_s"];
                    $sql = "SELECT * FROM details ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($username == $row['username'] && password_verify($password, $row['password'])) {
                               $found=true;
                               $_SESSION['username'] = $username;
                                header("Location: homepage.php");
                                exit;
                            }
                        }
                        if($found==false){
                            echo '<p  style="color:red;">Invalid username/password<p>';
                        }
                    }
                     else {
                        echo ' <p style="color:red">No users found.</p>';
                    }
                }
            }
            ?>
            <br><br>
            <input type="submit" name="login_s" value="login" class="submit"><br><br>
        </form>

    </div>
    <div id="employlogin">
        <br>
        <h4>Admin login</h4>
        <form action="loginpage.php" method="post">
            <br><br><br>
            Username: <input type="text" name="user_a"> <br><br><br>
            Password: <input type="password" name="pass_a"><br><br>
             <?php
            

            if (isset($_POST["login_a"])) 
                if (empty($_POST["user_a"]) || empty($_POST["pass_a"])) {
                    echo "Enter the valid username/password";
                } 
                else{  
                    $username = $_POST["user_a"];
                    $password = $_POST["pass_a"];
                            if ($username == 'admin1' && $password=='pass1') {
                               $found=true;
                               $_SESSION['username'] = $username;
                              header("Location: adminpage.php");
                                exit;
                            }
                        
                             else{
                            echo "Invalid username/password";
                             }
                            }
                    
                
            
            ?>
            <br><br>
            <input type="submit" name="login_a" value="login" class="submit"><br><br>
        </form>
    </div>

</body>

</html>