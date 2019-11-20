<?php
include 'api.php';
$id = $_GET["id"];
    $q = $con->query(
        "DELETE FROM tbwarung WHERE `id`='$id';"
    );
header("location: index.php");