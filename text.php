<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
	die("连接失败:".$conn -> connect_error);
}

$sql = "SELECT title, text1 FROM texts";
$result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>游客</title>
		<style type="text/css">
			#contaner {
				width: 1000px;
				
				margin: auto;
			}
			
			#header {
				height: 150px;
				
			}
			
			#gekai {
				height: 18px;
				width: 1000px;
				background-color: black;
				font-family: "微软雅黑";
				color: white;
				font-size: 14px;
				padding-top:2px;
				padding-bottom:2px;
				
			}
			
			#content {
				height: 800px;
				background-image: url(img/zhuce.PNG) ;
			}
			
			
			#left {
				width: 600px;
				
				height: 290px;
				float: left;
				color: white;
				
				
				
				
			}
			
			.li1 {
				display: inline;
				color: white;
				margin-left: 20px;
				font-family: "微软雅黑";
				float:right;
				
			}
			
			#right {
				width: 200px;
				
				float: left;
				
				color: white;
				height: 286px;
				font-size: 20px;
				
			}
		
		
		
			body {
				background-color:#696969;
			}
			
			a{
				text-decoration: none;
			}
			button{
				width: 120px;
				height: 30px;
				font-size: 20px;
			}
		</style>
	</head>

	<body>
		<div id="contaner">
			
		
			<div id="content" align="center">
				<div id="header"><br /><br />
				<ul type="none">
					<a href="index.html">
						<li class="li1">首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					</a>
					<a href="luntan.html"><li class="li1">论坛</li></a>
					<a href="text.php"><li class="li1">文章</li></a>
					<a href="denglu.html"><li class="li1">登录</li></a>
					<a href="zhuce.html"><li class="li1">注册</li></a>
					<a href="guanyuwo.html"><li class="li1">关于作者</li></a>

				</ul>
			</div>
			<div id="right" align="right">
					
					
			</div>
			
			<div id="left" align="left">
				<?php
				if ($result->num_rows > 0) {
					// 输出数据
					while($row = $result->fetch_assoc()) {
						echo "标题:  ".$row["title"]."<br>";
						echo "内容:  ".$row["text1"]."<br><br><br>";
					}
				} else {
					echo "0 结果";
				}
				?>
			</div>
			
				

			
		</div>
		
	</body>

</html>