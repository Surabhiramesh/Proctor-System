 <?php
 
 include 'Login/config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();
$sql1 = "SELECT * from backlogs where USN='".$_SESSION['cur_sess']."'";
$result1 = $conn->query($sql1);

$sql = "SELECT * from academic_details where USN='".$_SESSION['cur_sess']."'";
$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proctor System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<style>
  .hide { position:absolute; bottom:-1px; right:-1px; width:0.1px; height:0.1px; }
</style>
</head>
<body>
<body>


       <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
               
                <a class="navbar-brand" href="./"><img src="logo.png" alt="Logo"></a>
              
            </div>
			<div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Student List</a>
                    </li>
                    <h3 class="menu-title">Academic Details</h3><!-- /.menu-title -->
                   <li class="menu-item-has-children dropdown">
                        <a href="info.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Personnel Information </a>
                    <li class="menu-item-has-children dropdown">
                        <a href="academic_det.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Academic Details </a>
                    <li class="menu-item-has-children dropdown">
                        <a href="extracur.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Extra Curricular Activity</a>
                    <li class="menu-item-has-children dropdown">
				   <!-- <li class="menu-item-has-children dropdown"> -->
					      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Meetings</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="meet1.php">Semester 1</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="meet2.php">Semester 2</a></li>
                            <li><i class="fa fa-bars"></i><a href="meet3.php">Semester 3</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="meet4.php">Semester 4</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="meet5.php">Semester 5</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="meet6.php">Semester 6</a></li>
                            <li><i class="fa fa-spinner"></i><a href="meet7.php">Semester 7</a></li>
                            <li><i class="fa fa-fire"></i><a href="meet8.php">Semester 8</a></li>			
					
            </div><  </ul>
                    </li>
			</nav>
    </aside>

    

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                        
                         
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="profile.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        
                     
                    

                </div>
           

        </header>
<center>
 <iframe name="hiddenFrame" class="hide"></iframe>
 <form method="post" action="update_academic.php" target="hiddenFrame">
			 
			 
                        <div class="card-header">
                            <strong class="card-title"><h2>Academic Details</h2></strong>
                        </div>
						
			  <div class="card-body">
			  
<table border=1 class="table">
<thead class="thead-dark">
                                <tr>
                                  <th scope="col" width="50" >Sl No.</th>
                                  <th scope="col" width="150">Course</th>

								    <th scope="col" width="50">Percentage</th>
									  <th scope="col" width="50">Class</th>
                                                                  </tr>
                              </thead>
							
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>SSLC</td>
                                  <td> <input type="text" name="sslc_percentage" value="<?php echo $row["sslc_percentage"];?>"></td>
								  <td> <input type="text" name="sslc_class" value="<?php echo $row["sslc_class"];?>"></td>
                                
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Pre University</td>
                                  <td> <input type="text" name="pu_percentage" value="<?php echo $row["pu_percentage"];?>"></td>
								              <td> <input type="text" name="pu_class" value="<?php echo $row["pu_class"];?>"></td>
                                
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>CET</td>
                                    <td> <input type="text"   name="cet_percentage" value="<?php echo $row["cet_percentage"];?>"></td>
								                                  <td> <input type="text"   name="cet_class" value="<?php echo $row["cet_class"];?>"></td>
                                
                                </tr>
								 <tr>
                                  <th scope="row">4</th>
                                  <td>COMED-K</td>
                                                                  <td> <input type="text"  name="comedk_percentage" value="<?php echo $row["comedk_percentage"];?>"></td>
								                                   <td> <input type="text"   name="comedk_class" value="<?php echo $row["comedk_class"];?>"></td>
                                
                                </tr>
								
                      
                              </tbody>
                            </table><br><br><br>
								<?php } } ?>
							<?php 
							if ($result1->num_rows > 0) {
						// output data of each row
						while($row1 = $result1->fetch_assoc()) {
							?>
							<table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Semester</th>
                                  <th scope="col">First Attempt<br>Class/Percentage<br>Fail:Subject Names/s</th>
								    <th scope="col">Second Attempt<br>Class/Percentage<br>Fail:Subject Names/s</th>
									  <th scope="col">Third Attempt<br>Class/Percentage<br>Fail:Subject Names/s</th>
									  <th scope="col">Fourth Attempt<br>Class/Percentage<br>Fail:Subject Names/s</th>
									  <th scope="col">Active back<br>subjects</th>
                                                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">I</th>
                                                                    <td width="100"> <input type="text" name="sem1_fa" value="<?php echo $row1["sem1_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem1_sa" value="<?php echo $row1["sem1_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem1_ta" value="<?php echo $row1["sem1_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem1_foa" value="<?php echo $row1["sem1_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem1_back" value="<?php echo $row1["sem1_back"];?>" maxlength="100"></td>
                                
                                </tr>
                                <tr>
                                  <th scope="row">II</th>
                                            <td width="100"> <input type="text" name="sem2_fa" value="<?php echo $row1["sem2_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem2_sa" value="<?php echo $row1["sem2_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem2_ta" value="<?php echo $row1["sem2_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem2_foa" value="<?php echo $row1["sem2_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem2_back" value="<?php echo $row1["sem2_back"];?>" maxlength="100"></td>
                                
                                </tr>
                                <tr>
                                  <th scope="row">III</th>
                                                                 <td width="100"> <input type="text" name="sem3_fa" value="<?php echo $row1["sem3_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem3_sa" value="<?php echo $row1["sem3_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem3_ta" value="<?php echo $row1["sem3_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem3_foa" value="<?php echo $row1["sem3_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem3_back" value="<?php echo $row1["sem3_back"];?>" maxlength="100"></td>
                                
                                </tr>
								 <tr>
                                  <th scope="row">IV</th>
                                                                <td width="100"> <input type="text" name="sem4_fa" value="<?php echo $row1["sem4_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem4_sa" value="<?php echo $row1["sem1_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem4_ta" value="<?php echo $row1["sem4_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem4_foa" value="<?php echo $row1["sem4_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem4_back" value="<?php echo $row1["sem4_back"];?>" maxlength="100"></td>
                                
                                </tr>
								</tr>
								 <tr>
                                  <th scope="row">V</th>
                                
								                                  <td width="100"> <input type="text" name="sem5_fa" value="<?php echo $row1["sem5_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem5_sa" value="<?php echo $row1["sem5_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem5_ta" value="<?php echo $row1["sem5_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem5_foa" value="<?php echo $row1["sem5_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem5_back" value="<?php echo $row1["sem5_back"];?>" maxlength="100"></td>
                                </tr>
								
								</tr>
								 <tr>
                                  <th scope="row">VI</th>
                                                                  <td width="100"> <input type="text" name="sem6_fa" value="<?php echo $row1["sem6_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem6_sa" value="<?php echo $row1["sem6_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem6_ta" value="<?php echo $row1["sem6_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem6_foa" value="<?php echo $row1["sem6_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem6_back" value="<?php echo $row1["sem6_back"];?>" maxlength="100"></td>
                                
                                </tr>
								
								</tr>
								 <tr>
                                  <th scope="row">VII</th>
                                                                  <td width="100"> <input type="text" name="sem7_fa" value="<?php echo $row1["sem7_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem7_sa" value="<?php echo $row1["sem7_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem7_ta" value="<?php echo $row1["sem7_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem7_foa" value="<?php echo $row1["sem7_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem7_back" value="<?php echo $row1["sem7_back"];?>" maxlength="100"></td>
                                
                                </tr>
								
								</tr>
								 <tr>
                                  <th scope="row">VIII</th>
                                                              <td width="100"> <input type="text" name="sem8_fa" value="<?php echo $row1["sem8_fa"];?>" maxlength="100"></td>
                                                                   <td width="100"> <input type="text"  name="sem8_sa" value="<?php echo $row1["sem8_sa"];?>" maxlength="100"></td>
																                                    <td width="100"> <input type="text" name="sem8_ta" value="<?php echo $row1["sem8_ta"];?>"  maxlength="100"></td>
																                                     <td width="100"> <input type="text" name="sem8_foa" value="<?php echo $row1["sem8_foa"];?>"  maxlength="100"></td>
								                                                                      <td width="100"> <input type="text" name="sem8_back" value="<?php echo $row1["sem8_back"];?>" maxlength="100"></td>
                                
                                </tr>
								
								
                      
                              </tbody>
                            </table>
							<input type="submit" name="update" value="Success" class="btn btn-success btn-lg" >
									
					<?php
							}} ?>
							
							</form>


</center>
 	
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

</body>
</html>