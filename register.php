<?php
session_start();
include("connect.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $fullname = $_POST['fullname'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
    $passward = $_POST['passward'];
	$myfile = $_POST['myfile'];
    $privelege = 'Student';
	$comment = $_POST['comment'];

    $sql = "insert into user (fname,sname,username,dob,gender,contact,email,passward,myfile,privelege,comment) values('$fname','$sname','$fullname','$dob','$gender','$contact','$email','$passward','myfile','$privelege','$comment')";
    mysqli_query($conn,$sql);
   
}

?>
<!DOCTYPE html>
<html>
<head>
	<script>
function succsess() {
			if (document.jona.submit.value=="fname,sname,fullname,gender,date,passward") {
				alert("registration successfull please click the link below to login ");
				document.jona.submit.focus();
				return false;
			}
		}
		function notify() {
			if (document.jona.fname.value=="") {
				alert("Please enter your name!! ");
				document.jona.fname.focus();
				return false;
			}
			if (document.jona.Fname.value=="") {
				alert("Please enter Lastname!!");
				document.jona.Fname.focus();
				return false;
			}
			if (document.jona.date.value=="") {
				alert("enter date of birth!!");
				document.jona.date.focus();
				return false;
			}
		}
	</script>
	<title>JTZ REGISTRATION FORM</title>
	<style>
		div.footer{
  display: inline-block;
  color:;
  background-color:#2596BE;
  text-align: center;
  padding: 25px;
  text-decoration: grey;
  width: 1300px;
}
div.tbl{
	width:1400px;
}
.h1{
        display:block;
        
  background-color: lightblue;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
    }
    .hr{
        color:black;
    }
	</style>
</head>
<div class="h1">
 <hi>JTZ LEARNING SITE REGISTRATION FORM</h1>
</div>
 <hr class="hr">
<body class="body">
	<style>
	.table,.body,.form{
			background-color:#0123;
			width:auto;
			text-align: center;
            margin: 0 auto;
		}
	</style>
	<script type="text/javascript">
		function hum(){
			var g=document.getElementById("fname").value;
			var c=document.getElementById('sname').value;
			document.getElementById("fullname").value=g+" "+c;
		}
		</script>
<form name="index.php" class="form" method="post" onsubmit="return(notify());">
<div class="tbl">
<table border="1px" class="table" cellpadding="10"cellspacing="2.5" width="500">
	<tr>
		<td>
FIRST_NAME <input type="text" name="fname" id="fname" placeholder="enter first name" onkeyup="hum(this.value)" requred><br></br>
</td>
</tr>
<tr>
	<td>
	SECOND_NAME <input type="text" name="sname" id="sname" placeholder="enter second name" onkeyup="hum(this.value)" requred><br></br>
</td>
</tr>
<tr>
	<td>
USER_NAME<input type="text" id="fullname" name="fullname" placeholder="full name" readonly><br></br>
<tr>
	<td>
GENDER<input type="radio" name="gender" value="female" requred>female
     <input type="radio" name="gender" value="male" requred>male
	</td>
</tr>

<tr>
	<td>
DATE_OF_BIRTH<input type="date" placeholder="select dob" name="date" requred><br></br>
</td>
</tr>
<tr>
	<td>
CONTACT_NO:<input type="number" name="contact" placeholder="enter contact" requred><br></br>
</td>
</tr>
<tr>
	<td>
	E-MAIL: <input type="text" name="email" placeholder="enter email"><br><br>
	</td>
</tr>
<tr>
	<td>
		PASSWARD: <input type="passsward" name="passward" placeholder="set password" requred><br><br>
	</td>
</tr>
<tr>
<td>
        <p>select your file to attach to the form</p>
    <label for="myfile">select a file:</label>
    <input type="file" id="myfile" name="myfile"><br><br>
</tr>
<tr>
	<td>
   Comment: <textarea name="comment" placeholder="comment here" rows="5" cols="40"></textarea><br><br>
	</td>
</tr>
<tr>
	<td>
       <input type="submit" value = "submit" name="submit" onclick="remove()">
	</td>
	</tr>
<tr>
	<td>
		You have an account???
      <a href="index.php">click here login now</a>
	</td>
</tr>
</table>
	</div>
</form>
<div class="footer">
	<h3>This site brought to you by<a href="mailto:jonastumainjohn@gmail.com">jonastumainjohn@gmail.com</a></h3>

</div>
</body>
</html>
