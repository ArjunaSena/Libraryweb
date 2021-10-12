<?php
require "../db_connect.php";
require "../message_display.php";
require "verify_librarian.php";
require "header_librarian.php";
?>

<html>

<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../css/global_styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/form_styles.css" />
    <link rel="stylesheet" href="css/update_copies_style.css">
</head>

<body>
    <form class="cd-form" method="POST" action="#">
        <center>
            <legend>Update Book Price</legend>
        </center>

        <div class="error-message" id="error-message">
            <p id="error"></p>
        </div>

        <div class="icon">
            <input class="b-isbn" type='text' name='b_isbn' id="b_isbn" placeholder="Book ISBN" required />
        </div>

        <div class="icon">
            <input class="b-price" type="number" name="b_price" placeholder="Price" required />
        </div>

        <input type="submit" name="b_add" value="Update Book Price" />
    </form>
</body>

<?php
if (isset($_POST['b_add'])) {
    $query = $con->prepare("SELECT isbn FROM book WHERE isbn = ?;");
    $query->bind_param("s", $_POST['b_isbn']);
    $query->execute();
    if (mysqli_num_rows($query->get_result()) != 1)
        echo error_with_field("Invalid ISBN", "b_isbn");
    else {
        $query = $con->prepare("UPDATE book SET price = ? WHERE isbn = ?;");
        $query->bind_param("is", $_POST['b_price'], $_POST['b_isbn']);
        if (!$query->execute())
            die(error_without_field("ERROR: Couldn\'t update book price"));
        echo success("Price of book  has been updated");
    }
}
?>

</html>