<?php

namespace App;

/**
 * Trait untuk mengecek nama
 */
trait ApaKabar
{
    public function paKabs($name)
    {
        if (is_null($name)) {
            echo "Bagaimana kabar, mu?";
        } else {
            echo "Gimana kabarnya, ".$name."?<br>";
        }
    }
}
