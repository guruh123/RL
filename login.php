<?php
session_start();
$hal = "about";
$name = "login";
include('component/connectdb.inc.php');
include('component/head.inc.php');
include('layouts/navbarback.inc.php');
include('layouts/loginres.inc.php');
if (isset($_POST["login"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $hak = $_POST["hak"];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE nama='" . $name . "' AND password='" . $password . "'")
        or die('Error: ' . mysqli_connect_error());
    if (mysqli_num_rows($query) > 0) {
        global $row;
        $row = mysqli_fetch_assoc($query);
        if($row["hak"] == "admin" && $hak == "1"){
            $_SESSION["name"] = $name;
            $_SESSION["hak"] = $hak;
            $_SESSION["id"] = $row["user_id"];
            header("location: dashboards/Dashboard.php");
        }else if($row["hak"] == "dosen" && $hak == "2"){
            $_SESSION["name"] = $name;
            $_SESSION["hak"] = $hak;
            $_SESSION["id"] = $row["user_id"];
            header("location: dashboards/dosen.php");
        }else if($row["hak"] == "mahasiswa" && $hak == "3"){
            $_SESSION["name"] = $name;
            $_SESSION["hak"] = $hak;
            $_SESSION["id"] = $row["user_id"];
            header("location: mahasiswa.php");
        }else{
            echo "Seng nggenah lek login";
        }
    } else {
        echo "Silahkan registrasi terlebih dahulu";
    }
}
if($_SESSION){
    if($_SESSION["hak"] == "1"){
        header("location: dashboards/Dashboard.php");
    }else if($_SESSION["hak"] == "2"){
        header("location: dashboards/dosen.php");
    }else{
        header("location: dashboards/mahasiswa.php");
    }
};
include('component/footer.inc.php');
?>