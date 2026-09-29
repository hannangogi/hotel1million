<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM facilities WHERE id_facilities = $id");

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ⭐ UBAH: tambah title -->
    <title>Edit Facilities Records</title>

    <!-- ⭐ UBAH: sambungkan style.css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ⭐ UBAH: tambah container -->
    <div class="container add-container">

        <!-- ⭐ UBAH: tambah form header -->
        <div class="form-header">

            <p class="subtitle">FACILITIES MANAGEMENT</p>

            <h2>Edit Facilities Records</h2>

            <p class="form-description">
                Update the facilities information below.
            </p>

        </div>


        <!-- ⭐ UBAH: tambah class customer-form -->
        <form method="post" class="customer-form">

            <div class="form-group">
                <label>Name Facilities</label>

                <input type="text" name="name_facilities" value="<?php echo $row['name_facilities']; ?>">
            </div>


            <div class="form-group">
                <label>Operation Hours</label>

                <input type="text" name="operation_hours" value="<?php echo $row['operation_hours']; ?>">
            </div>


            <div class="form-group">
                <label>Payment</label>

                <input type="text" name="payment" value="<?php echo $row['payment']; ?>">
            </div>


            <div class="form-group">
                <label>Level</label>

                <input type="text" name="level" value="<?php echo $row['level']; ?>">
            </div>


            <!-- ⭐ UBAH: tambah form-actions -->
            <div class="form-actions">

                <input type="submit" name="update" value="Update" class="save-btn">

                <a href="facilities.php" class="back-btn">Back</a>

            </div>

        </form>

    </div>


    <?php

    if (isset($_POST['update'])) {

        // Read the new values typed by the user.
        $name_facilities = $_POST['name_facilities'];
        $operation_hours = $_POST['operation_hours'];
        $payment = $_POST['payment'];
        $level = $_POST['level'];


        // ⭐ UBAH: betulkan SQL query
        $conn->query("UPDATE facilities SET
        name_facilities = '$name_facilities',
        operation_hours = '$operation_hours',
        payment = '$payment',
        level = '$level'
        WHERE id_facilities = $id
    ");


        // Redirect back to facilities list.
        header("Location: facilities.php");
        exit();
    }

    ?>

</body>

</html>