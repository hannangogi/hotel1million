<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ⭐ UBAH: tambah title -->
    <title>Room List</title>

    <!-- ⭐ UBAH: sambungkan style.css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ⭐ UBAH: tambah container -->
<div class="container">

    <!-- ⭐ UBAH: tambah header -->
    <div class="header">

        <div>
            <!-- ⭐ UBAH: tambah subtitle -->
            <p class="subtitle">ROOM MANAGEMENT</p>

            <h2>Room List</h2>
        </div>
<!-- ⭐ TAMBAH: button group -->
<div class="header-buttons">

    <!-- ⭐ TAMBAH: Back to Dashboard -->
    <a href="dashboard.php" class="back-btn">Back to Dashboard</a>

        <!-- ⭐ UBAH: style Add button -->
        <a href="add_room.php" class="add-btn">+ Add New Room</a>
</div>
    </div>


    <!-- ⭐ UBAH: tambah table-container -->
    <div class="table-container">

        <table>

            <tr>
                <th>ID ROOM</th>
                <th>No Room</th>
                <th>Level</th>
                <th>Type of Room</th>
                <th>Pax per Room</th>
                <th>View</th>
                <th>Add On</th>

                <!-- ⭐ UBAH: tambah Action header -->
                <th>Action</th>
            </tr>

            <?php

            // $conn->query() sends SQL command to database.
            // SELECT * means fetch all columns from the room table.
            $result = $conn->query("SELECT * FROM room");

            // Loop through every room record.
            while($row = $result->fetch_assoc()) {

                echo "<tr>
    <td>".$row['id_room']."</td>
    <td>".$row['no_room']."</td>
    <td>".$row['level']."</td>
    <td>".$row['type_of_room']."</td>
    <td>".$row['pax_per_room']."</td>
    <td>".$row['view']."</td>
    <td>".$row['add_on']."</td>


                    <!-- ⭐ UBAH: tambah class actions -->
                    <td class='actions'>

                        <a href='edit_room.php?id=".$row['id_room']."' 
                           class='edit-btn'>Edit</a>

                        <a href='delete_room.php?id=".$row['id_room']."' 
                           class='delete-btn'>Delete</a>

                    </td>

                </tr>";

            }

            ?>

        </table>

    </div>

</div>

</body>
</html>
