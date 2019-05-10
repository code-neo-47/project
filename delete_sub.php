<?php
include('server.php');

$subid=$_GET['subid'];

$q="DELETE FROM subject where sub_id='$subid'";
$r=mysqli_query($con,$q);

if($r)
{
//header('location:view.php');
?>
<script>
confirm('DATA DELETED');
window.location.href="view_sub.php";
</script>
<?php	
}
else
{
?>
<script>
confirm('PROBLEM');
window.location.href="view_sub.php";
</script>
<?php
}


?>