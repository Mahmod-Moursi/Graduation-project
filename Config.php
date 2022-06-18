<?php

$db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
$db_name='4072248_db'; //Should contain the "Database Name" value
$db_user='4072248_db'; //Should contain the "Database User" value
$db_pass='123456789db'; //Should contain the "Database Password" value

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
/*
if ($conn->connect_error) {
echo "Could not connect to $db_user, error: " . $conn->connect_error;
} else {
echo "Connected to $db_user! <hr> The database contains the following tables: <br />";
}

$showtablequery = "SHOW TABLES FROM $db_user";
$showtablequery_result = mysqli_query($conn, $showtablequery);

while($showtablerow = mysqli_fetch_array($showtablequery_result))
{
echo $showtablerow[0]."<br />";
}

$conn->close();
echo "<hr> conn closed!";*/
?>