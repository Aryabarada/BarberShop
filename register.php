<?php 
include 'config.php';

error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE alamat='$alamat'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, alamat, password)
                    VALUES ('$username', '$alamat', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $alamat = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! alamat Sudah Terdaftar.')</script>";
        } 
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="kode.css">
</head>
<body>
<div class="container">
    <div class="login">
        <form action="" method="POST">
        <h1><center>SIGN UP</center> </h1>
        <hr>
            <label>Username</label>
                <input type="username" placeholder="Masukan Username" class="form" name="username" value="<?php echo $username; ?>" required>
            <label>Alamat</label>
                <input type="alamat" placeholder="Masukan Alamat" class="form" name="alamat" value="<?php echo $alamat; ?>" required>
            <label>Password</label>
                <input type="password" placeholder="Masukan Password" class="form" name="password" value="<?php echo $_POST['password']; ?>" required>
            <label>Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class="form" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            <input type="submit" name="submit" class="btn" value="REGISTER">
            <p class="form">Have Already Account? <a href="login.php">Login </a></p>
        </form>
    </div>
    <div class="rightimg">
        <img src="logo.png">
    </div>
</div>
</body>
</html>