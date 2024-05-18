<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="frames.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
</head>
<body>
    <div class="maintenance-dropdown">
        <div>
            <button class="add-btn" onclick="window.location.href = 'addStudent.html';">ADD</button>
        </div>
        <div>
            <button class="add-btn" onclick="window.location.href = 'archivesTable.html';">ARCHIVES</button>
        </div>
    </div>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'db_soc');

    //$studentEdit = $_GET['editStudent'];
    $studentResult = mysqli_query($conn, "SELECT * FROM tbl_archives");
    //$studentEditResult = mysqli_query($conn, "SELECT * FROM tbl_students WHERE stud_id = '$studentEdit'");
    ?>

    <div class="maintenance-container-table">
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Access level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($studentResult)) { ?>
                <tr>
                    <td><?php echo $row['stud_id']; ?></td>
                    <td><?php echo $row['last_name'].", "; echo $row['first_name']." "; echo $row['middle_initial']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['access_level']; ?></td>

                    <td>
                        <a href="editArchivedStudent.php?id=<?php echo $row['stud_id']; ?>"><button name="editSchedBtn" class="button-action">Edit</button></a>
                        <a href="deleteStudent.php?id=<?php echo $row['stud_id']; ?>"><button name="deleteBtn" class="button-action">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>