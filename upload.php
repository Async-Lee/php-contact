<?php
include './config.php';

$file = $_FILES['file'];
if ($file['error'] > 0) {
	$respone->code = -2;
	$respone->msg = '参数错误';
	$respone->body = $emptyBody;
} else {
	if (is_array($_POST) and count($_POST)>0) {
	    if(isset($_POST["id"])) {
	    	$id = $_POST["id"];
			$tmp = $file['tmp_name'];
			$name = $file['name'];
			move_uploaded_file($tmp, "uploadFile/$name");
			$site = "./uploadFile/$name";
			$sql = "UPDATE User SET headerPic='$site' WHERE id=$id";
			$result = $conn->query($sql);
			$respone->body['url'] = $site;
	    } else {
	    	$respone->code = -2;
			$respone->msg = '参数错误';
			$respone->body = $emptyBody;
	    }
	}
}


echo json_encode($respone);
$conn->close();
?>