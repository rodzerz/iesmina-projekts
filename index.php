<?php
include "connect.php";

if (isset($_POST["submit"])) {
    // Iegūstam datus no formas
    $name = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $phone = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    // Izveidojam SQL vaicājumu
    $sql = "INSERT INTO users (first_name, last_name, phone, email, dob, password) 
            VALUES ('$name', '$lastname', '$phone', '$email', '$dob', '$password')";

    // Veicam vaicājumu un pārbaudām, vai tas izpildās
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Dati veiksmīgi ievietoti datubāzē.";
    } else {
        die(mysqli_error($con)); // Ja ir kļūda, izdrukā to
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
  <!-- First Name -->
  <div class="form-group">
    <label for="firstName">Vārds</label>
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Ievadiet vārdu" required>
  </div>

  <!-- Last Name -->
  <div class="form-group">
    <label for="lastName">Uzvārds</label>
    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Ievadiet uzvārdu" required>
  </div>

  <!-- Phone Number -->
  <div class="form-group">
    <label for="phoneNumber">Telefona Nr</label>
    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Ievadiet telefona numuru" required>
  </div>

  <!-- Email -->
  <div class="form-group">
    <label for="email">E-pasts</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Ievadiet e-pastu" required>
  </div>

  <!-- Date of Birth -->
  <div class="form-group">
    <label for="dob">Dzimšanas datums</label>
    <input type="date" class="form-control" id="dob" name="dob" required>
  </div>

  <!-- Password -->
  <div class="form-group">
    <label for="password">Parole</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Ievadiet paroli" required>
  </div>

  <!-- Submit Button -->
  <button type="submit" name="submit" class="btn btn-primary">Reģistrēties</button>
</form>


  </body>
</html>