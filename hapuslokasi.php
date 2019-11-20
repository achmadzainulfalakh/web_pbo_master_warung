<?php
include 'api.php';
$id = $_GET["id"];
    $q = $con->query(
        "DELETE FROM tblokasi WHERE `idwarung`='$id';"
    );
header("location: index.php");