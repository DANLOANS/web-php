<meta charset="utf-8">
<?
$hostname="localhost";
$username="root";
$password="root";
$database="company";
$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$web=$_POST['web'];
mysql_connect($hostname,$username,$password) or die("Unable to connect 
database");
mysql_select_db($database) or die("Unable to connect database");
mysql_query('SET NAMES UTF8');
$query ="INSERT INTO employee VALUES ('','$first','$last','$phone','$email','$web')";
mysql_query($query);
mysql_close();
echo"เพิ่มข้อมูลเรียบร้อยเเล้ว";
?>