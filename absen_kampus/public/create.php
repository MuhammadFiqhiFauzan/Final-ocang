<?php
include('../config/config.php');
check_login();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $sql = "INSERT INTO absensi (nama, tanggal, status) VALUES ('$nama', '$tanggal', '$status')";

    if ($conn->query($sql) === TRUE) {
        redirect('index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php include('../includes/header.php'); ?>
<h2>Tambah Absensi</h2>
<form method="POST" action="">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br>
    <label for="tanggal">Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" required><br>
    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="Hadir">Hadir</option>
        <option value="Tidak Hadir">Tidak Hadir</option>
    </select><br>
    <input type="submit" value="Tambah">
</form>
<?php include('../includes/footer.php'); ?>
