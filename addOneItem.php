<?php
$request_body = file_get_contents('php://input');
$json = json_decode($request_body);

$name = $json->{'name'};
$mealArray = $json->{'mealArray'};
$dayArray = $json->{'dayArray'};
$size = $json->{'size'};

//print_r($mealArray);
//print_r($dayArray);
//print_r($name);
//print_r($size);
//die();

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

$sql = "INSERT INTO menu_items (name, up, down) VALUES ('$name', 0, 0)";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not add data: ' . mysql_error());
}

for ($x = 0; $x < $size; $x++) {
    $sql = "INSERT INTO day_meal (name, day, meal) VALUES ('$name', '$dayArray[$x]', '$mealArray[$x]')";
    mysql_select_db('mess');
    $retval = mysql_query($sql, $conn);
    if (!$retval) {
        die('Could not add data: ' . mysql_error());
    }
}
mysql_close($conn);
echo("1");
exit();