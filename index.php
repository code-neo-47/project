 <?php include('server.php'); ?>
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
                <li class="active">
                    <a href="index.php" >
                        <i class="fas fa-home"></i>
                       
                        <span class="txt">Home</span>
                    </a>
                </li>
                <li>
                    <a href="marks.php">                        
                       <i class="fas fa-file-alt"></i>
                        <span class="txt">Marks</span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">                        
                        <i class="fas fa-calendar-check"></i>
                        <span class="txt">Attendence</span>

                    </a>
                    
                </li>
                
                
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                         <span class="txt">Bulletin</span>

                    </a>
                </li>
            </ul>
            
        </nav>
        <div id="content">



        <!--Login page-->


<?php 

if(empty($_SESSION['uname'])){
    ?>            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; position: absolute; right: 30px; top: 10px;" class="btn btn-primary">Login</button>
<?php }
            else {?>
            <a href="index.php?logout='1'" style="width:auto; position: absolute; right: 30px; top: 10px;" class="btn btn-primary">logout</a>
            <?php }
            $post=null;
            if(!empty($_SESSION['po'])){
                $post=$_SESSION['po'];
                }
                
            ?>
            <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="server.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" class="loginbtn" name="login" onclick="validateEmail">Login</button>


    </div>

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var em=document.getElementByName('email');
function validateEmail(){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(em) == false) 
        {
            alert('Invalid Email Address');
            window.location.href="index.php";
            return false;
        }
        return true;

}
</script>
<!--end-->
    </div>
    
</body>
</html>