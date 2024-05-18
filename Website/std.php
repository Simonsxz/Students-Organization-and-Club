<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="frames.css">
	<meta name="viewport" content="width=device-width, intitial-scale=1.0">
</head>
<body>
	<div class="btn-selection">
		<div>
			<button class="btn">Tertiary Level</button>
		</div>
		<div>
			<button class="btn">Senior High School</button>
		</div>
	</div>

	 <?php
    $conn = new mysqli('localhost', 'root', '', 'db_soc');
    $studentResult = mysqli_query($conn, "SELECT * FROM tbl_students WHERE access_level = 'STUDENT'");
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