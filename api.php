<?php
/*
file ini digunakan untuk remote database
Nama file: indeks.php
Path: RM/indexs.php
Versi: 1
Email: Kesatrianglungutpertama@gmail.com
*/
header("Acces-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = "localhost";
$user = "root";
$pw = "";
$db = "rm";

$con = new mysqli($host, $user, $pw, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$con->query("SET CHARACTER SET utf8");
$con->query("SET NAMES 'utf8'");

$action = $_GET["action"];

switch ($action) {

    //http://localhost/web_pbo_master/api.php?action=getAllWarung
    case "getAllWarung":
    $q = $con->query(
        "SELECT * FROM tbwarung"
    );
    $rows = array();
    while ($r = mysqli_fetch_assoc($q)) {
        $rows[] = $r;
    }
    print json_encode($rows);
    $con->close();

    break;

//http://localhost/web_pbo_master/api.php?action=AddUser&username=agus&pass=asd&level=admin
    case "AddUser";
    $username = $_GET["username"];
    $pass = $_GET["pass"];
    $level = $_GET["level"];
    $q = $con->query(
        "INSERT INTO tbuser (
        `username`,
        `pass`,
        `level`
        ) VALUES (
        '$username',
        '$pass',
        '$level')"
    );
    if ($q) {
        print json_encode("Data berhasil di input.");
    } else {
        print json_encode("Data gagal di input.");
        print $con->error;
    }

    $con->close();
    break;  
    case "UpdateUser":
    $id = $_GET["id"];
    $username = $_GET["username"];
    $pass = $_GET["pass"];
    $level = $_GET["level"];
    $q = $con->query(
        "UPDATE tbwarung set
        `username`='$username',
        `pass`=$pass',
        `level`=$level',
        where `id`='$id'"
    );
    if ($q) {
        print json_encode("Berhasil Update.");
    } else {
        print json_encode("Gagal Update.");
    }
    $con->close();
    break;
        //http://localhost/web_pbo_master/api.php?action=GetUserFrom&username=agus&pass=asd
    case "GetUserFrom":
    $username = $_GET["username"];
    $pass = $_GET["pass"];
    $q = $con->query(
        "Select * FROM tbuser WHERE `username`='$username' and `pass`='$pass';"
    );

    $rows = array();
    while ($r = mysqli_fetch_assoc($q)) {
        $rows[] = $r;
    }
    print json_encode($rows);
    print $con->error;
        //$con->close();
    break;  
//http://localhost/web_pbo_master/api.php?action=GetUsers
    case "GetUsers":
    $q = $con->query(
        "Select * FROM tbuser;"
    );

    $rows = array();
    while ($r = mysqli_fetch_assoc($q)) {
        $rows[] = $r;
    }
    print json_encode($rows);
    print $con->error;
        //$con->close();
    break;  
    case "AddWarung";
    $namawarung = $_GET["namawarung"];
    $namapemilik = $_GET["namapemilik"];
    $alamat = $_GET["alamat"];
    $q = $con->query(
        "INSERT INTO tbwarung (
        `namawarung`,
        `namapemilik`,
        `alamat`,
        ) VALUES (
        '$namawarung',
        '$namapemilik',
        '$alamat')"
    );
    if ($q) {
        print json_encode("Data berhasil di input.");
    } else {
        print json_encode("Data gagal di input.");
    }
    $con->close();
    break;
    case "UpdateWarung":
    $id = $_GET["id"];
    $namawarung = $_GET["namawarung"];
    $namapemilik = $_GET["namapemilik"];
    $alamat = $_GET["alamat"];
    $q = $con->query(
        "UPDATE tbwarung set
        `namawarung`='$namawarung',
        `namapemilik`=$namapemilik',
        `alamat`=$alamat',
        where `id`='$id'"
    );
    if ($q) {
        print json_encode("Berhasil Update.");
    } else {
        print json_encode("Gagal Update.");
    }
    $con->close();
    break;
    case "DeleteUser":
    $id = $_GET["id"];
    $q = $con->query(
        "DELETE FROM users
        where
        `id`='$id'"
    );
    if ($q) {
        print json_encode("Terhapus.");
    } else {
        print json_encode("Gagal menghapus.");
    }
    $con->close();
    break;


    //http://localhost/web_pbo_master/api.php?action=getallLokasi
    case "getallLokasi":
    $q = $con->query(
        "SELECT * FROM tblokasi"
    );

    $rows = array();
    while ($r = mysqli_fetch_assoc($q)) {
        $rows[] = $r;
    }
    print json_encode($rows);
        //$con->close();


    break;

    case "addlokasi":
    $idwarung = $_GET["idwarung"];
    $longitude = $_GET["longitude"];
    $lotitude = $_GET["lotitude"];
    $alamat = $_GET["alamat"];
    $q = $con->query(
        "INSERT INTO tblokasi(
        'idwarung',
        'longitude',
        'lotitude','alamat') VALUES (
        '$idwarung',
        '$longtitude',
        '$lotitude','alamat')"
    );

    if ($q) {
        print json_encode("data berhasil di input.");
    } else {
        print json_encode("data gagal di input.");
    }

    $con->close();
    break;
    case "updatelokasi":
    $id = $_GET["id"];
    $namawarung = $_GET["namawarung"];
    $namapemilik = $_GET["namapemilik"];
    $alamat = $_GET["alamat"];

    $con = $con->query(
        "UPDATE tblokasi SET
        `namawarung` = '$namawarung',
        `namapemilik` = '$namapemilik',
        `alamat` = '$alamat'
        WHERE `id`='$id';
        "
    );

    if ($q) {
        print json_encode("update berhasil.");
    } else {
        print json_encode("update gagal");
    }

    $con->close();
    break;

    //http://localhost/web_pbo_master/api.php?action=deletelokasi&id=2
    case "deletelokasi":
    $id = $_GET["id"];
    $q = $con->query(
        "DELETE FROM tblokasi WHERE `idwarung`='$id';"
    );

    case "deleteuser":
    $id = $_GET["id"];
    $q = $con->query(
        "DELETE FROM user WHERE `id`='$id';"
    );


    $con->close();
    break;
    case "getAlladmin":
    $q = $con->query(
        "SELECT * FROM tbadmin"
    );

    $rows = array();
    while ($r = mysqli_fetch_assoc($q)) {
        $rows[] = $r;
    }
    print json_encode($rows);
    $con->close();
    break;
}
