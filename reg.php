<!doctype html>
<?php
static $author = "Yoodi";
static $version = "1.0"
?>
<!--
	Author:<?php echo $author."\n"?>
	Version:<?php echo $version."\n"?>
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>注册</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div>
		<div align="center">
			<form action="regprocess.php" method="post">
				<h1 style="font-size: 36px">注册</h1>
				<p><input name="username" type="text" class="text" id="userName" placeholder="用户名">
				</p>
				<p><input name="password" type="text" class="text" id="userPassword" placeholder="密码">
				</p>
				<p><input name="email" type="text" class="text" id="userPassword2" placeholder="邮箱">
				</p>
				<p><input name="button" type="submit" class="button" id="button2" value="提交">
				</p>
			</form>
		</div>
	</div>
</body>
</html>