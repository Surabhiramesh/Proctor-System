 <?php
 include 'Login/config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();

 $sql3 = "SELECT * from student_extra where USN='".$_SESSION['cur_sess']."'";
$result3 = $conn->query($sql3);

						if ($result3->num_rows > 0) {
						// output data of each row
						while($row = $result3->fetch_assoc()) {
?>							

<!doctype html>
<html class="no-js" lang=""> 
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
		 <iframe name="hiddenFrame" class="hide"></iframe>
			 <form method="post" action="update_extra.php" target="hiddenFrame">
			 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Extra Curricular Activities</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" colspan="3">Activity</th>
                                
                                </tr>
                              </thead>
                               <tr>
                                  <th scope="row">1</th>
                                  <td colspan="3"><input type="text" name="activity1" style="width: 400px;border: none;background: transparent;" placeholder="Activity one" value="<?php echo $row["activity1"]; ?>"></input></td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td colspan="3"><input type="text" name="activity2" style="width: 400px;border: none;background: transparent;" placeholder="Activity two" value="<?php echo $row["activity2"]; ?>"></input></td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td colspan="3"><input type="text" name="activity3" style="width: 400px;border: none;background: transparent;" placeholder="Activity three" value="<?php echo $row["activity3"]; ?>"></input></td>
                                  
                                </tr>
                              </tbody>
                            </table>
						
                        </div>
                    </div>
                </div>

				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Competitive Exam Details</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" colspan="3">Activity</th>
								   <th scope="col">Handle</th>
                                
                                </tr>
                              </thead>
                               <tr>
                                  <th scope="row">1</th>
                                  <td colspan="3"><input type="text" name="activity1_ce" style="width: 150px;border: none;background: transparent;" placeholder="Activity one" value="<?php echo $row["activity1_ce"]; ?>"></td>
								  <td colspan="3"><input type="text" name="handle1_ce" style="width: 150px;border: none;background: transparent;" placeholder="Handle 1" value="<?php echo $row["handle1_ce"]; ?>"></td>
								  
                                  
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                 <td colspan="3"><input type="text" name="activity2_ce" style="width: 150px;border: none;background: transparent;" placeholder="Activity two" value="<?php echo $row["activity2_ce"]; ?>"></td>
								  <td colspan="3"><input type="text" name="handle2_ce" style="width: 150px;border: none;background: transparent;" placeholder="Handle 2" value="<?php echo $row["handle2_ce"]; ?>"></td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                 <td colspan="3"><input type="text" name="activity3_ce" style="width: 150px;border: none;background: transparent;" placeholder="Activity three" value="<?php echo $row["activity3_ce"]; ?>"></td>
								  <td colspan="3"><input type="text" name="handle3_ce" style="width: 150px;border: none;background: transparent;" placeholder="Handle 3" value="<?php echo $row["handle3_ce"]; ?>"></td>
                                  
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			
				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Higher Education Details</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" colspan="3">University/College</th>
                                  <th scope="col" colspan="3">Course</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td colspan="3"><input type="text" name="Col1" style="width: 150px;border: none;background: transparent;" placeholder="College 1" value="<?php echo $row["Col1"]; ?>"></td>
								  <td colspan="3"><input type="text" name="Course1" style="border: none;background: transparent;" placeholder="Course 1" value="<?php echo $row["Course1"]; ?>" ></td>
                                
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td colspan="3"><input type="text" name="Col2" style="width: 150px;border: none;background: transparent;" placeholder="College 2" value="<?php echo $row["Col2"]; ?>"></td>
								  <td colspan="3"><input type="text" name="Course2" style="border: none;background: transparent;" placeholder="Course 2" value="<?php echo $row["Course2"]; ?>"></td>
                                
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
								  <td colspan="3"><input type="text" name="Col3" style="width: 150px;border: none;background: transparent;" placeholder="College 3" value="<?php echo $row["Col3"]; ?>"></td>
								  <td colspan="3"><input type="text" name="Course3" style="border: none;background: transparent;" placeholder="Course 3" value="<?php echo $row["Course3"]; ?>"></td>
                                
                                </tr>
                              </tbody>
                            </table>

                        </div>
						<?php } }  ?>
                    </div>
					<input type="submit" name="update1" value="Success" class="btn btn-success btn-lg" style="float: right;">
                
				
				</form>
				
   

		
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
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>