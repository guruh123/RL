<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: Dashboard.php");
    exit;
}
$name = "login";
include('components/connectdb.inc.php');
include('components/head.inc.php');
include('layouts/navbarback.inc.php');
include('layouts/loginres.inc.php');
include('components/footer.inc.php');
if (isset($_POST["login"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["password"] = $_POST["password"];
    $query = mysqli_query($conn, "SELECT * FROM usermahasiswa WHERE nama='" . $_POST["name"] . "' AND password='" . $_POST["password"] . "'")
        or die('Error: ' . mysqli_connect_error());
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $_SESSION["loggedin"] = true;
        header("location: Dashboard.php");
    } else {
        echo "Silahkan registrasi terlebih dahulu";
    }
}
?>