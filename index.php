<?php
		include 'connection.php';
	?>
<html>

<head>
	<link rel = "stylesheet" href="style.css">
	<script src="script.js"></script>

</head>

<body>


	<form method = "POST" action="index.php">
		<input type="text" name="name" placeholder="Vardas">
		<input type="text" name="phone" placeholder="Telefonas">
		<input type = "text" name ="email" placeholder="El.paštas">
		<input type = "text" name ="address" placeholder="Adresas">
		<input type = "textarea" name="info" placeholder="Papildoma informacija">
		<input type = "submit" name = "submit">



	</form>

<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$info = $_POST['info'];

	$sql = "INSERT INTO `uzsakymai` (name, phone, email, address, info) VALUES ('$name', '$phone', '$email', '$address', '$info') ";
}

?>
<p id="middle">hey</p>
</body>


</html>