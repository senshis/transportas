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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANSPORTO PASLAUGOS LIETUVOJE</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1 class="brand">Transporto Paslaugos Lietuvoje</h1>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <h3>Transporto Paslaugos Lietuvoje</h3>
        <ul>
          <li> Pavyzdinė gatvė 15</li>
          <li> +37061110111</li>
          <li> pvz@gmail.com</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Užsisakykite:</h3>
        <form method = "POST">
          <p>
            <label>Vardas</label>
              <input type="text" name="name" placeholder="Vardas">
          </p>
          <p>
            <label>Telefonas</label>
              <input type="text" name="phone" placeholder="Telefonas">
          </p>
          <p>
            <label>Elektroninis paštas</label>
              <input type="text" name="email" placeholder="El.paštas">
          </p>
          <p>
            <label>Adresas</label>
              <input type="text"  name="address" placeholder="Adresas">
          </p>
          <p class="full">
            <label>Papildoma informacija</label>
            <textarea id="subject" name="info" placeholder="Papildoma informacija"></textarea>
          </p>
          <p class="full">
            <input type="submit" name="submit" value="Užsakyti">
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>