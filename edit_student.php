<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE Student</title>
<link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript" src="js/signup.js"></script>
</head>

<body>
<?php
include('server.php');
$stid=$_GET['stid'];

$q="select * from student where st_id=$stid";
$r=mysqli_query($con,$q);
$d=mysqli_fetch_array($r);
?>
<form id="msform" action="update_student.php" method="post">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Add new Student</h2>
    <input type="text" name="usn" placeholder="USN" value="<?php echo $d['st_usn'] ?>" />
    <input type="text" name="name" placeholder="Name" value="<?php echo $d['st_name'] ?>" />
    <input type="text" name="email" placeholder="Email" value="<?php echo $d['st_email'] ?>" />
    <input type="text" name="pass" placeholder="Password" value="<?php echo $d['st_password'] ?>" />
    <input type="hidden" name="id" value="<?php echo $stid; ?>" /> 
    <input type="submit" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Save" />
  </fieldset>
</form>

</body>
</html>