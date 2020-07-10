<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";

$ashvin = "localhost";
$name = "root";
$password = "";

// Create a connection
$connection = mysqli_connect($ashvin, $name, $password);

// Die if connection was not successful
if (!$connection){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

?>
