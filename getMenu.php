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
    // $res = ['data'=>$data_array];
    $res = $data_array;
	echo json_encode($res);
	mysql_close($conn);
  	exit();
?>