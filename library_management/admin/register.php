<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

#menu{
height: 65px;
width: 100%;
background: #45B39D;

}
#logo{
height: 65px;
width: 40%;
text-align: center;
line-height: 65px;
font-size: 40px;
float: left;
}
#menu1{
height: 65px;
width: 60%;
float: left;

}
#menu1 UL{
list-style: none;
padding-left: 200px;
box-sizing: border-box;

}
#menu1 LI{
height: 45px;
width: 130px;

text-align: center ; 
display: inline-block; 
line-height: 45px;
transform: translateY(-5px);
color: black;
font-size: 20px;

}
#menu1 LI:hover{
background: #117A65;  
color: white; 
transition: all ease 1s;
border-radius: 3px;
}

#slider{
height:640px;
width: 100%;
background:url(1.jpg);
background-size: cover;
background-attachment: fixed;
/* animation-name:slider;
animation-duration: 20s;
animation-iteration-count:infinite ;
animation-delay: 3s;*/
}
/*
@keyframes slider{

from{
    background:url(image/4.jpg);
    background-size: cover;
    background-attachment: fixed;
}
to{
    background:url(image/4.jpg);
    background-size: cover;
    background-attachment: fixed;
} 
}
*/
#x{
height:640px;
width: 40%;
background:rgba(0,0,0, .4); 
float: left;
font-size: 41PX;
color: white;
text-align: center;
padding-top: 250px;
box-sizing: border-box;
}
#y{
height:640px;
width: 60%;
background:rgba(0,0,0, .4); 
float: left;


}

#l{
height:450px;
width: 60%;
background:rgba(255,255,255, .6); 
float: left; 
margin: 90px;
border-radius: 7px ;

}
#l:hover{
background:linear-gradient(45deg,rgba(69, 179, 157, 0.6),rgba(255,255,255, .6));
}


#student{
margin:50px 50px;
color: #117A65;

}
#Teacher{
margin:50px 50px;
color:white;
}
.t{
height: 40px;
width: 100%;
border: 2px solid green;
border-radius: 4px;
box-sizing: border-box;
margin-bottom: 15px;

}
#down{
height: 300px;
width: 100%;
margin-top: 10px;
background:#2c7ad6;
text-align: center;
padding-top: 10px;
color: white;
}
.footer{
height: 20px;
width: 100%;
background: black;
color: white;
text-align: center;
}
    </style>
</head>
<body>
        <div id="menu">
            <div id="logo">BIBILO<b style="color:#2c7ad6 ;">TECH</b>
            </div>
            <div id="menu1">
                <ul>
                    <a href="index.html"><li class="fa fa-home">Home</li></a>
                    <a href="#"><li class="fa fa-image">Gallery</li></a>
                    <a href="admin.html"><li class="fa fa-user">Admin Login</li></a>
                    <a href="register.html"><li class="fa fa-registered">Register</li></a>
                    <a href="index.html"><li class="fa fa-user">Login</li></a>

                </ul>
            </div>   
        </div>
        <div id="slider">
            <div id="x">WELCOME TO BIBLO<b style="color: blue;">TECH</b>
            <p style="font-size: 15PX;">YOU CAN WRITE SOME TEXT</p>
            </div> 
            <div id="y">
                <form  action="index.php" method="post" id="l">
                    <h1 style=" text-align: center; color: #117A65;">REGISTER</h1>
                    <div id="student">
                        EMAIL <br><input type="email" name="email" id="email" required="" class="t"/><br>
                        PASSWORD <br><input type="password" name="password" id="password" required="" class="t"/><br>
                        <button type="submit" onclick="auth('save')" style="border: none;width: 103%; height: 30px; background-color: #117A65; cursor: pointer;">Save</button>
                        <a href="#" style="color:blue; text-decoration: none;"><p >forget password</p></a>
                    </div>
                </form>
            </div> 
          
        </div>
        <div id="down">
            <h3>Stay Connected</h3>
            <a href="#" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
            <a href="#" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            <a href="#" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            <h2>Contant Address</h2>
            <a href="#" class="fa fa-home" style="text-decoration: none; padding: 10px 12px;color: white; ">
                vill : Mishr, post : Balah 
                Police Station : k
            </a> <br>
            <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
              +91-731
            </a> <br>
            <a href="#" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
              raviverma@gmail.com
              </a>
        </div>
        <div class="footer">Developed By : Ravi </div>
    </div>
    <script>
        function auth(formType) {
        var email, password;
        if (formType === 'y') {
            email = document.getElementById('email').value;
            password = document.getElementById('password').value;
        }
        if (email && password) {
            alert("Login successfully");
            window.location.assign('index.php');
        } else {
            alert("Please enter both email and password");
        }
    }
    </script>
</body>
</html>
