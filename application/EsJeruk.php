<?php

namespace App;

class EsJeruk implements Minuman
{
    public function minum()
    {
        echo "minumlah";
    }

    public function buat()
    {
        echo "masukkan blender";
    }

    public static function dilihat()
    {
        echo "cuma boleh dilihat tak boleh diminum";
    }
    
}