<?php


$host='localhost';
$username='root';
$password='';
$dbname='test';

if(!mysql_connect($host, $username, $password))
{
exit('Error: could not establish database connection');
}
if(!mysql_select_db($dbname))
{
exit('Error: could not select the database');
}

?>

