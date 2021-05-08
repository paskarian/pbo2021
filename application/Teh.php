<?php

namespace App;

class Teh implements Minuman
{
    public function minum()
    {
        echo "mari ngeteh mari bicara";
    }

    public function buat()
    {
        echo "masukkan kantong teh, kemudian air panas, masukkan gula 2,5 sendok teh, dan aduk";
    }

    public function tambahEsBatu()
    {
        echo "tambahkan es batu agar lebih segar";
    }
}