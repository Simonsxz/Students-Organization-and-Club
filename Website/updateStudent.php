<?php
$conn = new mysqli('localhost', 'root', '', 'db_soc');
$id=$_GET['id'];
	
$stu_id = $_POST['studentid'];
$last_name = $_POST['lname'];
$first_name = $_POST['fname'];
$middle_initial = $_POST['mi'];
$courseStrand = $_POST['course'];
$organization = $_POST['organization'];
$contact_num = $_POST['mobile'];
$email_add = $_POST['email'];
$access_lvl = $_POST['access'];

mysqli_query($conn, "UPDATE tbl_students SET stud_id='$stu_id', last_name='$last_name', first_name='$first_name', middle_initial='$middle_initial', course_strand='$courseStrand', organization='$organization', contact_no='$contact_num', email='$email_add', access_level='$access_lvl' WHERE stud_id='$id'");
header('location:maintenance.php');

?>