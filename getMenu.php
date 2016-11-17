<?php 
	
	$dbhost = 'localhost:3306';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	$bfast = array();
	$lunch = array();
	$eveng = array();
	$diner = array();

	$week_day = date("l");

	$data_array = array();
    $sql = "SELECT * FROM day_meal WHERE day = '$week_day' ";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not select meal: ' . mysql_error());
	}

	$count = 0;
	$name = array();
	$meal = array();
	
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
    	$count = $count + 1;
        array_push($name, "{$row['name']}");
		array_push($meal, "{$row['meal']}");
    }
    
    for($x=0; $x<$count; $x++)
    {
    	if($meal[$x] == "breakfast")
    	{
    		$up = 0;
    		$down = 0;
    		$sql = "SELECT * FROM menu_items WHERE name = '$name[$x]' ";
    		mysql_select_db('mess');
			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			  die('Could not select meal: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		    {
		    	$up = "{$row['up']}";
		    	$down = "{$row['down']}";
		    }
		    array_push($bfast, ['name'=>$name[$x], 'up'=>$up, 'down'=>$down]);
    	}
    	else if($meal[$x] == "lunch")
    	{
    		$up = 0;
    		$down = 0;
    		$sql = "SELECT * FROM menu_items WHERE name = '$name[$x]' ";
    		mysql_select_db('mess');
			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			  die('Could not select meal: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		    {
		    	$up = "{$row['up']}";
		    	$down = "{$row['down']}";
		    }
		    array_push($lunch, ['name'=>$name[$x], 'up'=>$up, 'down'=>$down]);
    	}
    	else if($meal[$x] == "snacks")
    	{
    		$up = 0;
    		$down = 0;
    		$sql = "SELECT * FROM menu_items WHERE name = '$name[$x]' ";
    		mysql_select_db('mess');
			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			  die('Could not select meal: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		    {
		    	$up = "{$row['up']}";
		    	$down = "{$row['down']}";
		    }
		    array_push($eveng, ['name'=>$name[$x], 'up'=>$up, 'down'=>$down]);
    	}
    	elseif($meal[$x] == "dinner")
    	{
    		$up = 0;
    		$down = 0;
    		$sql = "SELECT * FROM menu_items WHERE name = '$name[$x]' ";
    		mysql_select_db('mess');
			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			  die('Could not select meal: ' . mysql_error());
			}
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		    {
		    	$up = "{$row['up']}";
		    	$down = "{$row['down']}";
		    }
		    array_push($diner, ['name'=>$name[$x], 'up'=>$up, 'down'=>$down]);
    	}
    }
    $index = 0;
    $s = array();
    $e = array();
    //read from time table and do it
    $sql = "SELECT * FROM time";
	mysql_select_db('mess');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not select meal: ' . mysql_error());
	}
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
    	array_push($s, "{$row['start_time']}");
    	array_push($e, "{$row['end_time']}");
    }
    $current_time = date("His");
    if($current_time <= $e[0])
    {
    	$index = 0;
    }
    else if($current_time > $e[0] && $current_time <= $e[1])
    {
    	$index = 1;
    }
    else if($current_time > $e[1] && $current_time <= $e[2])
    {
    	$index = 2;
    }
    else
    {
    	$index = 3;
    }

    $res = array();
    array_push($res, ['index' => $index, 'breakfast' => $bfast, 'lunch' => $lunch, "snacks" => $eveng, "dinner" => $diner ]);
	echo json_encode($res);
	mysql_close($conn);
  	exit();
?>