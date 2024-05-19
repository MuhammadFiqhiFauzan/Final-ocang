<?php
include('../config/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Untuk demo, username dan password hardcoded
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['user_id'] = 1;
        redirect('index.php');
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<?php include('../includes/header.php'); ?>
<form method="POST" action="">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
<?php include('../includes/footer.php'); ?>
