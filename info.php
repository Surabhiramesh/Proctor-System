 <?php
 include 'Login/config.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();
 
 $sql = "SELECT *	 from student where USN='".$_SESSION['cur_sess']."'";
$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
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
			 <form method="post" action="update.php" target="hiddenFrame">
			  
			 
			 
                        <div class="card-header">
                            <strong class="card-title"><h2>Personnel Details</h2></strong>
                        </div>
						
			  <div class="card-body">
			  
<table border=1 class="table">
<thead class="thead-dark">

 <tr>
	 <td>Student Name:</td>
	 
	 <td><input type="text" size="55" disabled=true name="studname" value="<?php echo $row["Name"];?>"></input></td> 

</tr>
 <tr>
 <td>Sex:</td>
 <td><input type="text" size="55" name="sex" disabled=true value="<?php if($row["Sex"]="M") echo "Male"; else echo "Female";?>"></input></td>
 <tr>
	 <td>USN:</td>
<td><input type="text" size="55" name="usn" disabled=true value="<?php echo $row["USN"]; ?>"></input></td>
</tr>
<tr>
	 <td>DOB:</td>
	<td> <input type="text" size="55" disabled=true name="dob" value="<?php echo $row["DOB"];?>"></input></td>
</tr>
<tr>
	 <td>Nationality:</td>
	 <td><input type="text" size="55" disabled=true name="nationality" value="<?php echo $row["Nationality"];?>"></input></td>
	 <tr>
	 <td>Native State:</td><td><input type="text" disabled=true size="55" name="native" value="<?php echo $row["Nstate"];?>"></input></td>
</tr></td>
</tr>
 <tr>
	 <td rowspan="2">Parent Name:</td><td><input type="text" disabled=true size="55" name="parfname" placeholder="Father" value="<?php echo $row["Fname"];?>"></input></td>
	 </tr>
	 <tr><td><input type="text" size="55" name="parmname" disabled=true placeholder="Mother" value="<?php echo $row["Mname"];?>"></input> </td>
</tr>
<tr>
	 <td rowspan="2">Occupation:</td><td><input type="text" size="55" name="foccupation" placeholder="Father" value="<?php echo $row["Pocc"];?>"></input></td>
	 </tr>
	 <tr><td><input type="text" size="55" name="moccupation"  placeholder="Mother" value="<?php echo $row["Mocc"];?>"></input> </td>
</tr>
<tr>
	 <td rowspan="2">Address:</td><td><input type="text" size="55" name="peraddress" rows="4"  cols="52.5" size="55" placeholder="Permanent" value="<?php echo $row["Padd"];?>"></input> 
  </td>
	 </tr>
	 <tr><td><input type="text" size="55" name="locaddress" rows="4"  cols="52.5" size="55" placeholder="Local" value="<?php echo $row["Ladd"];?>"></input></td>
</tr>
<tr>
	 <td rowspan="3">Contact Number:</td><td><input type="text"  size="55" name="stucontact" placeholder="Student" value="<?php echo $row["Phone"];?>"></input></td>
	 </tr>
	 <tr><td><input type="text" size="55" name="parcontact"  placeholder="Parent" value="<?php echo $row["Pnumber"];?>"></input> </td>
</tr>
 <tr><td><input type="text" size="55" name="guarcontact"  placeholder="Guardian" value="<?php echo $row["Gnumber"];?>"></input> </td>
</tr>
<tr>
	 <td rowspan="3">Email Id:</td><td><input type="email" size="55" name="stuemail" placeholder="Student" value="<?php echo $row["Email"];?>"></input></td>
	 </tr>
	 <tr><td><input type="email" size="55" name="paremail"  placeholder="Parent" value="<?php echo $row["Pemail"];?>"> </input></td>
</tr>
 <tr><td><input type="email" size="55" name="guaemail"  placeholder="Guardian" value="<?php echo $row["Gemail"];?>"></input> </td>
</tr>

</thead><?php } }  ?>

</table>
<input type="submit" name="update" value="Success" >
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
