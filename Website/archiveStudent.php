﻿<?php
	$id = $_GET['id'];
	$conn = new mysqli('localhost', 'root', '', 'db_soc');

	$query = mysqli_query($conn, "SELECT * FROM tbl_students WHERE stud_id='$id'");
	$fetch = mysqli_fetch_array($query);

	//$stu_id = $fetch['stud_id'];
	//$last_name = $fetch[last_name];
	//$first_name = $fetch[first_name];
	//$middle_initial = $fetch[middle_initial];
	//$organization = $fetch[organization];
	//$contact_num = $fetch[contact_no];
	//$email_add = $fetch[email];
	//$access_lvl = $fetch[access_level];

	//mysqli_query($conn, "INSERT INTO tbl_archives VALUES($fetch[stud_id], $fetch[last_name], $fetch[first_name], $fetch[middle_initial], $fetch[organization], $fetch[contact_no], $fetch[email], $fetch[access_level])");
	$stmt = $conn->prepare("INSERT INTO tbl_archives(stud_id, last_name, first_name, middle_initial, course_strand, organization, contact_no, email, access_level) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssssiss", $fetch['stud_id'], $fetch['last_name'], $fetch['first_name'], $fetch['middle_initial'], $fetch['course_strand'], $fetch['organization'], $fetch['contact_no'], $fetch['email'], $fetch['access_level']);
	$stmt->execute();
	$stmt->close();

	$delete = mysqli_query($conn, "DELETE FROM tbl_students WHERE stud_id='$id'");
	
	header('location:maintenance.php');
?>