<html>

  <style>
    #wel, table{
      margin: 0 auto;
      text-align: center;
      font-family:Times New Roman;
    }
    div.footer{
  display: inline-block;
  color: white;
  text-align: center;
  padding: 25px;
  text-decoration: none;
}
</style>
</html>
<?php
echo '<div id="wel">welcome admin....</div>';
include 'connect.php';
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    //output data of each 
    
    echo '<table cellpadding="2.5px" width="1000px" cellspacing="1px" border="1px">';
    echo '<tr><th>ID</th><th>First Name</th><th>Second Name</th><th>Username</th><th>Date of Birth</th><th>Gender</th><th>Contact No:</th><th>Email</th><th>Password</th><th>myfile</th><th>Privilege</th><th>Comment</th></tr>';
    
    while($row = $result->fetch_assoc())
    {
     echo '<td width="10px">'.$row["id"].'</td><td>'.$row["fname"].'</td><td>'.$row["sname"].'</td><td width="150px">'.$row["username"].'</td><td width="150px">'.$row["dob"].'</td><td>'.$row["gender"].'</td><td>'.$row["contact"].'</td><td>'.$row["email"].'</td><td>'.$row["passward"].'</td><td>'.$row["myfile"].'</td><td>'.$row["privelege"].'</td><td>'.$row["comment"].'</td></tr>';
    }
    echo '</table></div>';
    
    }
    else {
        echo "0 result";
    }
    $conn->close();
    
    ?>
    <div class="footer">
	<h3>This site brought to you by<a href="mailto:jonastumainjohn@gmail.com">jonastumainjohn@gmail.com</a></h3>

</div>