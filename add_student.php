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
                    <a href="add_sub.php">
                        <i class="fas fa-plus"></i>
                        <span class="txt">Add subject</span>
                    </a>
                </li>
                <li>
                    <a href="#">                        
                        <i class="fas fa-calendar-check"></i>
                        <span class="txt">Attendence</span>

                    </a>
                    
                </li>
                </li>
                <li>
                    <a href="view_student.php">
                        <i class="fas fa-eye"></i>
                         <span class="txt">View Student</span>

                    </a>
                </li>
                <li>
                    <a href="view_sub.php">
                        <i class="fas fa-eye"></i>
                         <span class="txt">View Subject</span>

                    </a>
                </li>
            </ul>
            
        </nav>
<!-- multistep form -->
<form id="msform" action="add_student1.php" method="post">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Add new Student</h2>
    <input type="text" name="st_id" hidden />
    <input type="text" name="usn" placeholder="USN" />
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" /> 
    <input type="submit" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
</body>
</html>