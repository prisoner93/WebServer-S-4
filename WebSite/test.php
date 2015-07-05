<!DOCTYPE html>
<html>
<body>

<h1>PHP pages!</h1>

<?php
$dbhost = '192.168.1.117:3306';
$dbuser = 'website';
$dbpass = 'bananapi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
mysql_select_db( 'TESTDB' );
$sql = 'select * from movie';
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "movie_id :{$row['movie_id']}  <br> ".
         "movie_name: {$row['movie_name']} <br> ".
         "movie_msg: {$row['movie_msg']} <br> ".
         "--------------------------------<br>";
} 
echo "select successfully\n";
mysql_close($conn);
?>

</body>
</html>
