<?php
require "../db_connect.php";
require "../message_display.php";
require "verify_librarian.php";
require "header_librarian.php";
?>

<html>

<head>
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="../member/css/home_style.css" />
    <link rel="stylesheet" type="text/css" href="../css/global_styles.css">
    <link rel="stylesheet" type="text/css" href="../css/home_style.css">
    <link rel="stylesheet" type="text/css" href="../member/css/custom_radio_button_style.css">
</head>

<body>

    <?php
    $query = $con->prepare("SELECT req_id,username,time FROM forgot_pswrd_request ");
    $query->execute();
    $result = $query->get_result();
    if (!$result)
        die("ERROR: Couldn't fetch books");
    $rows = mysqli_num_rows($result);
    if ($rows == 0)
        echo "<h2 align='center'>No books available</h2>";
    else {
        echo "<form class='cd-form'>";
        echo "<div class='error-message' id='error-message'>
						<p id='error'></p>
					</div>";
        echo "<table width='100%' cellpadding=10 cellspacing=10>";
        echo "<tr>
                        <th>Request ID</th>
						<th>Name<hr></th>
						<th>Time Title<hr></th>
						<th>Action<hr></th>
					
					</tr>";
        for ($i = 0; $i < $rows; $i++) {
            $row = mysqli_fetch_array($result);
            echo "<tr>";
            for ($j = 0; $j < 3; $j++)


                echo "<td>" . $row[$j] . "</td>";
            echo "<td><div class='text-center'><a href='dlt_ps_req.php?id=" . $row['req_id'] .
                "' style='color:#F66; text-decoration:none;'>Change Password to default</a></div></td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "</form>";
    }


    ?>

</body>

</html>