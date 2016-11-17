	<?php
   
    $request_body = file_get_contents('php://input');
    $json = json_decode($request_body);
    
    $userId = $json->{'userId'};
    $text = $json->{'text'};
    $imageURL = $json->{'imageURL'};
    $userImageURL = $json->{'userImageURL'};
    $date = $json->{'date'};

    $dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}

    $sql = "INSERT INTO posts (userId, text, imageURL, userImageURL, upVotes, date) VALUES ('$userId', '$text', '$imageURL', '$userImageURL', 0, '$date')";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not add data: ' . mysql_error());
	}
	mysql_close($conn);
    echo("1");  
    exit();
   
?>