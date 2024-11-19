<?php
$host = 'Localhost';
$user = 'root';
$pass = '';
$db = 'testdb';

try{
    $pdo = new PDO (dsn: "mysql:host=$host; dbname=$db", username: $user, password: $pass);
    //$sql = "CREATE TABLE users (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //username VARCHAR(30)NOT NULL,
    //password VARCHAR (30)";
    //$pdo -> exec (statement: $sql);
    //echo "Table created successfully";
    //Set the values to be insterted 
    $username = "Jack";
    $password = password_hash(passowrd : "mypassword", algo: PASSOWRD_DEFAULT);
    //insertv statemetn for SQL
    $sql="INSERT INTO users(username, password) VALUES ('$username', password)"
    $pdo -> exec (statement: $sql);
    echo "New record created successfully"
}catch(Exepction $e){
    //echo "Error creating table : ".$e->getMessage();
    echo $e -> getMessage();
}
?>