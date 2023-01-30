<?php 

include("config.php");

if( !isset($_GET['id']) ){
	header('Location: list-person.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM account WHERE id=$id";
$query = mysqli_query($db, $sql);
$account = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>

<body>
	<header>
		<h3>Edit Account Form</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $account['id'] ?>" />
		
		<p>
			<label for="firstName">First Name: </label>
			<input type="text" name="firstName" placeholder="First Name" value="<?php echo $account['firstName'] ?>" />
		</p>
        <p>
			<label for="lastName">Last Name: </label>
			<input type="text" name="lastName" placeholder="Last Name" value="<?php echo $account['lastName'] ?>" />
		</p>
		<p>
			<label for="address">Address: </label>
			<textarea name="address"><?php echo $account['address'] ?></textarea>
		</p>
		<p>
			<label for="city">City: </label>
			<input type="text" name="city" placeholder="City" value="<?php echo $account['city'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>