
<?php
session_start();
error_reporting(0);
include("connect.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username = '$username' and passward = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row['privelege'] == 'admin'){
        header('location: adminhome.php');
    }
    if($row['privelege'] == 'Student'){
        header('location: studenthome.php');
    }
    else{
       echo '<script>alert ("wrong username or password")</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .table{
            border-radius:20px;
        }
        .form{
            border-radius:20px;
        }
    </style>

	<title>jtz login</title>
</head>
<body bgcolor="white">
    <center><h1>JTZ LEARNING SITE LOGIN </h1></center>
    
    <form method = "post" name="login" onsubmit="return(notify());">
   
        <script>
    function notify() {
			if (document.login.username.value=="") {
				alert("Please enter your username!! ");
				document.login.username.focus();
				return false;
			}
            if (document.login.password.value=="") {
				alert("Please enter your passward!! ");
				document.login.password.focus();
				return false;
            }
        }
        </script>
       <center> <table border="1" cellpadding="20" cellspacing="20" class="table" class="form"></center>
        <tr>
            <td>
                username: <input type = "text" name = "username" placeholder="enter your username"><br><br>
            </td>  
        </tr>  
        <tr>
            <td>
                passward: <input type = "password" name = "password" placeholder="enter your passward"><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type = "submit" value = "login">
            </td>
        </tr>
        <script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
    </table>
</body>
</html>