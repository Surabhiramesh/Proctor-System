
<?php
include 'Login/config.php';

if(isset($_POST['update1']))
{
	session_start();
$usn = $_SESSION['cur_sess'];
$activity1 = $_POST['activity1'];
$activity2 = $_POST['activity2'];
$activity3 = $_POST['activity3'];

$activity1_ce = $_POST['activity1_ce'];
$activity2_ce = $_POST['activity2_ce'];
$activity3_ce = $_POST['activity3_ce'];

$handle1 = $_POST['handle1_ce'];
$handle2 = $_POST['handle2_ce'];
$handle3 = $_POST['handle3_ce'];

$Col1 = $_POST['Col1'];
$Col2 = $_POST['Col2'];
$Col3 = $_POST['Col3'];

$Course1 = $_POST['Course1'];
$Course2 = $_POST['Course2'];
$Course3 = $_POST['Course3'];







 $sql4 = "UPDATE student_extra SET activity1 = '$activity1', activity2 = '$activity2', activity3 = '$activity3', activity1_ce = '$activity1_ce',activity2_ce = '$activity2_ce',
 activity3_ce = '$activity3_ce', handle1_ce = '$handle1', handle2_ce = '$handle2', handle3_ce = '$handle3', Col1 = '$Col1' , Col2 = '$Col2' , Col3 = '$Col3', Course1 = '$Course1',
 Course2 = '$Course2', Course3 = '$Course3' WHERE USN = '$usn'";
$result4 = $conn->query($sql4);


if(! $result4)
{
	
  die('Could not update data: ' . mysqli_error($conn));
}
echo "Updated data successfully";


//echo $father_occupation,$mother_occupation,$permanent_address,$local_address;
}
header("Refresh: 0; url=extracur.php");

?>


