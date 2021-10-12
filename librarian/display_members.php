<?php
require "../db_connect.php";
require "../message_display.php";
require "verify_librarian.php";
require "header_librarian.php";
?>

<html>

<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../css/global_styles.css">
    <link rel="stylesheet" type="text/css" href="../css/custom_checkbox_style.css">
    <link rel="stylesheet" type="text/css" href="css/pending_registrations_style.css">
</head>

<body>
    <?php
    $query = $con->prepare("SELECT username, name, email, balance FROM member");
    $query->execute();
    $result = $query->get_result();
    if (!$result)
        die("ERROR: Couldn't fetch members");
    $rows = mysqli_num_rows($result);
    if ($rows == 0)
        echo "<h2 align='center'>None at the moment!</h2>";
    else {
        echo "<form class='cd-form' method='POST' action='#'>";
        echo "<center><legend>Pending Membership Registration</legend></center>";
        echo "<div class='error-message' id='error-message'>
						<p id='error'></p>
					</div>";
        echo "<table width='100%' cellpadding=10 cellspacing=10>
						<tr>
						
							<th>Username<hr></th>
							<th>Name<hr></th>
							<th>Email<hr></th>
							<th>Balance<hr></th>
						</tr>";
        for ($i = 0; $i < $rows; $i++) {
            $row = mysqli_fetch_array($result);
            echo "<tr>";


            for ($j = 0; $j < 3; $j++)
                echo "<td>" . $row[$j] . "</td>";
            echo "<td>Rs." . $row[$j] . "</td>";
            echo "</tr>";
        }
        echo "</table><br /><br />";

        echo "</form>";
    }
    ?>
</body>

</html>