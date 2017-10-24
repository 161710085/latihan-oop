<?php
// buat class laptop
class laptop {
 
   public $pemilik;
   public $merek ;
  
   public function __construct($p,$m){
     $this->pemilik=$p;
     $this->merek=$m;
   }
     public function get_pemilik(){
 return $this->pemilik;
} public function get_merek(){
 return $this->merek;
}
   }
 ?>