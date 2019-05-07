<?php
	$servername = "localhost";
	$username = "root";
	$password = "qwe123";
	$dbname = 'userDB';

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);

	// 检测连接
	if ($conn->connect_error) {
	    die("连接失败: " . $conn->connect_error);
	}

	class Respone {
	    public $code = 0;
	    public $msg = 'success';
		public $body = array();
	}
	$emptyBody = (object)array();

	$respone = new Respone();
?>