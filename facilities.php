<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ⭐ UBAH: tambah title -->
    <title>Facilities List</title>

    <!-- ⭐ UBAH: sambungkan kepada style.css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ⭐ UBAH: tambah container -->
    <div class="container">

        <!-- ⭐ UBAH: tambah header -->
        <div class="header">

            <div>
                <!-- ⭐ UBAH: tambah subtitle -->
                <p class="subtitle">FACILITIES MANAGEMENT</p>

                <h2>Facilities List</h2>
            </div>
            <!-- ⭐ TAMBAH: button group -->
            <div class="header-buttons">

                <!-- ⭐ TAMBAH: Back to Dashboard -->
                <a href="dashboard.php" class="back-btn">Back to Dashboard</a>

                <!-- ⭐ UBAH: style Add button -->
                <a href="add_facilities.php" class="add-btn">+ Add New Facilities</a>
            </div>
        </div>


        <!-- ⭐ UBAH: tambah table-container -->
        <div class="table-container">

            <table>

                <tr>
                    <th>ID</th>
                    <th>Name Facilities</th>
                    <th>Operation Hours</th>
                    <th>Payment</th>
                    <th>Level</th>

                    <!-- ⭐ UBAH: tambah header untuk Edit/Delete -->
                    <th>Action</th>
                </tr>

                <?php

                // SELECT semua data daripada facilities table
                $result = $conn->query("SELECT * FROM facilities");

                while ($row = $result->fetch_assoc()) {

                    echo "<tr>
    <td>" . $row['id_facilities'] . "</td>
    <td>" . $row['name_facilities'] . "</td>
    <td>" . $row['operation_hours'] . "</td>
    <td>" . $row['payment'] . "</td>
    <td>" . $row['level'] . "</td>

                    <!-- ⭐ UBAH: tambah class actions -->
                    <td class='actions'>

                        <a href='edit_facilities.php?id=" . $row['id_facilities'] . "' 
                           class='edit-btn'>Edit</a>

                        <a href='delete_facilities.php?id=" . $row['id_facilities'] . "' 
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