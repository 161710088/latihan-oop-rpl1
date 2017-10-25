<?php
require_once "uji.php";

$babi = new org ('Salman','Bandung','XI RPL 1','Menikah');
 	echo "Namanya.. ".$babi->get_nama().'<br>';
 	echo "Tempat Lahir.. ".$babi->get_tl().'<br>';
 	echo "Kelas.. ".$babi->get_kls().'<br>';
 	echo "Status.. ".$babi->get_st();

?>