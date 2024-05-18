<?php
    $conn = new mysqli('localhost', 'root', '', 'db_soc');

    session_start();
    $stu_id = $_SESSION['id'];

    //$studentEdit = $_GET['editStudent'];
    $studentResult = mysqli_query($conn, "SELECT * FROM tbl_applications");
    $studentGetTest = mysqli_query($conn, "SELECT * FROM tbl_students WHERE stud_id = '$stu_id'");
    //$studentEditResult = mysqli_query($conn, "SELECT * FROM tbl_students WHERE stud_id = '$studentEdit'");
    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="frames.css">
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div class="main-container">
        <div class="orgs-container-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Application ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Contact Number</th>
                        <th>Process Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($applicationResult = mysqli_fetch_array($studentResult)){ ?>
                    <tr>
                        <td><?php echo $applicationResult['application_ID']; ?></td>

                        <?php while($applicantName = mysqli_fetch_array($studentGetTest)) {?>
                        <td><?php echo $applicantName['last_name'].", "; echo $applicantName['first_name']." "; echo $applicantName['middle_initial']; ?></td>
                        
                        <td><?php echo $applicantName['email']; ?></td>
                        <td><?php echo $applicantName['access_level']; ?></td>
                        <?php } ?>
                        <td>
                            <a href="orgApplicationPreview.html"><button name="review-application" class="button-action">REVIEW APPLICATION</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>