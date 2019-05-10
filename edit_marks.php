<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE</title>
<link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript" src="js/signup.js"></script>
</head>

<body>
<?php
include('server.php');
$maid=$_GET['maid'];

/*$q1="select * from student";
$q2="select * from semester";
$q3="select * from subject";
$s1=mysqli_query($con,$q1);
$s2=mysqli_query($con,$q2);
$s3=mysqli_query($con,$q3);*/
$q="select * from marks where ma_id=$maid";
$r=mysqli_query($con,$q);
$d=mysqli_fetch_array($r);
?>
<form id="msform" action="update_student.php" method="post">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Add new Student</h2>
    <input type="text" name="usn" placeholder="Student id" value="<?php echo $d['st_id'] ?>" />
    <input type="text" name="name" placeholder="Name" value="<?php echo $d['sem_id'] ?>" />
    <input type="text" name="email" placeholder="Email" value="<?php echo $d['sub_id'] ?>" />
    <input type="text" name="pass" placeholder="Password" value="<?php echo $d['mark'] ?>" />
    <input type="hidden" name="id" value="<?php echo $stid; ?>" /> 
    <input type="submit" name="submit" class="submit action-button" value="Save" />
  </fieldset>
</form>

</body>
</html>