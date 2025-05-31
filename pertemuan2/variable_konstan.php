<?php
    //mendefinisikan konstanta
    define('PHI', 3.14);
    define('DBNAME', "inventory");
    define('DBSERVER', "Localhost");

    $jari=8;
    $luas = PHI * $jari * $jari;
    $kell=2 * PHI * $jari;
    
    echo "Luas lingkaran dengan jari " .$jari." : ".$luas;
    echo "<br/>kelilingnya : " .$kell;
?>
<hr>
<?php
    echo "nama database : " .DBNAME;
    echo "<br/>lokasi database : " .DBSERVER;
?>