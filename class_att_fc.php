<?php
session_start();
	require "php/config.php";
	require_once "php/functions.php";
	$user = new login_registration_class();
	$fid = $_SESSION['f_id'];
	$funame = $_SESSION['f_uname'];
	$fname = $_SESSION['f_name'];
	if(!$user->get_faculty_session()){
		header('Location: facultylogin.php');
		exit();
	}
?>	
<?php 
$pageTitle = "All student details";
include "php/headertop.php";
?>

<div class="admin_profile">
	
	<div class="section">
			<h3>Student</h3>
			<ul>
				<li><a href="fct_all_student_m.php">View All Student</a></li>
				<li><a href="fct_st_result_m.php">Student Result</a></li>
				
				<li><a href="student_list_pdf.php"><button>Download Student List</button></a></li>
			</ul>
	</div>



</div>



		
</div>
<?php include "php/footerbottom.php";?>
<?php ob_end_flush() ; ?>