<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>People List</title>
</head>

<body>
	<header>
		<h3>Existing list</h3>
	</header>
	
	<nav>
		<a href="register-page.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>City</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM persons";
		$query = mysqli_query($db, $sql);
		
		while($person = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$person['ID']."</td>";
			echo "<td>".$person['FirstName']."</td>";
			echo "<td>".$person['LastName']."</td>";
			echo "<td>".$person['Address']."</td>";
			echo "<td>".$person['City']."</td>";
			
			echo "<td>";
			// echo "<a href='form-edit.php?id=".$person['id']."'>Edit</a> | ";
			// echo "<a href='hapus.php?id=".$person['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query); ?></p>
	
	</body>
</html>