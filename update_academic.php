
<?php
include 'Login/config.php';

if(isset($_POST['update']))
{
	session_start();
$usn = $_SESSION['cur_sess'];
$sslc_percentage = $_POST['sslc_percentage'];
$pu_percentage = $_POST['pu_percentage'];
$cet_percentage = $_POST['cet_percentage'];
$comedk_percentage = $_POST['comedk_percentage'];
$sslc_class = $_POST['sslc_class'];
$pu_class = $_POST['pu_class'];
$cet_class = $_POST['cet_class'];
$comedk_class = $_POST['comedk_class'];


$sem1_fa=$_POST['sem1_fa'];
$sem1_sa=$_POST['sem1_sa'];
$sem1_ta=$_POST['sem1_ta'];
$sem1_foa=$_POST['sem1_foa'];
$sem1_back=$_POST['sem1_back'];

$sem2_fa=$_POST['sem2_fa'];
$sem2_sa=$_POST['sem2_sa'];
$sem2_ta=$_POST['sem2_ta'];
$sem2_foa=$_POST['sem2_foa'];
$sem2_back=$_POST['sem2_back'];

$sem3_fa=$_POST['sem3_fa'];
$sem3_sa=$_POST['sem3_sa'];
$sem3_ta=$_POST['sem3_ta'];
$sem3_foa=$_POST['sem3_foa'];
$sem3_back=$_POST['sem3_back'];

$sem4_fa=$_POST['sem4_fa'];
$sem4_sa=$_POST['sem4_sa'];
$sem4_ta=$_POST['sem4_ta'];
$sem4_foa=$_POST['sem4_foa'];
$sem4_back=$_POST['sem4_back'];

$sem5_fa=$_POST['sem5_fa'];
$sem5_sa=$_POST['sem5_sa'];
$sem5_ta=$_POST['sem5_ta'];
$sem5_foa=$_POST['sem5_foa'];
$sem5_back=$_POST['sem5_back'];

$sem6_fa=$_POST['sem6_fa'];
$sem6_sa=$_POST['sem6_sa'];
$sem6_ta=$_POST['sem6_ta'];
$sem6_foa=$_POST['sem6_foa'];
$sem6_back=$_POST['sem6_back'];

$sem7_fa=$_POST['sem7_fa'];
$sem7_sa=$_POST['sem7_sa'];
$sem7_ta=$_POST['sem7_ta'];
$sem7_foa=$_POST['sem7_foa'];
$sem7_back=$_POST['sem7_back'];

$sem8_fa=$_POST['sem8_fa'];
$sem8_sa=$_POST['sem8_sa'];
$sem8_ta=$_POST['sem8_ta'];
$sem8_foa=$_POST['sem8_foa'];
$sem8_back=$_POST['sem8_back'];


echo $_POST['sem7_foa'];


 $sql = "UPDATE academic_details SET sslc_percentage = '$sslc_percentage', pu_percentage = '$pu_percentage', cet_percentage= '$cet_percentage', comedk_percentage = '$comedk_percentage',sslc_class = '$sslc_class',
pu_class = '$pu_class', cet_class = '$cet_class',comedk_class = '$comedk_class'
 WHERE USN = '$usn'";
$result = $conn->query($sql);

$sql1 = "UPDATE backlogs SET sem1_fa= '$sem1_fa', sem1_sa= '$sem1_sa',sem1_ta= '$sem1_ta', sem1_foa= '$sem1_foa',sem1_back= '$sem1_back',
 sem2_fa= '$sem2_fa', sem2_sa= '$sem2_sa', sem2_ta= '$sem2_ta', sem2_foa= '$sem2_foa', sem2_back= '$sem2_back',
 sem3_fa= '$sem3_fa',sem3_sa= '$sem3_sa',sem3_ta= '$sem3_ta',sem3_foa= '$sem3_foa',sem3_back= '$sem3_back',
 sem4_fa= '$sem4_fa',sem4_sa= '$sem4_sa',sem4_ta= '$sem4_ta',sem4_foa= '$sem4_foa',sem4_back= '$sem4_back',
 sem5_fa= '$sem5_fa',sem5_sa= '$sem5_sa',sem5_ta= '$sem5_ta',sem5_foa= '$sem5_foa',sem5_back= '$sem5_back',
 sem6_fa= '$sem6_fa',sem6_sa= '$sem6_sa',sem6_ta= '$sem6_ta',sem6_foa= '$sem6_foa',sem6_back= '$sem6_back',
 sem7_fa= '$sem7_fa', sem7_sa= '$sem7_sa', sem7_ta= '$sem7_ta', sem7_foa= '$sem7_foa', sem7_back= '$sem7_back',
 sem8_fa= '$sem8_fa', sem8_sa= '$sem8_sa', sem8_ta= '$sem8_ta', sem8_foa= '$sem8_foa', sem8_back= '$sem8_back'
  WHERE USN = '$usn'";
$result1 = $conn->query($sql1);
if(!$result)
{
	
  die('Could not update data: ' . mysqli_error($conn));
}
else
{
  echo "Updated data successfully";


//echo $father_occupation,$mother_occupation,$permanent_address,$local_address;
}

if(!$result1)
{
	
  die('Could not update data: ' . mysqli_error($conn));
}
else
{
  echo "Updated data successfully";


//echo $father_occupation,$mother_occupation,$permanent_address,$local_address;
}
header("Refresh: 0; url=academic_det.php");
}
?>


