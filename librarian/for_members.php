<?php
require "../db_connect.php";
require "verify_librarian.php";
require "header_librarian.php";
?>

<html>

<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="css/home_style.css" />
</head>

<body>
    <div id="allTheThings">



        <a href="display_members.php">
            <input type="button" value="Display Registered Members" />
        </a><br />

        <a href="pending_book_requests.php">
            <input type="button" value="Manage Pending Book Requests" />
        </a><br />

        <a href="pending_registrations.php">
            <input type="button" value="Manage Pending Membership Registrations" />
        </a><br />

        <a href="pending_ps_reset.php">
            <input type="button" value="Change Password of Members" />
        </a><br />

        <a href="update_balance.php">
            <input type="button" value="Update Balance of Members" />
        </a><br />


    </div>
</body>

</html>