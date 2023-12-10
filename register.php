<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile_number'];

    // Gantilah "nama_tabel" dengan nama tabel yang sesuai di database Anda
    $sql = "INSERT INTO nama_tabel (username, email, password, mobile_number) VALUES ('$username', '$email', '$password', '$mobile_number')";

    if ($conn->query($sql) === TRUE) {
        // Registrasi berhasil, alihkan ke halaman login
        header("Location: login.php");
        exit();
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css"> <!-- Hubungkan dengan file CSS jika diperlukan -->
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="post" action="">

            <label>User Name:</label>
            <input type="text" name="username" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <label>Mobile Number:</label>
            <input type="text" name="mobile_number" required><br>

            <button type="submit">Register</button>
        </form>

        <p>Sudah memiliki akun? <a href="login.php">Login</a></p>

        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
    </div>
</body>
</html>
