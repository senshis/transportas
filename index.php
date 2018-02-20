<?php
		include 'connection.php';
		if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$info = $_POST['info'];

	$sql = "INSERT INTO `uzsakymai` (name, phone, email, address, info) VALUES ('$name', '$phone', '$email', '$address', '$info') ";

	mysqli_query($conn, $sql);
}
	?>
<html>

<head>
	<link rel = "stylesheet" href="style.css">
	<script src="script.js"></script>

</head>

<body>


	

 <div class="container">
  <form method = "POST">
    
      
      <div class="col-75">
        <input type="text"  name="name" placeholder="Vardas">
      </div>
    
    
      
      <div class="col-75">
        <input type="text" id="lna" name="phone" placeholder="Telefonas">
      </div>
    
    
      <div class="col-75">
      	  <input type="text" name="email" placeholder="El.paštas">
        
      </div>
    
    
      <div class="col-75">
      <input type="text"  name="address" placeholder="Adresas">
         
      </div>
    
  
      <div class="col-75">
        <textarea id="subject" name="info" placeholder="Papildoma informacija" style="height:200px"></textarea>
      </div>
    
    
      <input type="submit" name="submit" value="Užsakyti">
    
  </form>
</div> 
</body>


</html>