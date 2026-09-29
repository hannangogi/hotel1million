<?php include 'db.php'; ?>
<!--
  add.php — CREATE (the "C" in CRUD)
  Shows a form to type a new student, then saves it into the database.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Customer</title>

  <!-- Use the same CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container add-container">

    <div class="form-header">
      <p class="subtitle">CUSTOMER MANAGEMENT</p>
      <h2>Add Customer</h2>
      <p class="form-description">
        Enter the customer information below.
      </p>
    </div>

    <!--
      An HTML form. method="post" sends the typed data hidden in the request
      body (not shown in the URL) when the form is submitted.
      Each <input> has a name="..." — that name is how PHP reads the value later.
    -->

    <form method="post" class="customer-form">

      <div class="form-group">
        <label>ID</label>
        <input type="text" name="id">
      </div>

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name">
      </div>

      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone_number">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email">
      </div>

      <div class="form-group">
        <label>IC</label>
        <input type="number" name="ic">
      </div>

      <div class="form-group">
        <label>Key Room</label>
        <input type="text" name="key_room">
      </div>


      <!-- The submit button. Clicking it sends the form.
             name="save" lets PHP tell that THIS button was pressed. -->

      <div class="form-actions">
        <input type="submit" name="save" value="Save" class="save-btn">
        <a href="index.php" class="back-btn">Back</a>
      </div>

    </form>

  </div>


  <?php

  // isset(...) checks whether a value exists / was set.
// $_POST is a built-in PHP array that holds the data sent by a form using method="post".
// So this line means: "IF the Save button was clicked, run the code inside { }."
  
  if (isset($_POST['save'])) {

    // Read each value the user typed.
    // The key inside [ ] matches the input's name="...".
  
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $ic = $_POST['ic'];
    $key_room = $_POST['key_room'];


    // Send an INSERT command to add a new row to the students table.
    // "INSERT INTO table (columns) VALUES (...)" is the SQL for creating new data.
  
    $conn->query("INSERT INTO customer (id, name, email,phone_number, ic, key_room)
VALUES ('$id','$name','$email','$phone','$ic','$key_room')");


    // header("Location: ...") tells the browser to redirect to another page.
    // After saving, we send the user back to the list so they can see the new student.
  
    header("Location: index.php");
  }

  ?>

</body>

</html>