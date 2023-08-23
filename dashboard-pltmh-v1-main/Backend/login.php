<?php 
require 'function.php';

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    //query
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1)
    {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]))
        {
            if(isset($error))
            {?>
            <?php

            }
            header('Location: dashboard.php');
            exit;
        }

    }
    $error = true;
}
?>