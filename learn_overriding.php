<?php

class Pegawai
{
    public $nama;
    public function sapa()
    {
        echo 'Halo '. $this->nama .' posisi anda saat ini adalah pegawai\n';
    }

    public function masuk()
    {
        echo 'Anda masuk kerja pada tanggal ' . date('Y-m-d');
    }
}

class KetuaJurusan extends Pegawai
{
    public function sapa()
    {
        echo 'Hei ' . $this->nama . ' anda itu kan ketua jurusan ya\n';
    }

    public function parentSapa()
    {
        return parent::sapa();
    }
}
class Mobil  
{
    public $warna;
    public function warna()
    {
        echo "Mobil anda aslinya berwarna " . $this->warna;
    }
}

class Bengkel extends Mobil
{
    public function warna()
    {
        echo "Mobil anda yang sebelumnya berwarna " . $this->warna . " telah berubah warna";
    }

    public function parentWarna()
    {
        return parent::warna();
    }
}


$budi = new KetuaJurusan();
$budi->nama = "Budi Saja";
$budi->sapa();
$budi->masuk();

$silver = new Bengkel();
$silver->warna = "Silver Gelap";
$silver->warna();
$silver->parentWarna();