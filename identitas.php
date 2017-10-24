<?php
class identitas{
	public $nama;
   	public $lahir ;
   	public $kelas;
   	public $status;
   	   public function __construct($n,$l,$k,$s)
   	   {
     $this->nama=$n;
     $this->lahir=$l;
     $this->kelas=$k;
     $this->status=$s;
 }
 public function get_nama()
 {
 return $this->nama;
}
 public function get_lahir()
 {
 return $this->lahir;
} 
public function get_kelas()
{
 return $this->kelas;
} 
public function get_status()
{
 return $this->status;
}
}
  ?>


