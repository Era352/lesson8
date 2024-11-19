<?
//Connect to the database
try{
$pdo = new PDO(dsn:"mysql.host=localhost; dbname=new_db", username: "root", passowrd:"");
$sql = "DROP TABLE users";
$pdo -> exec(statement: $sql);
echo "Table dropped sucesfully";
}catch(PDOexception $e){
    echo $e->getMessage();
}
?>