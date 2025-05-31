<?php

class hewan {
    public $nama;
    public $spesies;
    public $habitat;

}

class mamalia extends hewan {
    public $melahirkan;8
    public $berbulu;
}

class reptil extends hewan {
    public $bertelur;
    public $berdarahdingin;
}

$kucing = new mamalia();
$kucing->nama = "Kucing";
echo $kucing->nama . "\n";

?>