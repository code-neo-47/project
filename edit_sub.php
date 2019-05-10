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
$subid=$_GET['subid'];

$q="select * from subject where sub_id=$subid";
$r=mysqli_query($con,$q);
$d=mysqli_fetch_array($r);
?>
<form id="msform" action="update_sub.php" method="post">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Add Subject</h2>
    <input type="text" name="code" placeholder="Subject Code" value="<?php echo $d['sub_code'] ?>" />
    <input type="text" name="name" placeholder="Subject Name" value="<?php echo $d['sub_name'] ?>" />
    <input type="hidden" name="id" value="<?php echo $subid; ?>" /> 
    <input type="submit" name="submit" class="submit action-button" value="Save" />
  </fieldset>
</form>

</body>
</html>