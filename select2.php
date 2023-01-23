<meta charset = utf-8>
<html>
<body>
<?
$hostname="localhost";
$username="root";
$password="root";
$database="company";
mysql_connect($hostname,$username,$password) or 
die("Unable to Connect database");
mysql_select_db($database) or die("Unable to select
database");
$query="SELECT * FROM employee";
$result=mysql_query($query);
?>
<table border="1" cellpacing="2" cellpadding="2">
<tr>
<th>ชื่อ</th>
<th>เบอร์โทร</th>
<th>อีเมล</th>
<th>เว็บไซ</th>
<th colspan=2>เเก้ไข</th>
<? 
while ($row=mysql_fetch_array($result))
{$id=$row[id];
$first=$row[first];
$last=$row[last];
$phone=$row[phone];
$email=$row[email];
$web=$row[web];
?>
<tr>
<td><? echo $first,"",$last;?></td>
<td><? echo $phone;?></td>
<td><a href"mailto;<? echo $email; ?>">E-mail</a></td>
<td><a href="<? echo $web; ?>">website</a></td>
<td><a href="update.php?id=<?echo $id?>">update</a></td>
<td><a href="delete.php?id=<?echo $id?>">delete</a></td>
</tr>
<?
}
mysql_close();
?>
</table>
</body>
</html>