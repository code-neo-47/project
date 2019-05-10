<?php
include('server.php');
?>
<html>
<body>
<?php include('nav.php');?>
<form action="logout.php">
<button style="width:auto; position: absolute; right: 30px; top: 10px;" class="btn btn-primary">Log Out</button>
</form>
  <div id="content">
<center> STUDENT DETAILS</center>
<table border="0">
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
<?php
$q="select * from student";
$r=mysqli_query($con,$q);
$q1="select * from marks";
$r1=mysqli_query($con,$q1);

while($row=mysqli_fetch_array($r)&&$row1=mysqli_fetch_array($r1))
{
  echo"<tr><td>";
  echo $row['st_usn'];  
  echo "</td><td>";
  echo $row['st_name']; 
  echo "</td><td>";
  echo $row['st_email'];
  echo "</td><td>";
  echo $row['st_password'];
  echo "</td><td>";

}

?>
</table>
</div>
</div>
</body>
</html>