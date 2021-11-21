<?php
require "../db_connect.php";
require "../message_display.php";
require "verify_librarian.php";
require "header_librarian.php";
?>

<html>


<!----remeber to add js to validations!-->




<head>
	<title>LMS</title>
	<link rel="stylesheet" type="text/css" href="../css/global_styles.css" />
	<link rel="stylesheet" type="text/css" href="../css/form_styles.css" />
	<link rel="stylesheet" href="css/insert_book_style.css">


	<script>
		function price() {

			var rs = document.getElementById("b_price").value;

			if (rs < 0) {
				alert("Add proper book price");
				return false;

			}
			return true;

		}

		function all() {

			if (price()) {




			} else {



				event.preventDefault();
			}



		}
	</script>



</head>

<body>
	<form class="cd-form" method="POST" action="#">
		<center>
			<legend>Add New Book Details</legend>
		</center>

		<div class="error-message" id="error-message">
			<p id="error"></p>
		</div>

		<div class="icon">
			<input class="b-isbn" id="b_isbn" type="number" name="b_isbn" placeholder="ISBN" required />
		</div>

		<div class="icon">
			<input class="b-title" type="text" name="b_title" placeholder="Book Title" required />
		</div>

		<div class="icon">
			<input class="b-author" type="text" name="b_author" placeholder="Author Name" required />
		</div>

		<div>
			<h4>Genre</h4>

			<p class="cd-select icon">
				<select class="b-category" name="b_category">
					<option>Education</option>
					<option>Sports</option>
					<option>Technology</option>
					<option>History</option>
					<option>Action Adventure</option>
					<option>Horror</option>

					<option>Comedy</option>
					<option>Romance</option>
					<option>Bildungsroman</option>
					<option>Detective</option>
					<option>True Crime</option>
					<option>Mystery</option>
					<option>Thrillers</option>
					<option>Women's Fiction</option>
					<option>Historical Fiction</option>
					<option>Philosophical Fiction</option>
					<option>Science Fiction (Sci-Fi)</option>
					<option>Literary Fiction</option>
					<option>Adventure Fiction</option>
					<option>Autobiographies</option>
					<option>Biography</option>
					<option>Medical</option>
					<option>Short Stories</option>
					<option>Cookbooks</option>
					<option>Essays</option>
					<option>Memoir</option>
					<option>Poetry</option>
					<option>Self-Help</option>
					<option>Fantasy</option>
					<option>Classic</option>
					<option>Comics</option>
					<option>Novel</option>
					<option>Graphic Novel</option>
					<option>Historical Novel</option>
					<option>Adventure Novel</option>



				</select>
			</p>
		</div>

		<div class="icon">
			<input class="b-price" type="number" id="b_price" name="b_price" placeholder="Price" required />
		</div>

		<div class="icon">
			<input class="b-copies" type="number" name="b_copies" placeholder="Number of Copies" required />
		</div>

		<br />
		<input class="b-isbn" type="submit" name="b_add" value="Add book" onclick="price()" />
	</form>

	<body>

		<?php
		if (isset($_POST['b_add'])) {
			$query = $con->prepare("SELECT isbn FROM book WHERE isbn = ?;");
			$query->bind_param("s", $_POST['b_isbn']);
			$query->execute();

			if (mysqli_num_rows($query->get_result()) != 0)
				echo error_with_field("A book with that ISBN already exists", "b_isbn");
			else {
				$query = $con->prepare("INSERT INTO book VALUES(?, ?, ?, ?, ?, ?);");
				$query->bind_param("ssssdd", $_POST['b_isbn'], $_POST['b_title'], $_POST['b_author'], $_POST['b_category'], $_POST['b_price'], $_POST['b_copies']);

				if (!$query->execute())
					die(error_without_field("ERROR: Couldn't add book"));
				echo success("New book record has been added");
			}
		}
		?>

</html>