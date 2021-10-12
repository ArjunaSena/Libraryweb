<?php

session_start();

require "../db_connect.php";

if (!isset($_SESSION['req_id'])) {
    header('location:../index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "DELETE from forgot_pswrd_request where req_id=$id";
    $result = mysqli_query($con, $qry);

    if ($result) {
        header('Location:update_password.php');
    } else {
        echo "ERROR!!";
    }
}
