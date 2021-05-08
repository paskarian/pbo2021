<?php

namespace App;

class Kopi implements Minuman
{
    public function buat()
    {
        echo "masak air panas hingga 100 derajat celsius";
        echo "masukkan kopi kedalam gelas dan tuangkan air panas";
        echo "aduk sebanyak 60x putaran";
        echo "diamkan selama 15 menit";
        echo "tambahkan gula aren";
    }

    public function minum()
    {
        echo "diseruput sedikit demi sedikit";
    }

    public function tambahSusu()
    {
        echo "tambahkan susu ke dalam kopi";
    }
}
