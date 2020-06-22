<?php
 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=146.148.2.232;dbname=egamingdata;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        'Qwertyuiop7*', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
	
    $handle = $link->prepare('SELECT team,fd FROM lec'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);


    foreach($result as $row){
        array_push($dataPoints, array("y"=>substr($row->fd, 0, -1), "label"=> $row->team));
    }
	$link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
	
?>