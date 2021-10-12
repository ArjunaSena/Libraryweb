<?php
require "../db_connect.php";
require "../message_display.php";

require "../header.php";
?>


<html>

<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../css/global_styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/form_styles.css" />
    <link rel="stylesheet" href="css/Request_from.css">
</head>

<body>
    <form class="cd-form" method="POST" action="#">
        <center>
            <legend>Request Password Reset</legend>
        </center>

        <div class="error-message" id="error-message">
            <p id="error"></p>
        </div>

        <div class="icon">
            <input class="m-user" type='text' name='m_user' id="m_user" placeholder="Member username" required />
        </div>



        <input type="submit" name="m_request" value="Reset" />
    </form>
</body>

<?php
if (isset($_POST['m_request'])) {


    $query = $con->prepare("SELECT username FROM member WHERE username = ?;");
    $query->bind_param("s", $_POST['m_user']);
    $query->execute();



    if (mysqli_num_rows($query->get_result()) != 1)
        echo error_with_field("Invalid username", "m_user");
    else {
        $query = $con->prepare("INSERT INTO forgot_pswrd_request(username) VALUES(?);");
        $query->bind_param("s", $_POST['m_user']);
        if (!$query->execute())
            echo error_without_field("ERROR: Couldn\'t make request ");
        else
            echo success("Request has been sent default reset password with be '111'. ");
    }
}





?>



</html>