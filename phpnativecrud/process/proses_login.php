<?php
    require_once('../function/helper.php');
    require_once('../function/connection.php');

    //menangkap REQUEST
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    
    // cek pengguna
    if (mysqli_num_rows($query) != 0) {
        $row = mysqli_fetch_assoc($query);
        // membuat session
        session_start();
        $_SESSION['id'] = $row['id'];
        header('Location: ' . BASE_URL . 'dashboard.php');
        // untuk cek 
        // var_dump($row);
        // die();
    } else {
        header('Location: ' . BASE_URL);
    }
    // var_dump(mysqli_num_rows($query));
    // die();
?>

<!-- $username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['id'] = $row['id'];
    header("location:" . BASE_URL . "dashboard.php");
} else {
    header("location:" . BASE_URL);
} -->