<?php
if( $_GET["name"])
{
    $name = $_GET["name"];
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('Could not connect: ' . mysql_error());
    }

    $sql = "DELETE from menu_items WHERE name = '$name'";
    mysql_select_db('mess');
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not select company: ' . mysql_error());
    }
    $sql = "DELETE from day_meal WHERE name = '$name'";
    mysql_select_db('mess');
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not select company: ' . mysql_error());
    }
    echo json_encode('1');
    mysql_close($conn);
}
exit();
