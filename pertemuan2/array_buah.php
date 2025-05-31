<?php
    $ar_buah=["pepaya", "mangga", "apel", "pisang", "kedelai"];  

    //menampilkan jumlah index 1
    echo $ar_buah[1];

    //menampilakn jumlah buah
    echo "<br>jumlah buah " . count($ar_buah);

    // menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>" .$buah. "</li>";
    } echo "</ol>";

    //menghapus buah ke 2 menjadi manggis-
    unset($ar_buah[1]);

    //mengubah index ke 2 menjadi manggis
    $ar_buah[2] = "manggis";

    //menampilkan seluruh buah dengan indexnya
    echo "<ul>";
    sort ($ar_buah);
    foreach ($ar_buah as $buah => $v) {
        echo "<li>buah index : " .$buah. " adalah " .$v. "</li>";
    }
    echo "</    >";
?>