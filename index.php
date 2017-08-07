  <?php
//procedural way of connecting to the database server
$link = mysqli_connect('localhost','root','');

//cheking for connection
if($link == false) {
    die("Error : could not connect." . mysqli_connect_errno());
}

//printing host information
echo "Connect Successfull. Host info : " . mysqli_get_host_info($link);
//closing database connection
mysqli_close($link);

//Object oriented way of connecting to database
$mysqli = new mysqli('localhost','root',"","practice");

//checking for connection
if($mysqli === false){
    die("Error : Could not connect." . $mysqli -> connect_error);
}

//printing host information
echo "Connect Successfully." . $mysqli -> host_info;
//closing databse connection
$mysqli -> close();  


//another way of connecting to database is PDO(PHP Data Object)
try {
    $pdo = new PDO('mysql:host=localhost','root','');

    //Setting PDO error mode to exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //print host information
    echo 'Connect Successfully. Host info : ' . $pdo -> getAttribute(constant('PDO::ATTR_CONNECTION_STATUS'));
}catch(PDOException $e) {
    die('Could not connect.' . $e -> getMessage());
}

//closing connection to the database
unset($pdo);