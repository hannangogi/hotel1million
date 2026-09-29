<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];

/* ⭐ UBAH: id_room, bukan id */
$result = $conn->query("SELECT * FROM room WHERE id_room = $id");

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ⭐ UBAH: tambah title -->
    <title>Edit Room Records</title>

    <!-- ⭐ UBAH: sambungkan style.css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ⭐ UBAH: tambah container -->
    <div class="container add-container">

        <!-- ⭐ UBAH: tambah form header -->
        <div class="form-header">

            <p class="subtitle">ROOM MANAGEMENT</p>

            <h2>Edit Room Records</h2>

            <p class="form-description">
                Update the room information below.
            </p>

        </div>


        <!-- ⭐ UBAH: tambah class -->
        <form method="post" class="customer-form">

            <div class="form-group">
                <label>Number Room</label>

                <input type="text" name="no_room" value="<?php echo $row['no_room']; ?>">
            </div>


            <div class="form-group">
                <label>Level</label>

                <input type="text" name="level" value="<?php echo $row['level']; ?>">
            </div>


            <div class="form-group">
                <label>Type of Room</label>

                <input type="text" name="type_of_room" value="<?php echo $row['type_of_room']; ?>">
            </div>


            <div class="form-group">
                <label>Pax per Room</label>

                <input type="text" name="pax_per_room" value="<?php echo $row['pax_per_room']; ?>">
            </div>


            <div class="form-group">
                <label>View</label>

                <input type="text" name="view" value="<?php echo $row['view']; ?>">
            </div>


            <!-- ⭐ UBAH: guna nama column add_on
             sebab room.php awak menggunakan add_on -->
            <div class="form-group">
                <label>Add On</label>

                <input type="text" name="add_on" value="<?php echo $row['add_on']; ?>">
            </div>


            <!-- ⭐ UBAH: tambah form-actions -->
            <div class="form-actions">

                <input type="submit" name="update" value="Update" class="save-btn">

                <a href="room.php" class="back-btn">Back</a>

            </div>

        </form>

    </div>


    <?php

    if (isset($_POST['update'])) {

        // Read the new values typed by the user.
        $no_room = $_POST['no_room'];
        $level = $_POST['level'];
        $type_of_room = $_POST['type_of_room'];
        $pax_per_room = $_POST['pax_per_room'];
        $view = $_POST['view'];

        /* ⭐ UBAH: guna add_on */
        $add_on = $_POST['add_on'];


        /* ⭐ UBAH: betulkan UPDATE query */
        $conn->query("UPDATE room SET
        no_room = '$no_room',
        level = '$level',
        type_of_room = '$type_of_room',
        pax_per_room = '$pax_per_room',
        view = '$view',
        add_on = '$add_on'
        WHERE id_room = $id
    ");


        /* ⭐ UBAH: balik ke room.php */
        header("Location: room.php");
        exit();
    }

    ?>

</body>

</html>