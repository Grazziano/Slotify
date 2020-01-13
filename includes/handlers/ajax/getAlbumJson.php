<?php
include("../../config.php");

if (isset($_POST['albumId'])) {
    $albumId = $_POST['albumId'];
    $query = mysqli_query($con, "SELECT * FROM albums WHERE id = '$albumtId'");
    $resultArray = mysqli_fetch_array($query);

    echo json_encode($resultArray);
}
