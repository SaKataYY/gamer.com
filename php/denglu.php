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
	echo "用户名不存在啊,赶紧注册一个!";
}
else{
	$sql = "select username,password from xx 
		where (username = '$username' and password = '$password')";
	$result = mysqli_query($conn, $sql);
	$test = mysqli_fetch_assoc($result);
	if ($test == false) {
		echo "密码错误了呢!";
	}else{
		echo "登陆成功欢迎宁!";
	}

}
?>