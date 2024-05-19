<?php
include('../config/config.php');
check_login();

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $sql = "UPDATE absensi SET nama='$nama', tanggal='$tanggal', status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        redirect('index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $result = $conn->query("SELECT * FROM absensi WHERE id=$id");
    $row = $result->fetch_assoc();
}
?>

<?php include('../includes/header.php'); ?>
<h2>Edit Absensi</h2>
<form method="POST" action="">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>
    <label for="tanggal">Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>" required><br>
    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="Hadir" <?php if ($row['status'] == 'Hadir') echo 'selected'; ?>>Hadir</option>
        <option value="Tidak Hadir" <?php if ($row['status'] == 'Tidak Hadir') echo 'selected'; ?>>Tidak Hadir</option>
    </select><br>
    <input type="submit" value="Update">
</form>
<?php include('../includes/footer.php'); ?>
