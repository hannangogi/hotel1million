<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Room</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container add-container">

        <div class="form-header">
            <p class="subtitle">ROOM MANAGEMENT</p>
            <h2>Add Room</h2>

            <p class="form-description">
                Enter the room information below.
            </p>
        </div>

        <form method="post" class="customer-form">

            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id_room">
            </div>

            <div class="form-group">
                <label>Room No</label>
                <input type="text" name="no_room">
            </div>

            <div class="form-group">
                <label>Room Type</label>
                <input type="text" name="type_of_room">
            </div>

            <div class="form-group">
                <label>View</label>
                <input type="text" name="view">
            </div>

            <div class="form-group">
                <label>Level</label>
                <input type="text" name="level">
            </div>

            <div class="form-group">
                <label>Pax</label>
                <input type="text" name="per_pax_room">
            </div>

            <div class="form-group">
                <label>Breakfast / Lunch / Dinner Set</label>
                <input type="text" name="breakfast_lunch_dinner_set">
            </div>

            <div class="form-actions">

                <input type="submit" name="save" value="Save" class="save-btn">

                <a href="room.php" class="back-btn">
                    Back
                </a>

            </div>

        </form>

    </div>

    <?php

    if (isset($_POST['save'])) {

        $id = $_POST['id_room'];
        $room_no = $_POST['no_room'];
        $room_type = $_POST['type_of_room'];
        $view = $_POST['view'];
        $level = $_POST['level'];
        $pax = $_POST['per_pax_room'];
        $breakfast_lunch_dinner_set = $_POST['breakfast_lunch_dinner_set'];

        $conn->query("INSERT INTO room
    (id, room_no, room_type, view, level, pax, breakfast_lunch_dinner_set)VALUES
('$id', '$room_no', '$room_type', '$view', '$level', '$pax', '$breakfast_lunch_dinner_set')");

        header("Location: room.php");
        exit();
    }

    ?>

</body>

</html>