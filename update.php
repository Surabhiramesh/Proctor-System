<?php
include 'Login/config.php';

if(isset($_POST['update']))
{
	session_start();
$usn = $_SESSION['cur_sess'];
$father_occupation = $_POST['foccupation'];
$mother_occupation = $_POST['moccupation'];
$permanent_address = $_POST['peraddress'];
$local_address = $_POST['locaddress'];
$student_contact = $_POST['stucontact'];
$parent_contact = $_POST['parcontact'];
$guardian_contact = $_POST['guarcontact'];
$student_email = $_POST['stuemail'];
$parent_email = $_POST['paremail'];
$guardian_email = $_POST['guaemail'];





 $sql = "UPDATE student SET Pocc = '$father_occupation', Mocc = '$mother_occupation', Padd = '$permanent_address', Ladd = '$local_address', Phone = '$student_contact',
 Pnumber = '$parent_contact', Gnumber = '$guardian_contact', Email = '$student_email', Pemail = '$parent_email', Gemail = '$guardian_email'  WHERE USN = '$usn'";
$result = $conn->query($sql);


if(! $result )
{
	
  die('Could not update data: ' . mysqli_error($conn));
}
echo "Updated data successfully";



//echo $father_occupation,$mother_occupation,$permanent_address,$local_address;
}
header("Refresh: 0; url=info.php");

?>