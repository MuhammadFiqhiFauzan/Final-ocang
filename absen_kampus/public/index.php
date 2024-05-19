<?php
include('../config/config.php');
check_login();

$result = $conn->query("SELECT * FROM absensi");

include('../includes/header.php');
?>

<h2>Daftar Absensi</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<?php include('../includes/footer.php'); ?>
