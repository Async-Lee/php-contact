<?php
include './../config.php';

if (is_array($_POST) and count($_POST)>0) {
    if(isset($_POST["id"])) {
    	$id = $_POST["id"];
		$sql = 'DELETE FROM User WHERE id='.$id;
		$result = $conn->query($sql);
		$respone->msg = '删除成功';
    } else {
    	$respone->code = -2;
		$respone->msg = '参数错误';
		$respone->body = $emptyBody;
    }
}
echo json_encode($respone);
$conn->close();
?>