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
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM account";
		$query = mysqli_query($db, $sql);

		while($account = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$account['id']."</td>";
			echo "<td>".$account['firstName']."</td>";
			echo "<td>".$account['lastName']."</td>";
			echo "<td>".$account['address']."</td>";
			echo "<td>".$account['city']."</td>";
			
			echo "<td>";
			echo "<a href='edit-form.php?id=".$account['id']."'>Edit</a> | ";
			echo "<a href='delete.php?id=".$account['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query); ?></p>
	
	</body>
</html>