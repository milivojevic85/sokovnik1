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

class Cedaljka 
{
	public function cediVoce(PosudaZaVoce $voceUposudi) {
		// dobijeno toliko i toliko soka 40% tezine $voceUposudi
	}
	
}

$voceUposudi = new PosudaZaVoce();
?>
</body>
</html>