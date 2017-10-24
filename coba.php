<?php
class domba{

public $suara ='mbeee';
  	public $berat =5 ;
  	public $kaki=4;
  	public function suaranya()
{
	echo "suara domba= ".$this->suara;
}
	public function kakinya()
	{
		echo "kaki Domba= ".$this->kaki;
	}
	public function suaraulang()
	{
		for ($i=0; $i <4 ; $i++) { 
			echo $this->suara .'<br>';
			# code...
		}
	}
}

class kuda{

public $suara ='ihaaa';
  	public $berat =100 ;
  	public $kaki=4;
public function suaranya()
{
	echo "suara Kuda= ".$this->suara;
}
	public function beratnya()
	{
		echo "berat Kuda= ".$this->berat;
	}

	public function suaraulang()
	{
		for ($i=0; $i <4 ; $i++) { 
			echo $this->suara .'<br>';
			# code...
		}
	}
}


class ayam{

public $suara ='petok petok';
  	public $berat =20 ;
  	public $kaki=2;

}

class rumah{

public $pintu ='2';
  	public $warna ='biru' ;

}
class nyamuk{
	public $suara ='ngiunggggggg';

}
$domba1=new domba();
$domba1->suaranya();echo '<br>';
$domba1->kakinya();echo '<br>';
$domba1->suaraulang().'<br>';
echo '<br>';
$kuda1=new kuda();
echo "bunyi kuda....: ".$kuda1->suara.'<br>';
$ayam1=new ayam;
echo "bunyi ayam....: ".$ayam1->suara.'<br>';
$nyamuk1=new nyamuk;
echo "bunyi nyamuk....: ".$nyamuk1->suara.'<br>';
$rumah1=new rumah;
echo "warna rumah....: ".$rumah1->warna.'<br>';
  ?>
