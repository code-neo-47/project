<html>
<head>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
<center> SUBJECT</center>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column5">Subject code</th>
									<th class="cell100 column4">Subject name</th>
									<th class="cell100 column5">Delete</th>
									<th class="cell100 column5">Edit</th>
								</tr>
							</thead>
						</table>
					</div>
<?php
include('server.php');
?>
<div class="table100-body js-pscroll">
<table>
<tbody>
	<?php
$q="select * from subject";
$r=mysqli_query($con,$q);
while($row=mysqli_fetch_array($r))
{
	echo"<tr class='row100 body'>";
	echo "<td class='cell100 column5'>".$row['sub_code']."</td>";	
	echo "<td class='cell100 column4'>".$row['sub_name']."</td>";
	echo "<td class='cell100 column5'>";
	?>
    <a href="delete_sub.php?subid=<?php echo $row['sub_id'];?>" style="text-decoration: none; color: black;">DELETE</a>
    <?php
	echo "</td><td class='cell100 column2'>";
	?>
    <a href="edit_sub.php?subid=<?php echo $row['sub_id'];?>" style="text-decoration: none; color: black;">EDIT</a>
    <?php
	echo "</td></tr>";
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>