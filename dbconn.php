 <?php
class dbconn
{

// Create connection
 function return_conn(){
 $servername = "148.72.232.176:3306";
// $servername = "localhost:3306";
    $username = "recomdbuser";
//    $username = "root";
    $password = "qMs5s23#";
//    $password = "root";
    $dbname="recomdb";

    $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    return null;
}
     else
     {
     return $conn;
     }
}
}
?> 
