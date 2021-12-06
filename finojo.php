<?php
$name = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

//db connection
$conn = new mysqli('localhost','root','','finojo_app');
if($conn->connect_error){
    die('connection failed..'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into finojo_db(name, email, textarea) values(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $textarea );
    $stmt->execute();
    echo "message sent successfully...";
    $stmt->close();
    $conn->close();
}

?>