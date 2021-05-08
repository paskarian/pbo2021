<?php

use App\Cendol;
use App\EsJeruk;
use App\Kopi;
use App\Teh;

require_once('vendor/autoload.php');

$cendol_dian = new Cendol();
$cendol_dian->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();
$kopi_asiang->minum();

EsJeruk::dilihat();

$teh_sisri = new Teh();
$teh_sisri->minum();