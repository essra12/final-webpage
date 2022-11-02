<?php


$database['host'] = '';
 
$database['username'] = 'root';

$database['userpass'] = '';

$database['name'] = 'file_sharin';

// Create connection

$link = mysqli_connect ($database['host'],$database['username'],$database['userpass'],$database['name'])or die(mysqli_connect_error());
// Check connection
if(!$link){
		    echo 'Cannot login';
		}else{
		    echo ' Sucssucefull ^-^ ';
		}
		

?>

