<?php include 'db.php'; ?>

<?php

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM customer WHERE id = $id");

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Customer Records</title>

    <!-- Connect to the same CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container add-container">

    <div class="form-header">

        <p class="subtitle">CUSTOMER MANAGEMENT</p>

        <h2>Edit Customer Records</h2>

        <p class="form-description">
            Update the customer information below.
        </p>

    </div>


    <form method="post" class="customer-form">

        <div class="form-group">

            <label>Name</label>

            <input
                type="text"
                name="name"
                value="<?php echo $row['name']; ?>"
            >

        </div>


        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="<?php echo $row['email']; ?>"
            >

        </div>


        <div class="form-group">

            <label>Phone Number</label>

            <input
                type="text"
                name="phone_number"
                value="<?php echo $row['phone_number']; ?>"
            >

        </div>


        <div class="form-group">

            <label>IC</label>

            <input
                type="text"
                name="ic"
                value="<?php echo $row['ic']; ?>"
            >

        </div>


        <div class="form-group">

            <label>Key Room</label>

            <input
                type="text"
                name="key_room"
                value="<?php echo $row['key_room']; 
?>" > </div> 

<div class="form-actions"> 
<input 
type="submit" 
name="update" 
value="Update" 
class="save-btn" > 

<a href="index.php" class="back-btn"> Back </a> 
</div> 
</form> 
</div> 

<?php if(isset($_POST['update'])){

    // Read the new values the user typed.

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $ic = $_POST['ic'];
    $key_room = $_POST['key_room'];


    // Update the customer record in the database.

$conn->query("UPDATE customer SET name = '$name', email = '$email', phone_number = '$phone_number', ic = '$ic', key_room = '$key_room' WHERE id = $id");


    // Redirect back to the list to see the updated customer.

    header("Location: index.php");
    exit();

}

?>

</body>
</html>
