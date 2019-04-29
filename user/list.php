<?php
include './../config.php';

//查询数据
$where = '';

if (is_array($_GET) && count($_GET)>0) {
	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		$where = $where.' WHERE id='.$id;
	}
	if(isset($_GET["sort"])) {
		$sort = $_GET["sort"];
		$where = $where.' ORDER BY money '.$sort;
	}
}

$sql = 'SELECT * FROM User'.$where;
$result = $conn->query($sql);
if ($result and $result->num_rows > 0) {
    $arr = array();
    while ($row = $result->fetch_assoc()) {
    	array_push($respone->body, $row);
    }
} else {
	$respone->msg = '无数据';
}
echo json_encode($respone);
$conn->close();
?>