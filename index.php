<?php

require_once ('Mahasiswa.php');

$male = new Mahasiswa("H1101191038","Maleakhiano Paskarian","2001-04-09","Pria");
$fadil = new Mahasiswa("H1101191034","Muhammad Fadilah","2001-01-03","Pria");
$irvan = new Mahasiswa("H1101191062","Muhammad Pramudia Irvan C","2001-05-05","Pria");

?>
<html>
 <head>
   <title>PHP Test</title>
 </head>
 <body>
  <?php echo '<p>Hello World</p>'; ?>
  <?php
  $male->tampilkanUmur();
  ?><br>
  <?php
  $male->tampilkanAngkatan();
  ?><br>
  <?php
  echo $male->getNama();
  ?>
  
 </body>
</html>
