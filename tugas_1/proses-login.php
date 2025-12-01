<?php
session_start();
include "config/koneksi.php";

if (isset($_POST['login'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Cek ke database admin
    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);

        // COCOKKAN PASSWORD
        if ($password == $data['password']) {

            // Simpan SESSION
            $_SESSION['login'] = true;
            $_SESSION['email'] = $data['email'];

            header("Location: admin/dashboard.php");
            exit;

        } else {
            header("Location: login.php?error=1");
            exit;
        }

    } else {
        header("Location: login.php?error=1");
        exit;
    }

}
?>
