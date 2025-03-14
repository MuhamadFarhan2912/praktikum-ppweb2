<?php
    require_once ('bukuTamu.php');
    session_start ();           

    // Inisialisasi session hanya jika belum ada
    if (!isset($_SESSION['bukuTamu'])) {
        $_SESSION['bukuTamu'] = [];
    }

    if (isset($_POST['submit'])) {
        $bukuTamu = new bukuTamu();
        $bukuTamu->timestamp = date('Y-m-d H:i:s');
        $bukuTamu->fullname = $_POST['fullname'];
        $bukuTamu->email = $_POST['email'];
        $bukuTamu->messege = $_POST['messege']; 

        array_push($_SESSION['bukuTamu'], $bukuTamu);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <div class="container">
        <h4>Daftar Kunjungan</h4>
        <table>
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_SESSION['bukuTamu']) && !empty($_SESSION['bukuTamu'])): ?>
                    <?php foreach ($_SESSION['bukuTamu'] as $buku): ?>
                        <tr>
                            <td><?= htmlspecialchars($buku->timestamp) ?></td>
                            <td><?= htmlspecialchars($buku->fullname) ?></td>
                            <td><?= htmlspecialchars($buku->email) ?></td>
                            <td><?= htmlspecialchars($buku->message) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">Belum ada data kunjungan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
