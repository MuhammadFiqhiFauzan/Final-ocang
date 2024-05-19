<?php
include('../config/config.php');
check_login();

$id = $_GET['id'];
$sql = "DELETE FROM absensi WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    redirect('index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
