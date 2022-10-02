<?php
   
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
echo "Connection Failed";

$db='bloodbank';
$db_conn = mysqli_select_db($conn,$db);

if(!$db_conn)
echo "Database selection failed";

?>