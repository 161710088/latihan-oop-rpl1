<?php
class sekolah{
	var $nm_sekolah;
	var $kp_sekolah;
	var $jurusan;
	var $jumlah_kls;
      function ab() 
      { 
		$nm_sekolah='SMK ASSALAAM';
		return "Nama Sekolah Ini Adalah ".$nm_sekolah."<br/>"; 
	  }
	  function bc()
	  {
		$kp_sekolah='iiiii';
		return "Kepala Sekolah Ini Adalah ".$kp_sekolah."<br/>"; 
	  }
	  function cd()
	  {
		$jurusan='RPL';
		return "Jurusan nya Adalah ".$jurusan."<br/>"; 
	  }
	  function de()
	  {	
		$jumlah_kls='4';
		return "Jumlah kelas Di Sekolah Ini Adalah ".$jumlah_kls."<br/>"; 
      } 

} 
$m= new sekolah();
echo $m->ab();
echo $m->bc();
echo $m->cd();
echo $m->de();
?>  


 //$kucing= new kucing;
  echo "suara kucing adalah " .$kucing->suarak.
  	   " dan kakinya ada ".$kucing->kakik."<br/>";
 $kuda= new kuda;
  echo "suara kuda = "  .$kuda->suarau. 
  	   " dan kakinya ada ".$kuda->kakiu."<br/>";
 $ayam= new ayam;
  echo "suara ayam = "  .$ayam->suaraa. 
   	   " dan kakinya ada ".$ayam->kakia."<br/>";
 $domba= new domba;
  echo "suara domba = "  .$domba->suaral."<br/>";
  $harimau= new harimau;
  echo "suara harimau = "  .$harimau->suarah."<br/>";