<?php
session_start();
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;
	
	$stu_id = $_POST['studentid'];
	$last_name = $_POST['lname'];
	$first_name = $_POST['fname'];
	$middle_initial = $_POST['mi'];
	$courseStrand = $_POST['course'];
	$organization = "NONE";
	$contact_num = $_POST['mobile'];
	$email_add = $_POST['email'];
	$access_lvl = "STUDENT";

	$_SESSION['id'] = $stu_id;

	$conn = new mysqli('localhost', 'root', '', 'db_soc');

	$stmt = $conn->prepare("INSERT INTO tbl_students(stud_id, last_name, first_name, middle_initial, course_strand, organization, contact_no, email, access_level) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssssiss", $stu_id, $last_name, $first_name, $middle_initial, $courseStrand, $organization, $contact_num, $email_add, $access_lvl);
	$stmt->execute();
	$stmt->close();


	$sql = "SELECT access_level FROM tbl_students WHERE email = '$email_add'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// If the student is found, get the access level
		$row = mysqli_fetch_assoc($result);
		$access_level = $row['access_level'];
	
		// Redirect to the appropriate user interface
		if ($access_level == 'ADMIN') {
			header('Location: dashboard.html');
		} else if ($access_level == 'ORGANIZATION') {
			header('Location: landing.html');
		} else if ($access_level == 'STUDENT') {
			$id_retrieve = "SELECT stud_id FROM tbl_students WHERE email = '$email_add'";
			$set_id = mysqli_query($conn, $id_retrieve);
			$user_id = mysqli_fetch_assoc($set_id);
			$current_id = $row_course['stud_id'];

			$orgQuery = "SELECT organization FROM tbl_students WHERE email = '$email_add'";
			$orgResult = mysqli_query($conn, $orgQuery);
			$orgRow = mysqli_fetch_assoc($orgResult);
			$orgStatus = $orgRow['organization'];

			if($orgStatus == 'NONE'){
				header("Location: studentFirstLog.php?id=$stu_id");
			}
			else{
				header("Location: index.php?id=$stu_id");
			}	
		} else {
		echo 'Invalid email';
	}
	}
	include 'studentFirstLog.html';
?>