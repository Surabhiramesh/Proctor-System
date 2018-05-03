
<?php
include 'Login/config.php';

if(isset($_POST['update']))
{
	session_start();
$usn = $_SESSION['cur_sess'];
$academic_yr = $_POST['academic_yr'];
$pr_meet1_agenda = $_POST['pr_meet1_agenda'];
$pr_meet1_date = $_POST['pr_meet1_date'];
$pr_meet1_issues = $_POST['pr_meet1_issues'];
$pr_meet1_actiontaken = $_POST['pr_meet1_actiontaken'];

$pr_meet2_agenda = $_POST['pr_meet2_agenda'];
$pr_meet2_date = $_POST['pr_meet2_date'];
$pr_meet2_issues = $_POST['pr_meet2_issues'];
$pr_meet2_actiontaken = $_POST['pr_meet2_actiontaken'];

$pr_meet3_agenda = $_POST['pr_meet3_agenda'];
$pr_meet3_date = $_POST['pr_meet3_date'];
$pr_meet3_issues = $_POST['pr_meet3_issues'];
$pr_meet3_actiontaken = $_POST['pr_meet3_actiontaken'];



echo $_POST['pr_meet1_agenda'];


 $sql = "UPDATE meet_sem6 SET academic_yr = '$academic_yr', pr_meet1_agenda = '$pr_meet1_agenda', pr_meet1_date = '$pr_meet1_date', pr_meet1_issues = '$pr_meet1_issues',pr_meet1_actiontaken = '$pr_meet1_actiontaken',
 pr_meet2_agenda = '$pr_meet2_agenda', pr_meet2_date = '$pr_meet2_date', pr_meet2_issues = '$pr_meet2_issues', pr_meet2_actiontaken = '$pr_meet2_actiontaken', pr_meet3_agenda = '$pr_meet3_agenda' , pr_meet3_date = '$pr_meet3_date' , pr_meet3_issues = '$pr_meet3_issues', pr_meet3_actiontaken = '$pr_meet3_actiontaken'
 WHERE USN = '$usn'";
$result = $conn->query($sql);


if(!$result)
{
	
  die('Could not update data: ' . mysqli_error($conn));
}
echo "Updated data successfully";


//echo $father_occupation,$mother_occupation,$permanent_address,$local_address;
}
header("Refresh: 0; url=meet8.php");

?>


