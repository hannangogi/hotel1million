<?php include 'db.php'; ?>

<?php
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check username and password from database
    $result = $conn->query("SELECT * FROM login
                            WHERE username = '$username' 
                            AND password = '$password'");

    if ($result->num_rows > 0) {

        // Login successful
        header("Location: dashboard.php");
        exit();

    } else {

        // Login failed
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container add-container">

        <div class="form-header">

            <p class="subtitle">HOTEL MANAGEMENT SYSTEM</p>

            <h2>Login</h2>

            <p class="form-description">
                Please enter your username and password.
            </p>

        </div>


        <?php
        if (isset($error)) {
            echo "<p style='color: red; margin-bottom: 15px;'>$error</p>";
        }
        ?>


        <form method="post" class="customer-form">

            <div class="form-group">

                <label>Username</label>

                <input type="text" name="username" placeholder="Enter username" required>

            </div>


            <div class="form-group">

                <label>Password</label>

                <input type="password" name="password" placeholder="Enter password" required>

            </div>


            <div class="form-actions">

                <input type="submit" name="login" value="Login" class="save-btn">

            </div>

        </form>

    </div>

</body>

</html>