<?php include 'db.php'; ?>
<!--
  index.php — READ (the "R" in CRUD)
  Lists every student from the database in a table.
  The line above runs db.php first, so $conn (our database
  connection) already exists and is ready to use here.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Records</title>

    <!-- Connect to CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <div class="header">
            <div>
                <p class="subtitle">DATABASE MANAGEMENT</p>
                <h2>Customer Records</h2>
            </div>

            <!-- A link (the <a> "anchor" tag). Clicking it opens the add-student page. -->
            <!-- ⭐ TAMBAH: button group -->
            <div class="header-buttons">

                <!-- ⭐ TAMBAH: Back to Dashboard -->
                <a href="dashboard.php" class="back-btn">Back to Dashboard</a>

                <!-- Add New Record -->
                <a href="addcustomer.php" class="add-btn">+ Add New Record</a>
            </div>
        </div>


        <!-- Start an HTML table. -->
        <div class="table-container">

            <table>
                <tr>
                    <!-- <tr> = table row. <th> = a bold header cell (table heading). -->
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>IC</th>
                    <th>Key Room</th>
                    <th>Action</th>
                </tr>

                <?php

                // $conn->query(...) sends an SQL command to the database and returns the result.
                // "SELECT * FROM students" means: fetch ALL columns (*) of every row in the "students" table.
                
                $result = $conn->query("SELECT * FROM customer");

                // A "while" loop repeats its block once for each row that comes back.
                // $result->fetch_assoc() returns the NEXT row as an "associative array"
                // (an array whose values are read by column name, e.g. $row['name']).
                // When there are no rows left it returns null, which ends the loop.
                
                while ($row = $result->fetch_assoc()) {

                    // echo prints HTML to the page.
                    // The dots ( . ) glue the text and the variables together.
                
                    echo "<tr>
    <td>" . $row['id'] . "</td>
    <td>" . $row['name'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['phone_number'] . "</td>
    <td>" . $row['ic'] . "</td>
     <td>" . $row['key_room'] . "</td>


            <td class='actions'>
              <a href='edit_customer.php?id=" . $row['id'] . "' class='edit-btn'>Edit</a>
              <a href='delete_customer.php?id=" . $row['id'] . "' class='delete-btn'>Delete</a>
            </td>

          </tr>";

                    // Note: edit.php?id=... and delete.php?id=...
                    // put the student's id into the URL, so the next page
                    // knows exactly which student to edit or delete.
                }

                ?>

            </table>

        </div>

    </div>

</body>

</html>