<?php
  class robot{

  	 public $suara ='ngik ngik ngik';
  	 public $berat = 30;
  }
 $robot= new robot;
 echo "ROBOT".'<br>';
 echo "bunyi robot = "  .$robot->suara.'<br/>'.'<br/>';  

 	class kucing{
 		public $suara ='meong';
 		public $kaki = 4;
 	public function suaranya()
 	{
 		echo "Suara kucing ". $this->suara;
 	}
 	public function kakinya()
 	{
 		return $this->kaki;
 	}
 	public function suaraulang()
 	{
 		for ($i=0; $i <4 ; $i++) { 
 			 echo $this->suara.'&nbsp';
 		}
 	}
 	}
 	echo "KUCING".'<br>';
 	$kucing= new kucing;
 	$kucing->suaranya();
 	echo '<br>'."Kaki kucing ada ". $kucing->kakinya().'<br>';
 	echo $kucing->suaraulang().'<br>';


 	class kuda{
 		public $suara ='ihaaaaa';
 		public $kaki = 4;
 	public function suaranya()
 	{
 		echo "Suara kuda ". $this->suara;
 	}
 	public function kakinya()
 	{
 		return $this->kaki;
 	}
 	public function suaraulang()
 	{
 		for ($i=0; $i <4 ; $i++) { 
 			 echo $this->suara.'&nbsp';
 		}
 	}
 	}
 	echo '<br>'."KUDA".'<br>';
 	$kuda= new kuda;
 	$kuda->suaranya();
 	echo '<br>'."Kaki kuda ada ". $kuda->kakinya().'<br>';
 	echo $kuda->suaraulang().'<br>';


	class ayam{
 		public $suara;
 		public $kaki;


 		//KONSTRAKTOR
 		public function __construct()
 		public function set_suara($bunyi)
 		{
 			return $this->suara = $bunyi;
 		}
 		public function get_suara()
 		{
 			return $this->suara;
 		}
 	}
 	$ayam = new ayam;
 	$ayam->set_suara('ngik ngik ngok');
 	echo $ayam->get_suara();





  	class domba{
 		public $suaral ='embe';
 		public $kakil = 4;
 	}



  	class harimau{
 		public $suarah ='ngaung';
 		public $kakih = 4;
 	}
?>