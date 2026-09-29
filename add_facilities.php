<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Facility</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container add-container">

        <div class="form-header">
            <p class="subtitle">FACILITIES MANAGEMENT</p>
            <h2>Add Facility</h2>

            <p class="form-description">
                Enter the facility information below.
            </p>
        </div>

        <form method="post" class="customer-form">

            <div class="form-group">
                <label>Facilities Room</label>
                <input type="text" name="facilities_room">
            </div>

            <div class="form-group">
                <label>Name Facilities</label>
                <input type="text" name="name_facilities">
            </div>

            <div class="form-group">
                <label>Operation Hours</label>
                <input type="text" name="operation_hours">
            </div>

            <div class="form-group">
                <label>Payment</label>
                <input type="text" name="payment">
            </div>

            <div class="form-group">
                <label>Level</label>
                <input type="text" name="level">
            </div>

            <div class="form-actions">

                <input type="submit" name="save" value="Save" class="save-btn">

                <a href="facilities.php" class="back-btn">
                    Back
                </a>

            </div>

        </form>

    </div>


    <?php

    if (isset($_POST['save'])) {

        $name_facilities = $_POST['name_facilities'];
        $operation_hours = $_POST['operation_hours'];
        $payment = $_POST['payment'];
        $level = $_POST['level'];

        $sql = "INSERT INTO facilities 
                (name_facilities, operation_hours, payment, level)
                VALUES
                ('$name_facilities', '$operation_hours', '$payment', '$level')";

        if ($conn->query($sql) === TRUE) {
            header("Location: facilities.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }

    ?>

</body>

</html>