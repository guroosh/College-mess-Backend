<?php
   
    $request_body = file_get_contents('php://input');
    $json = json_decode($request_body);
    $name1 = $json->{'name'};
    $age1 = $json->{'age'};
      
    $data = [ 'name' => $name1, 'age' => $age1 +1 ];
    echo json_encode($data);

    // echo "Welcome ". $name1. "\n";
    // echo "You are ". $age1. " years old";
      
    exit();
   
?>