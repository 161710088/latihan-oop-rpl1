<?php
class org{
 		public $nama;
 		public $tl;
 		public $kls;
 		public $st;

 		//KONSTRAKTOR
 		public function __construct($a,$b,$c,$d)
 		{
			$this->nama = $a;
			$this->tl = $b;
			$this->kls = $c;
			$this->st = $d;
 		}
 		public function get_nama()
 		{
 			return $this->nama;
 		}
 		public function get_tl()
 		{
 			return $this->tl;
 		}
 		public function get_kls()
 		{
 			return $this->kls;
 		}
 		public function get_st()
 		{
 			return $this->st;
 		}
}
?>