<?php  
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $query = "INSERT into excel(excel_name, excel_email) values('$item1','$item2')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  



<!--
<?php
	$conn = new mysqli('localhost', 'root', '', 'db_soc');

		if(isset($_POST["submit"])){
			$fileName = $_FILES["batchFile"]["name"];
			$fileExtension = explode('.', $fileName);
			$fileExtension = strtolower(end($fileExtension));
			$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

			$targetDirectory = "uploads/" . $newFileName;
			move_uploaded_file($_FILES['batchFile']['tmp_name'], $targetDirectory);

			error_reporting(0);
			ini_set('display_errors', 0);

			require 'excelReader/excel_reader2.php';
			require 'excelReader/SpreadsheetReader.php';
			require 'excelReader/SpreadsheetReader_XLSX.php';

			$reader = new SpreadsheetReader($targetDirectory);
			foreach($reader as $key => $row){
				$stud_id = $row[0];
				$last_name = $row[1];
				$first_name = $row[2];
				$middle_initial = $row[3];
				$course_strand = $row[4];
				$organization = $row[5];
				$contact_no = $row[6];
				$email = $row[7];
				mysqli_query($conn, "INSERT INTO tbl_students VALUES('$stud_id', '$last_name', '$first_name', '$middle_initial', '$course_strand', '$organization', '$contact_no', '$email')");
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