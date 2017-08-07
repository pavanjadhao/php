  <?php

try {
    $pdo = new PDO('mysql:host=localhost','root','');
    //Setting PDO error mode to exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die('Could not connect.' . $e -> getMessage());
}

//creating database using mysql query with utf8 encoding
try {
    $sql = "CREATE DATABASE practice CHARACTER SET utf8 COLLATE utf8_general_ci";
    $pdo -> exec($sql);
    echo 'Database created successfully.';
}catch(PODException $e) {
    die('Error : could no execute $sql' . $e -> getMessage());
} 

//closing connection to the database
unset($pdo);