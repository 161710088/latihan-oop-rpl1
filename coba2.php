<?php
require_once 'coba.php';
$ayam = new ayam('petok petok',4);
 	echo "suaranya ".$ayam->get_suara().'<br>';
 	echo "kakinya ada ".$ayam->get_kaki();
?>