<?php
function check_login() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
}

function redirect($url) {
    header("Location: $url");
    exit();
}
?>
