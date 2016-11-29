<?php
$target_dir = 'uploads/';
$image = file_get_contents($_FILES['image']['tmp_name']);


$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$count1 = 0;
$count = array();
$sql = "SELECT * FROM empty";
mysql_select_db('mess');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not select meal: ' . mysql_error());
}

while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    $count1++;
    array_push($count, "{$row['id']}");
}
if($count1 == 0)
{
    $count1++;
    $sql = "INSERT INTO empty VALUES ('1')";
    mysql_select_db('mess');
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not add data: ' . mysql_error());
    }
}
else{
    $count1++;
    $sql = "INSERT INTO empty VALUES ('$count1')";
    mysql_select_db('mess');
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not add data: ' . mysql_error());
    }
}

$image_name = $target_dir . 'image' . $count1 . '.png';
file_put_contents($image_name, $image);
echo json_encode($image_name);



