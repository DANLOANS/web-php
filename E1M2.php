<meta charset = utf-8>
<?
$hostname="localhost";
$username="root";
$password="root";
$database="company";
mysql_connect($hostname,$username,$password) or die("Unable to connect database");
mysql_select_db($database) or die("Unable to select database");
$query="SELECT * FROM employee";
$result=mysql_query($query);
echo "<b><center>Database Output</center></b><br><br>";
while ($row=mysql_fetch_array($result))
{ $first=$row[first];
$last=$row[last]; 
$phone= $row[phone]; 
$email=$row[email];
$web= $row[web];
echo "<b>$first $last</b><br>";
echo "Phone: $phone<br>";
echo "E-mail: $email<br>";
echo "Web: $web<br>";
echo "<hr><br>";
}
mysql_close();
?>