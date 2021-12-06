<?php
$semail = $_POST['semail'];

//db connection
$conn2 = new mysqli('localhost','root','','finojo_app2');
if($conn2->connect_error){
    die('connection failed..'.$conn2->connect_error);
}
else{
    $stmt = $conn2->prepare("insert into finojo_db2(semail) values(?)");
    $stmt->bind_param("s", $semail);
    $stmt->execute();
    echo "message sent successfully...";
    $stmt->close();
    $conn2->close();
}
?>