<?php
//här har jag lite phpkod
$server = 'localhost';
$user = 'root';  //---- Denna på din dator   
$password = '';
//$user = 'ntigskov_go2'; // --- denna på servern
//$password = 'asjodql243412%234';
$database = 'ntigskov_go2';

$connect = new mysqli($server,$username,$password,$database);



$sql = "SELECT * FROM whatever;";
echo "trams!;";
$result = $connect->query($sql);



?>

