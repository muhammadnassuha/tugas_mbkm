<?php

abstract class Bentuk2D {
    
    abstract function luasBidang();
    
    abstract function kelilingBidang();
    
}

class Lingkaran extends Bentuk2D {
    
    public $jari_jari;
    
    function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }
    
    function namaBidang() {
        return "Lingkaran";
    }
    
    function luasBidang() {
        return 3.14 * $this->jari_jari ** 2;
    }
    
    function kelilingBidang() {
        return 2 * 3.14 * $this->jari_jari;
    }
}

class PersegiPanjang extends Bentuk2D {
    
    public $panjang;
    public $lebar;
    
    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    function namaBidang() {
        return "Persegi Panjang";
    }
    
    function luasBidang() {
        return $this->panjang * $this->lebar;
    }
    
    function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

class Segitiga extends Bentuk2D {
    
    public $alas;
    public $tinggi;
    
    function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    
    function namaBidang() {
        return "Segitiga";
    }
    
    function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    
    function kelilingBidang() {
        return $this->alas + 2 * sqrt($this->tinggi ** 2 + ($this->alas/2) ** 2);
    }
}

$lingkaran = new Lingkaran(7);
$persegi_panjang = new PersegiPanjang(5, 9);
$segitiga = new Segitiga(10, 6);

echo "<table border='1'>";
echo "<tr>
        <th>Bidang</th>
        <th>Luas</th>
        <th>Keliling</th>
    </tr>";

echo "<tr style='text-align: center;'>";
echo "<td>".$lingkaran->namaBidang()."</td>";
echo "<td>".$lingkaran->luasBidang()."</td>";
echo "<td>".$lingkaran->kelilingBidang()."</td>";
echo "</tr>";

echo "<tr style='text-align: center;'>";
echo "<td>".$persegi_panjang->namaBidang()."</td>";
echo "<td>".$persegi_panjang->luasBidang()."</td>";
echo "<td>".$persegi_panjang->kelilingBidang()."</td>";
echo "</tr>";

echo "<tr style='text-align: center;'>";
echo "<td>".$segitiga->namaBidang()."</td>";
echo "<td>".$segitiga->luasBidang()."</td>";
echo "<td>".$segitiga->kelilingBidang()."</td>";
echo "</tr>";

echo "</table>";

?>