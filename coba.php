<?php
 
 class ayam{
 		public $suara;
 		public $kaki;


 		//KONSTRAKTOR
 		public function __construct($suara,$kaki)
 		{
			$this->suara = $suara;
			$this->kaki = $kaki;
 		}
 		public function get_suara()
 		{
 			return $this->suara;
 		}
 		public function get_kaki()
 		{
 			return $this->kaki;
 		}
}
?>