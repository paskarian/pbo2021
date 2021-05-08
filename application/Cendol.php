<?php
namespace App;

use App\Minuman;

class Cendol implements Minuman
{
    public function buat()
    {
        echo "Tambahkan cendol, masukkan santan dan air gula merah cair <br>";
        echo "Tambahkan es batu";
    }

    public function minum()
    {
        echo "disedot dengan pipet/sedotan/selang";
    }

    public function diberikanPadaTeman()
    {
        echo "ini untuk mu. tenang saja tidak ada sianida";
    }
}