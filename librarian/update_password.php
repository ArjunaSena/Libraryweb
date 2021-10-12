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
    <link rel="stylesheet" href="css/update_balance_style.css">
</head>

<body>
    <form class="cd-form" method="POST" action="#">
        <center>
            <legend>Change Member's Password</legend>
        </center>

        <div class="error-message" id="error-message">
            <p id="error"></p>
        </div>

        <div class="icon">
            <input class="m-user" type='text' name='m_user' id="m_user" placeholder="Member username" required />
        </div>

        <div class="icon">
            <input class="m-pass" type="password" name="m_pass" placeholder="New Password" required />
        </div>

        <input type="submit" name="m_change" value="Change" />
    </form>
</body>

<?php




if (isset($_POST['m_change'])) {
    $query = $con->prepare("SELECT username FROM member WHERE username = ?;");
    $query->bind_param("s", $_POST['m_user']);
    $query->execute();
    if (mysqli_num_rows($query->get_result()) != 1)
        echo error_with_field("Invalid username", "m_user");
    else {
        $query = $con->prepare("UPDATE member SET password =  ? WHERE username = ?;");
        $query->bind_param("ss", sha1($_POST['m_pass']), $_POST['m_user']);
        if (!$query->execute())
            die(error_without_field("ERROR: Couldn\'t change"));
        echo success("Password successfully changed");
    }
}
?>

</html>