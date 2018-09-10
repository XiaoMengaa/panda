<?php
	
	//获取请求的参数
	$username = $_POST['username'];

	//数据库检测
	$pdo = new PDO('mysql:host=10.15.118.16;dbname=baiduzhidao;charset=utf8','root','123');

	$stmt = $pdo -> prepare('select * from users where username =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '1';
	}else{
		echo '0';
	}