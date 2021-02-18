<?php

include ('Mahasiswa.php');

$mahasiswa_male = new Mahasiswa();
$mahasiswa_irvan = new Mahasiswa();
$mahasiswa_fadil = new Mahasiswa();

$mahasiswa_male->nim = "H1101191038";
$mahasiswa_male->nama = "Maleakhiano Paskarian";
$mahasiswa_male->tanggal_lahir = "09-04-2001";
$mahasiswa_male->jenis_kelamin = "Pria";

$mahasiswa_fadil->nim = "H1101191034";
$mahasiswa_fadil->nama = "Muhammad Fadilah";
$mahasiswa_fadil->tanggal_lahir = "03-01-2001";
$mahasiswa_fadil->jenis_kelamin = "Pria";

$mahasiswa_irvan->nim = "H1101191062";
$mahasiswa_irvan->nama = "Muhammad Pramudia Irvan C";
$mahasiswa_irvan->tanggal_lahir = "05-05-2001";
$mahasiswa_irvan->jenis_kelamin = "Pria";

?>