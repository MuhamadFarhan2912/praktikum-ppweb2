<?php
class mahasiswa {
    public $nama;
    public $nim;
    public $semester;

    public function __construct() {
        echo 'mahasiswa baru telah dibuat! <br/>';
    }
     public function sayang($nama) {
         echo $nama . ' sayang! <br/>';

    }
}

$siti = new mahasiswa();
$siti->nama ='siti munaroh';

$tono = new mahasiswa();
$tono->nama ='tono martono';

echo $siti->nama. '<br/>';
echo $tono->nama. '<br/>';

    

?>
