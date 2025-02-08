<?php 
 
	/*return [
        'host' => 'MySQL-8.2',
        'dbname' => 'onlineshop',
        'username' => 'root',
        'password'=> '',
        'charset' => 'utf8', //utf8mb4
        'options' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    ];*/

    $hostname="MySQL-8.2"; 
	$username="root"; 
	$password=""; 
	$db="onlineshop"; 
	 
	// connect to mysql 
	
	$mysqli = mysqli_connect($hostname, $username, $password) or die("Sorry, can't connect to the mysql."); 
    
    // connect to db

    mysqli_select_db($mysqli, $db) or die("Sorry, can't select DataBase");
    
?>