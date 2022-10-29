
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
       echo '<script>alert ("wrong credential")</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .table{
            border-radius:20px;
            text-align: center;
        }
        .form{
            border-radius:20px;
            text-align: center;
        }
        .body{
            text-align:center;
        }
        .table {
  width: 500px;
  border: 20px solid green;
  padding: 50px;
  margin: 50px;
  align:center;
  border-radius:20px;
}
.td1,.td2, .td3{
    border-radius:20px;
    border: 5px solid green;
    
}
div.footer{
  display: inline-block;
  color: white;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}
.h1{
    color:green;
    font-family:lucida;
}
    </style>

	<title>jtz login</title>
</head>
  <body class="body" bgcolor="#fffff">
    <center><h1 class="h1">PASSWORD POLICY LOGIN </h1></center>
    
    <form method = "post" class="form" name="login" onsubmit="return(notify());">
   
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
       <center> <table border="1" cellpadding="20" cellspacing="20" class="table"></center>
        <tr>
            <td class="td1">
                username: <input type = "text" name = "username" placeholder="enter your username"><br><br>
            </td>  
        </tr>  
        <tr>
            <td class="td2">
                passward: <input type = "password" name = "password" placeholder="enter your passward"><br><br>
            </td>
        </tr>
        <tr>
            <td class="td3">
                <input type = "submit" value = "login"> haven't account 
                <a href="register.php">register here</a>
            </td>
        </tr>
        <script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
    </table>
    <div class="footer">
	This site brought to you by<a href="mailto:jonastumainjohn@gmail.com">jonastumainjohn@gmail.com</a>

</div>
<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>