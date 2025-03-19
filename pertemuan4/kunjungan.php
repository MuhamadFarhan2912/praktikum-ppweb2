<?php
    require_once ('bukuTamu.php');
    session_start();

    if (!isset($_SESSION['bukuTamu'])) {
        $_SESSION['bukuTamu'] = [];
    }

    if (isset($_POST['submit'])) {
        $bukuTamu = new bukuTamu();
        $bukuTamu->timestamp = date('Y-m-d H:i:s');
        $bukuTamu->fullname = $_POST['fullname'];
        $bukuTamu->email = $_POST['email'];
        $bukuTamu->message = $_POST['messege']; 
        array_push($_SESSION['bukuTamu'], $bukuTamu);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Kunjungan</h2>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Timestamp</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($_SESSION['bukuTamu'])): ?>
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
                                <td colspan="4" class="text-center">Belum ada data kunjungan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>