<?php
$connect = mysqli_connect('localhost', 'root', '', 'db_soc');
if(isset($_POST["submit"]))
{
 if($_FILES['batchFile']['name'])
 {
  $filename = explode(".", $_FILES['batchFile']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['batchFile']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
        $item1 = mysqli_real_escape_string($connect, $data[0]);
        $item2 = mysqli_real_escape_string($connect, $data[1]);
        $item3 = mysqli_real_escape_string($connect, $data[2]);
        $item4 = mysqli_real_escape_string($connect, $data[3]);
        $item5 = mysqli_real_escape_string($connect, $data[4]);
        $item6 = mysqli_real_escape_string($connect, $data[5]);
        $item7 = mysqli_real_escape_string($connect, $data[6]);
        $item8 = mysqli_real_escape_string($connect, $data[7]);
        $item9 = mysqli_real_escape_string($connect, $data[8]);
        $query = "INSERT INTO tbl_students VALUES('$item1', '$item2', '$item3', '$item4', '$item5', '$item6', '$item7', '$item8', '$item9')";
        mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "
<script>alert('Import done');</script>";
  }
 }
}
?>

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
            <button class="add-btn" onclick="window.location.href = 'addStudent.html';"><strong>ADD</strong></button>
        </div>
        <div>
            <button class="add-btn" onclick="window.location.href = 'archivesTable.php';"><strong>ARCHIVES</strong></button>
        </div>
    </div>

    <div class="batch-upload">
        <div>
            <h4>UPLOAD BY BATCH</h4>
        </div>
        <div>
            <form method="POST" enctype="multipart/form-data">
                <div class="group-form">
                    <input type="file" name="batchFile" class="batch-control">
                </div>
                <div class="form-batch">
                    <button type="submit" name="submit" class="batch-btn batch-btn-success">UPLOAD EXCEL FILE</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'db_soc');

    //$studentEdit = $_GET['editStudent'];
    $studentResult = mysqli_query($conn, "SELECT * FROM tbl_students");
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
                        <a href="editStudent.php?id=<?php echo $row['stud_id']; ?>"><button name="editSchedBtn" class="button-action">Edit</button></a>
                        <a href="archiveStudent.php?id=<?php echo $row['stud_id']; ?>"><button name="deleteBtn" class="button-action">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>
</html>

<!--
    <?php
        error_reporting(E_ALL);
        $conn = new mysqli('localhost', 'root', '', 'db_soc');

        if(isset($_POST["submit"])){
        $fileName = $_FILES["batchFile"]["name"];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

        $targetDirectory = "uploads/" . $newFileName;
        move_uploaded_file($_FILES['batchFile']['tmp_name'], $targetDirectory);
        ini_set('display_errors', 0);

        require 'excelReader/excel_reader2.php';
        require 'excelReader/SpreadsheetReader.php';
        require 'excelReader/SpreadsheetReader_XLSX.php';

        $reader = new SpreadsheetReader($targetDirectory);
        foreach($reader as $key => $row){
        $stud_id = trim($row[0]);
        $last_name = trim($row[1]);
        $first_name = trim($row[2]);
        $middle_initial = trim($row[3]);
        $course_strand = trim($row[4]);
        $organization = trim($row[5]);
        $contact_no = trim($row[6]);
        $email = trim($row[7]);
        $access_lev = trim($row[8]);
        mysqli_query($conn, "INSERT INTO tbl_students VALUES('$stud_id', '$last_name', '$first_name', '$middle_initial', '$course_strand', '$organization', '$contact_no', '$email', '$access_lev')");
        }

        echo
        "
        <script>
            alert('Succesfully Imported');
            document.location.href = 'maintenance.php';
        </script>
        ";
        }
        ?>
-->
