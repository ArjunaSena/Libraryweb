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

		<!--
		<a href="insert_book.php">
			<input type="button" value="Insert New Book Record" />
		</a><br />

		<a href="update_copies.php">
			<input type="button" value="Update Copies of a Book" />
		</a><br />

		<a href="update_prize.php">
			<input type="button" value="Update Price of a Book" />
		</a><br />

		<a href="delete_book.php">
			<input type="button" value="Delete Book Records" />
		</a><br />

		<a href="display_books.php">
			<input type="button" value="Display Available Books" />
		</a><br />

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

		!-->



		<a href="for_books.php">
			<input type="button" value="Books" style="padding-top: 50px; padding-bottom:50px; font-size: xx-large;;" />
		</a><br />

		<a href="for_members.php">
			<input type="button" value="Members" style="padding-top: 50px; padding-bottom:50px; font-size: xx-large;;" />
		</a><br />


		<a href="due_handler.php">
			<input type="button" value="Today's Reminder" />
		</a><br /><br />

	</div>
</body>

</html>