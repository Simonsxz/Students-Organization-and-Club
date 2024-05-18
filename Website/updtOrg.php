<?php
	session_start();	

    $currentDate = date("Y-m-d H:i:s");

    $stu_id = $_SESSION['id'];
	$conn = new mysqli('localhost', 'root', '', 'db_soc');
	if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
    }

    $courseQuery = "SELECT course_strand FROM tbl_students WHERE stud_id = '$stu_id'";
	$course_enrolled = mysqli_query($conn, $courseQuery);
	$row_course = mysqli_fetch_assoc($course_enrolled);
	$course_strand = $row_course['course_strand'];

    $count = 0;
    $club_applied_1 = "";
    //$club_applied_2 = "";

	if(isset($_POST['submit'])) {
       if ($course_strand == 'BSIT') {
           $sql = "UPDATE tbl_students SET organization = 'Computer Society' WHERE stud_id = '$stu_id'";
           mysqli_query($conn, $sql);
       } else if ($course_strand == 'BSBA') {
           $sql = "UPDATE tbl_students SET organization = 'STICA Young Managers Society' WHERE stud_id = '$stu_id'";
           mysqli_query($conn, $sql);
       } else if ($course_strand == 'BSHM') {
           $sql = "UPDATE tbl_students SET organization = 'HM Society' WHERE stud_id = '$stu_id'";
           mysqli_query($conn, $sql);
       }
    }

    if (isset($_POST['ACE'])) {
        $count++;
        $sql1 = "INSERT INTO tbl_applications (student_ID, club_applied, application_date, application_status)  VALUES('$stu_id', 'ACE', '$currentDate', 'NEW')";
        mysqli_query($conn, $sql1);
    }
    if (isset($_POST['Coder'])) {
        $count++;
        $sql1 = "INSERT INTO tbl_applications (student_ID, club_applied, application_date, application_status)  VALUES('$stu_id', 'Coder', '$currentDate', 'NEW')";
        mysqli_query($conn, $sql1);
    }
    if (isset($_POST['Teatro'])) {
        $count++;
        $sql1 = "INSERT INTO tbl_applications (student_ID, club_applied, application_date, application_status)  VALUES('$stu_id', 'Teatro', '$currentDate', 'NEW')";
        mysqli_query($conn, $sql1);
    }
    if (isset($_POST['Groovers'])) {
        $count++;
        $sql1 = "INSERT INTO tbl_applications (student_ID, club_applied, application_date, application_status)  VALUES('$stu_id', 'Groovers', '$currentDate', 'NEW')";
        mysqli_query($conn, $sql1);
    }



     /*
        if(!empty($_POST['organization'])) {

            foreach($_POST['organization'] as $value){
                $sql = "UPDATE tbl_students SET organization = '$value' WHERE stud_id = '$stu_id'";
                mysqli_query($conn, $sql);
            }
        }
        */
    
    
    include 'index.php';
    mysqli_close($conn);
    
?>