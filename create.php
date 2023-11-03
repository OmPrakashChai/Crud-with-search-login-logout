<!DOCTYPE html>
<html>
<title>Create</title>
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
  <center>
<h2>Register Form</h2>
<form action="" method="post">
<input type="text" name="name" placeholder="Enter Name" required /><br>
<input type="text" name="age" placeholder="Enter Age" required /><br>
<input type="email" name="email" placeholder="Enter Email" required /><br>
<input type="password" name="pwd" placeholder="Enter Password" required /><br>
<input type="password" name="conpwd" placeholder="Confirm Password" required /><br>
<input name="submit" type="submit" value="submit" />
</form>
</center>
</body>
</html>

<?php
include "dbconfig.php";
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $conpwd = $_POST['conpwd'];

if ($name !="" && $age !="" && $email !="" && $pwd !="" && $conpwd !="") {

  if ($pwd==$conpwd) {

    $sql = "INSERT INTO `students2`(`name`, `age`, `email`,`pwd`,`conpwd`) VALUES ('$name','$age','$email','$pwd','$conpwd')";
    $result = $conn->query($sql);


    if ($result == TRUE) {
      echo "New record created successfully.";
      header('Location: read.php');
      
    }
    else{
      echo "Error:". $sql . "<br>". $conn->error;
    }
  }

  else{
  echo "Password does't match";
}
}
  else{
  echo "Fill the form";
}
}
$conn->close();
?>