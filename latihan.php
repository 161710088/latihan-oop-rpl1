<?php
require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo "========================".'<br>';
echo "Perhitungan bilangan 21 dengan 3".'<br>';
echo "========================".'<br>';
echo "Penjumlahan = ".$penjumlahan->get_penjumlahan().'<br>';
echo "Pengurangan = ".$penjumlahan->get_pengurangan().'<br>';
echo "Perkalian = ".$penjumlahan->get_perkalian().'<br>';
echo "Penbagian = ".$penjumlahan->get_pembagian();
?>