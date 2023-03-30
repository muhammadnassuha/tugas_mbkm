<?php
class Pegawai {
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    public $gaji_pokok;
    public $setTunjab;
    public $setTunkel;
    public $setZakatProfesi;
    public $gaji_kotor;
    public $gaji_bersih;

    public function __construct($nip, $nama, $jabatan, $agama, $status, $gaji_pokok) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        $this->gaji_pokok = $gaji_pokok;
    }

    public function hitungSetTunjab() {
        $this->setTunjab = 0.2 * $this->gaji_pokok;
    }

    public function hitungSetTunkel() {
        $this->setTunkel = ($this->status == "menikah") ? (0.1 * $this->gaji_pokok) : 0;
    }

    public function hitungSetZakatProfesi() {
        $this->setZakatProfesi = ($this->agama == "Islam" && $this->gaji_kotor >= 6000000) ? (0.025 * $this->gaji_pokok) : 0;
    }

    public function hitungGajiKotor() {
        $this->gaji_kotor = $this->gaji_pokok + $this->setTunjab + $this->setTunkel;
    }

    public function hitungGajiBersih() {
        $this->gaji_bersih = $this->gaji_kotor - $this->setZakatProfesi;
    }

    public function cetakGaji() {
        echo "NIP: " . $this->nip . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jabatan: " . $this->jabatan . "<br>";
        echo "Agama: " . $this->agama . "<br>";
        echo "Status: " . $this->status . "<br>";
        echo "Gaji Pokok: " . $this->gaji_pokok . "<br>";
        echo "Tunjangan Jabatan: " . $this->setTunjab . "<br>";
        echo "Tunjangan Keluarga: " . $this->setTunkel . "<br>";
        echo "Zakat Profesi: " . $this->setZakatProfesi . "<br>";
        echo "Gaji Kotor: " . $this->gaji_kotor . "<br>";
        echo "Gaji Bersih: " . $this->gaji_bersih . "<br><br>";
    }
}
// Membuat objek-objek pegawai
$pegawai1 = new Pegawai("001", "Ali", "Manajer", "Islam", "menikah", 10000000);
$pegawai2 = new Pegawai("002", "Budi", "Supervisor", "Kristen", "belum menikah", 8000000);
$pegawai3 = new Pegawai("003", "Cici", "Staff", "Islam", "menikah", 7000000);
$pegawai4 = new Pegawai("004", "Dodi", "Staff", "Buddha", "belum menikah", 6000000);
$pegawai5 = new Pegawai("005", "Eka", "Staff", "Hindu", "menikah", 5000000);

// Menghitung dan mencetak struktur gaji masing-masing pegawai
$pegawai1->hitungSetTunjab();
$pegawai1->hitungSetTunkel();
$pegawai1->hitungGajiKotor();
$pegawai1->hitungSetZakatProfesi();
$pegawai1->hitungGajiBersih();
$pegawai1->cetakGaji();

$pegawai2->hitungSetTunjab();
$pegawai2->hitungSetTunkel();
$pegawai2->hitungGajiKotor();
$pegawai2->hitungSetZakatProfesi();
$pegawai2->hitungGajiBersih();
$pegawai2->cetakGaji();

$pegawai3->hitungSetTunjab();
$pegawai3->hitungSetTunkel();
$pegawai3->hitungGajiKotor();
$pegawai3->hitungSetZakatProfesi();
$pegawai3->hitungGajiBersih();
$pegawai3->cetakGaji();

$pegawai4->hitungSetTunjab();
$pegawai4->hitungSetTunkel();
$pegawai4->hitungGajiKotor();
$pegawai4->hitungSetZakatProfesi();
$pegawai4->hitungGajiBersih();
$pegawai4->cetakGaji();

$pegawai5->hitungSetTunjab();
$pegawai5->hitungSetTunkel();
$pegawai5->hitungGajiKotor();
$pegawai5->hitungSetZakatProfesi();
$pegawai5->hitungGajiBersih();
$pegawai5->cetakGaji();





?>