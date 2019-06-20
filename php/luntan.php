<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("链接失败了:".$conn->connect_error);
}
$title = $_POST['title'];
$text = $_POST['text'];

$sql = "INSERT INTO texts(title, text1)
	VALUES('$title', '$text')";
	if ($conn->query($sql)===TRUE) {
		echo "文章上传成功";
		}else{
			echo "错误".$sql."<br>".$conn->error;
		}
?>