<?php
if (!isset($_POST['nama'])){
    echo ' <script>alert("anda harus mengisi form terlebih dahulu!")</script>
<meta http-equiv="refresh" content="0; url=form_nilai.php">';
}
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body >
    <div class="container mt-4">
    <div class="card">
    <div class="card-header bg-primary text-white text-center"> Hasil Nilai Mahasiswa</div>
    <div class="card-body">
    <table class="table table-bordered container">
        <tr class="">
            <td>Nama</td>
            <td>:</td>
            <td><?= $_POST['nama']?></td>
        </tr>
        
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $_POST['nim']?></td>
        </tr>
        
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= $_POST['rombel']?></td>
        </tr>
        
        <tr>
            <td>Matkul</td>
            <td>:</td>
            <td><?= $_POST['matkul']?></td>
        </tr>
        
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= $_POST['tugas']?></td>
        </tr>

        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= $_POST['uts']?></td>
        </tr>
        
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= $_POST['uas']?></td>
        </tr>
        
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas=$_POST['tugas'] * (35/100);
                $uts=$_POST['uts'] * (30/100);
                $uas=$_POST['uas'] * (35/100);
                $total= $tugas + $uts + $uas;

                if ($total <= 35) {
                    $pred ="E";
                } elseif ($total <= 55) {
                    $pred ="D";
                } elseif ($total <= 69) {
                    $pred ="C";
                } elseif ($total <= 84) {
                    $pred ="B";
                } elseif ($total <= 100) {
                    $pred ="A";
                } else {
                    $pred ="Tidak Diketahui";
                }
                echo $pred; 
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred) {
                    
                    case 'A':
                        echo "sangat baik";
                        break;
                    case 'B':
                        echo "baik";
                    case 'C':
                        echo "cukup";
                    case 'D':
                        echo "dungu";
                    case 'E':
                        echo "burik";
                    default:
                    echo "TIDAK DIKETAHUI";
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
 </div>
 </div>
 </div>
</body>
</html>