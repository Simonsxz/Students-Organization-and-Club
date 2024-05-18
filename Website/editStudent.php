<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title>Edit Student</title>
</head>
<body>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'db_soc');
    $id = $_GET['id'];
    $studentEditResult = mysqli_query($conn, "SELECT * FROM tbl_students WHERE stud_id = '$id'");
    $row = mysqli_fetch_array($studentEditResult);
    ?>

    <div class="main-container">
        <h3>ADD AN ACCOUNT</h3>
        <h4>Personal Details</h4>
        <form action="updateStudent.php?id=<?php echo $id; ?>" method="post">
            <div class="registree-container">
                <div>
                    <label for="studentid">Student ID</label><br>
                    <input type="text" id="studentid" name="studentid" value="<?php echo $row['stud_id']; ?>" required readonly><br>
                </div>

                <div>
                    <label for="lname">Last Name</label><br>
                    <input type="text" id="lname" name="lname" value="<?php echo $row['last_name']; ?>" required><br>
                </div>

                <div>
                    <label for="fname">First Name</label><br>
                    <input type="text" id="fname" name="fname" value="<?php echo $row['first_name']; ?>" required><br>
                </div>

                <div>
                    <label for="mi">Middle Initial</label><br>
                    <input type="text" id="mi" name="mi" value="<?php echo $row['middle_initial']; ?>" required><br>
                </div>

                <div>
                    <label for="courseStrand">Course/Strand</label><br>
                    <select id="course" name="course" class="access-dropdown">
                        <option value="BSBA">Bachelor of Science in Business Administration</option>
                        <option value="BSHM">Bachelor of Science in Hotel Management</option>
                        <option value="BSIT">Bachelor of Science in Information Technology</option>
                        <option value="ITMAWD">Information Technology (Mobile and Web Development)</option>
                        <option value="CCTEC">CCTEC</option>
                        <option value="CUARTS">CUARTS</option>
                        <option value="ABM">Administration and Business Management</option>
                        <option value="HUMSS">Humanities</option>
                    </select>
                </div>

                <div>
                    <label for="studentid">Organization</label><br>
                    <input type="text" id="orgid" name="organization" value="<?php echo $row['organization']; ?>" required><br>
                </div>

                <div>
                    <label for="mobile">Contact No</label><br>
                    <input type="text" id="mobile" name="mobile" value="<?php echo $row['contact_no']; ?>" required><br>
                </div>

                <div>
                    <label for="mobile">Access Level</label><br>
                    <select id="access-lvl" name="access" class="access-dropdown">
                        <option value="ADMIN">Admin</option>
                        <option value="ORGANIZATION">Organization</option>
                        <option value="STUDENT">Student</option>
                    </select>
                </div>

                <div>
                    <label for="mobile">E-mail address</label><br>
                    <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>
                </div>
            </div>
            <div>
                <input type="submit" class="btnn"><span class="spanHover"></span>
            </div>
        </form>
    </div>
</body>
</html>