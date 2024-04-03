<?php
require_once 'conn.php';

$id = $_GET["id"];
    $query = "DELETE FROM user WHERE id = '$id'";
    if (mysqli_query($con, $query)) {
        header("location: basic-database-op.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }

?>