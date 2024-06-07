<?php
 session_start();
 include '../connection.php';
 if(isset($_REQUEST['save'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
     
    $select_query = mysqli_query($conn,"select id, user_name from tbl_users where emailid='$email' and password='$password' and role = 1 and status=1");
    $rows = mysqli_num_rows($select_query);
    if($rows > 0)
    {
    $username = mysqli_fetch_row($select_query);
    
    $_SESSION['id'] = $username[0];
    $_SESSION['name'] = $username[1];
    header("Location: dashboard.php"); 
    }
    else
    { ?>
    <script>
            alert("You have entered wrong emailid or password.");
        </script>
    
    <?php
        
    }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css" >
</head>
<body>

        <div id="menu">
            <div id="logo">BIBILO<b style="color: #2c7ad6 ;">TECH</b>
            </div>
            <div id="menu1">
                <ul>
                    <a href="#"><li class="fa fa-home">Home</li></a>
                    <a href="admin.html"><li class="fa fa-user">Admin Login</li></a>
                    <a href="register.html"><li class="fa fa-registered">Register</li></a>
                    <a href="#"><li class="fa fa-user">Login</li></a>

                </ul>
            </div> 
        </div>
        <div id="slider">
            <div id="x">WELCOME TO BIBILO<b style="color: #2c7ad6;">TECH</b>
            <p style="font-size: 15PX;">YOU CAN WRITE SOME TEXT</p>
            </div> 
            <div id="y">
                <form  action="dashboard.php" method="post" id="l" onsubmit="return auth('y')">
                    <h1 style=" text-align: center; color: #117A65;">STUDENT</h1>
                    <div id="student">
                            EMAIL<br><input type="email" name="email" id="email" required="" class="t"/><br>
                            PASSWORD <br><input type="password" name="password" id="password" required="" class="t"/><br>
                            <button type="submit" style="border: none;width: 103%; height: 30px; background-color: #117A65; cursor: pointer;">Save</button>
                            <a href="#" style="color:blue; text-decoration: none;"><p >forget password</p></a>
                    </div>
            </form>
        </div>
            <div id="z">
                <form  action="dashboard.php" method="post" id="r" onsubmit="return auth('z')">
                    <h1 style=" text-align: center; color: white;">TEACHER</h1>
                    <div id="Teacher">
                        EMAIL<br><input type="email" name="email" id="email" required="" class="t"/><br>
                        PASSWORD <br><input type="password" name="password" id="password" required="" class="t"/><br>
                        <button type="submit" name="save" style="border: none;width: 103%; height: 30px; background-color: white; cursor: pointer;">Save</button>
                         <a href="#" style="color:white; text-decoration: none;"><p>forget password</p></a>
                    </div>
                </form>
            </div> 
        </div>
        <div id="down">
            <h3>Stay Connected</h3>
            <a href="#" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
            <a href="#" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            <a href="#" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            
        </div>
        <div class="footer">Developed By : YUVASHREE A <br> VIJAYALAKSHMI K <br> VISHALINI E</div>
    </div>

    <script>
        function auth(formType) {
        var email, password;
        if (formType === 'y') {
            email = document.getElementById('email').value;
            password = document.getElementById('password').value;
        } else if (formType === 'z') {
            email = document.getElementById('email').value;
            password = document.getElementById('password').value;
        }

        if (email && password) {
            alert("Login successfully");
            window.location.assign('dashboard.php');
            return false;
        }
    }
    </script>
</body>
</html>
