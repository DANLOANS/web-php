<meta charset = utf-8>
<?
$hostname="localhost";
$username="root";
$password="root";
$datebase="company";
$id=$_GET['id'];
mysql_connect($hostname,$username,$password) or die("Unable to connect
database");
mysql_select_db($datebase) or die("Unable to select database");
$query="DELETE FROM employee WHERE id=$id";
mysql_query($query);
echo "ลบเรอรคอร์ดเรียบร้อยเเล้ว"
?>
<a href = select2.php>กลับหน้าเเรก</a>