<?php
include './../config.php';
function errorRespone () {
	global $respone;
	global $emptyBody;
	$respone->code = -2;
	$respone->msg = '参数错误';
	$respone->body = $emptyBody;
}

if (is_array($_POST) and count($_POST)>0) {
    if(isset($_POST["username"]) && isset($_POST["password"])) {
    	$username = $_POST["username"];
    	$password = $_POST["password"];
    	$money = 0;
    	$registerTime = date('Y-m-d H:i:s');
    	if (!empty($username) and !empty($password)) {
    		$sql = 'SELECT * FROM User WHERE BINARY username="'.$username.'"';
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    $respone->code = -1;
				$respone->msg = '用户名已存在';
				$respone->body = $emptyBody;
			} else {
				$stmt = $conn->prepare('INSERT INTO User (username, pwd, money, registerTime) VALUES (?, ?, ?, ?)');
				$stmt->bind_param('ssis', $username, $password, $money, $registerTime);
				$stmt->execute();
				$respone->body = $emptyBody;
				$respone->msg = '注册成功';
			}
    	} else {
    		errorRespone();
    	}
    } else {
    	errorRespone();
    }
} else {
	errorRespone();
}
echo json_encode($respone);
$conn->close();
?>