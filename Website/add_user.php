<?php
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;

	$stu_id = $_POST['studentid'];
	$last_name = $_POST['lname'];
	$first_name = $_POST['fname'];
	$middle_initial = $_POST['mi'];
	$courseStrand = $_POST['course'];
	$organization = $_POST['organization'];
	$contact_num = $_POST['mobile'];
	$email_add = $_POST['email'];
	$access_lvl = $_POST['access'];

	$conn = new mysqli('localhost', 'root', '', 'db_soc');

	$stmt = $conn->prepare("INSERT INTO tbl_students(stud_id, last_name, first_name, middle_initial, course_strand, organization, contact_no, email, access_level) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssssiss", $stu_id, $last_name, $first_name, $middle_initial, $courseStrand, $organization, $contact_num, $email_add, $access_lvl);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	include 'maintenance.php';
?>