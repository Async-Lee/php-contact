<?php
include './../config.php';

if (is_array($_GET) and count($_GET)>0) {
    if(isset($_GET["id"])) {
    	$id = $_GET["id"];
		$sql = 'SELECT * FROM User WHERE id='.$id;
		$result = $conn->query($sql);
		if ($result and $result->num_rows > 0) {
		    $row = $result->fetch_assoc();
		    $respone->body = $row;
		} else {
		    $respone->code = -1;
			$respone->msg = '用户不存在';
			$respone->body = $emptyBody;
		}
    } else {
    	$respone->code = -2;
		$respone->msg = '参数错误';
		$respone->body = $emptyBody;
    }
}
echo json_encode($respone);
$conn->close();
?>