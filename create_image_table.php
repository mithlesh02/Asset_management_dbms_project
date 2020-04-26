<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




 $sql2 = "CREATE TABLE IF NOT EXISTS tbl_images (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` blob NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;  


if ($conn->query($sql2) === TRUE) {
    echo "Table Answer created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    echo $conn->errno;
}
$conn->close();
?>