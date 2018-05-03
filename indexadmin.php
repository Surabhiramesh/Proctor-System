<?php
// first thing is to start session 
include 'Login/config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();

$sql = "SELECT USN,Name,Phone,Email FROM student s,proctor p where s.Pid=p.Fid ";

$sql1 = "SELECT Pname FROM student s,proctor p where s.Pid=p.Fid " ; 


$result = $conn->query($sql);

$result1 = $conn->query($sql1);


// now to check if variable is true


if(!$_SESSION['anything'])
{
    header('location:Login/index.php');
}
?>



<!doctype html>

 <html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Proctor System </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


    <div id="right-panel" class="right-panel">

       
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <div class="header-left">
						<div class="navbar-header">
								
                <a class="navbar-brand" href="./"><img src="logo.png" alt="Logo"></a>
							
							<center><h1>Proctor - <?php echo $_SESSION['Pname'] ?><h1></center>
            </div>                      
                        <div class="dropdown for-notification">
                          
									
                        </div>

                        <div class="dropdown for-message">
                       
                          <div class="dropdown-menu" aria-labelledby="message">
                            
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                               
                            </a>
					
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="profile.png" alt="Profile">
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
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
     
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Student's List</strong>
                        </div>
                        <div class="card-body">
                 
					<table id="bootstrap-data-table" class="table table-striped table-bordered">
                     
				<tr>
                        <th>Teacher</th>
						<tr>	
						
						 <?php
						if ($result1->num_rows > 0) {
						// output data of each row
						while($row = $result1->fetch_assoc()) {
							?>
						
						<tr>
					
							<td><?php echo $row["Pname"];?></td>
							
						
						</tr>
						<?php } }  ?>
						
				
			
                        <tr>
                        <th>Student's USN</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>EmailID</th>
						<th>Details</th>
                      </tr>
                  
 <?php
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//${"usn_".$row["USN"]}=$row["USN"];
							//$curr=${"usn_".$row["USN"]};?>
						
						<tr>
							<td><?php echo $row["USN"];?></td>
							<td><?php echo $row["Name"];?></td>
							<td><?php echo $row["Phone"];?></td>
							<td><?php echo $row["Email"];?></td>
							<td> <a href="detailsadmin.php?id=<?php echo $row["USN"];?>" >Click Here </a> </td>
						</tr>
						<?php } }  ?>
						
						 
 <tbody>
					  </tbody>
</table>
					
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
