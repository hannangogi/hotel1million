<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #292929;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu {
            display: flex;
            gap: 70px;
        }

        .menu-button {
            width: 235px;
            height: 150px;

            background-color: #ffcc05;
            color: black;

            border: none;
            border-radius: 32px;

            font-size: 40px;
            font-weight: bold;

            cursor: pointer;

            display: flex;
            justify-content: center;
            align-items: center;

            text-decoration: none;
        }

        .menu-button:hover {
            background-color: #e6b800;
        }
    </style>
</head>

<body>

    <div class="menu">

        <a href="index.php" class="menu-button">
            Customer
        </a>

        <a href="room.php" class="menu-button">
            Room
        </a>

        <a href="facilities.php" class="menu-button">
            Facilities
        </a>

    </div>

</body>

</html>