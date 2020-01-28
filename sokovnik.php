<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Ceđenje voća</title>
</head>
<body>	

<?php 
class Logovanje
{
	protected $details;
	public function trenutno() {
		date_default_timezone_set("Europe/Belgrade");
		$note = date("[d.m.Y h:i:s]")." ".$this->details."\r\n";
		error_log($note, 3, "izlazi.txt");
	}
}
abstract class Voce
{
	protected $naziv, $tezina;
}

class Jabuka extends Voce
{
	private $crvljivo;
}

class Sokovnik 
{
	
}

class PosudaZaVoce
{
	private $kapacitet = 30, $ima_voca;
	
	public function addVocke() {
		
	}
	
	public function getVocke() {
		
	}
	
	public function freeSpace() {
		
	}
}

class Cedaljka extends Logovanje
{
	private $ispis;
	public function cediVoce(/* voceUposudi */) {
		$this->details = "Cedaljka cedi voce" ;
		$this->ispis = $this->trenutno();
		// dobijeno toliko i toliko soka 40% tezine $voceUposudi
	}
	
}

$cedaljka1 = new Cedaljka();
$cedaljka1->cediVoce();

?>
</body>
</html>