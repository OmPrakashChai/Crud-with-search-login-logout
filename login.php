<!DOCTYPE html>
<html>
<title>Login</title>
<head>
    <style type="text/css">
        body {
     font-family:Arial, Sans-Serif;
}
.clearfix:before, .clearfix:after{
     content: "";
     display: table;
}
.clearfix:after{
     clear: both;
}
a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.form{
     width: 300px;
     margin: 0 auto;
}
input[type='text'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color:   #e7d03a;
     text-shadow: rgba(231,208,58,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(231,208,58,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid  #e7d03a; 
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
input[type='submit']:hover {
     background-color: f0df74;
}
    </style>
</head>
<body>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="pwd" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<?php 
include 'dbconfig.php';
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    $select="SELECT * FROM students2 WHERE email='$email' && pwd='$pwd' ";
    $query = mysqli_query($conn,$select);
    $row=mysqli_num_rows($query);
    $fetch=mysqli_fetch_array($query);
    if ($row==1) {
$username=$fetch['name'];
session_start();
$_SESSION['name']=$username;
header('location:welcome.php');
    }
    else{
        echo "Invalid Email Or Passwors";
    }
}
 ?>
</div>
</body>
</html>
