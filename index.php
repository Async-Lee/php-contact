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

// 创建数据库
// $sql = "CREATE DATABASE userDB";
// if ($conn -> query($sql) === true) {
// 	echo 'create success!';
// } else {
// 	echo 'create fial!'.$conn->error;
// }

// 创建数据表
// $sql = 'CREATE TABLE User(
// 	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 	username VARCHAR(20) NOT NULL,
// 	pwd VARCHAR(15) NOT NULL
// )';
// if ($conn -> query($sql) === true) {
// 	echo 'create success!';
// } else {
// 	echo 'create fail!'.$conn->error;
// }

// 插入数据
// $sql = 'INSERT INTO User (id, username, pwd)
// 		VALUES (0, "Lee", "qwe123")';
// if ($conn->query($sql) === true) {
// 	echo 'insert success!';
// } else {
// 	echo 'insert fail!'.$conn->error;
// }

//查询数据
// $id = '333';
// $sql = 'SELECT * FROM User WHERE id='.$id;
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // 输出数据
//     // 每次fetch_assoc($result)被访问，则指针移动到下一记录。最后无记录被找到，它就会返回。null，这就破坏了while条件。
//     $row = $result->fetch_assoc();
//     echo json_encode($row);
//     // while($row = $result->fetch_assoc()) {
//     //     echo $row['id'].' '.$row['username'].' '.$row['pwd'].'<br/>';
//     // }
// } else {
//     echo '{}';
// }


// $sql = "ALTER TABLE User change username username VARCHAR(20) NOT NULL";
// if ($conn->query($sql)) {
// 	echo 'change success!';
// } else {
// 	echo 'change fail!'.$conn->error;
// }

// $stmt = $conn->prepare('INSERT INTO User (id, username, pwd) VALUES (?, ?, ?)');
// $stmt->bind_param('iss', $id, $username, $pwd);

// $id = 333;
// $username = 'test';
// $pwd = '123';

// $stmt->execute();
// $stmt->close();

//关联数据表
// $sql = 'SELECT a.id, a.username, b.age, b.sex FROM user a inner join userinfo b on a.id < b.id';
// $sql = 'SELECT a.id, a.username, b.age, b.sex FROM user a, userinfo b where a.id = b.id';
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo $row['id'].' '.$row['username'].' '.$row['sex'].' '.$row['age'].'<br/>';
//     }
// } else {
//     echo '{}';
// }

$conn->close();
?>
