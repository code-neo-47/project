<?php include 'server.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript" src="js/signup.js"></script>
</head>
<body>
	 <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Department of MCA</h3>
                <h2>MCA</h2>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="admin.php" >
                        <i class="fas fa-home"></i>
                       
                        <span class="txt">Home</span>
                    </a>
                </li>
                <li>
                    
                </li>
                
               
            </ul>
        </nav>
        
<?php
$q1="select * from student";
$q2="select * from semester";
$q3="select * from subject";
$s1=mysqli_query($con,$q1);
$s2=mysqli_query($con,$q2);
$s3=mysqli_query($con,$q3);
?>
        <div id="content">
          <form id="msform" action="marks1.php" method="get">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Add Marks</h2>
    <select name="st">
        <?php
    while ($row1=mysqli_fetch_array($s1)) {
        ?>
            <option value="<?php $row2['st_id']; ?>"><?php echo $row1['st_usn']; ?></option>
        <?php
    }
    ?>
    </select>
    <br>
    <select name="sem">
    <?php
    while ($row2=mysqli_fetch_array($s2)) {
        ?>
            <option value="<?php $row2['sem_id'];?>"><?php echo $row2['sem_name'];?></option>
        <?php
    }
    ?>
    </select>
    <br>
    <select name="sub">
    <?php
    while ($row3=mysqli_fetch_array($s3)) {
        ?>
            <option value="<?php $row3['sub_id'];?>"><?php echo $row3['sub_code'];?></option>
        <?php
    }
    ?>
    </select>
    <input type="text" name="ma1" placeholder="Mark" />
    <input type="text" name="ma2" placeholder="Mark" />
    <input type="text" name="ma3" placeholder="Mark" />
    <input type="text" name="ma4" placeholder="Mark" />
    <input type="text" name="ma5" placeholder="Mark" /> 
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
        </div>
        <div class="line"></div>
    </div>
</body>
</html>
?>