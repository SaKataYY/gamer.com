<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("链接失败了:".$conn->connect_error);
}
$username = $_POST['user'];
$password = $_POST['password'];

$sql = "select username from xx 
		where (username = '$username' )";
$result = mysqli_query($conn, $sql);
$test = mysqli_fetch_assoc($result);
if ($test == false) {
	$sql = "INSERT INTO xx(username, password)
		VALUES('$username', '$password')";
		if ($conn->query($sql)===TRUE) {
			echo "注册成功数据已经注入!";
			}else{
				echo "错误".$sql."<br>".$conn->error;
			}
}else{
	echo "用户名已经存在了,你太慢了让别人注册了!";
}

?>