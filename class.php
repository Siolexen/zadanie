<?php
class Samochod {
	public $pdo, $stmt, $row;
	
	public function polacz() {
		$this->pdo = new PDO('mysql:host=localhost;dbname=baza_samochod', 'root', '');
 }
	
	function dodajSamochod($dane) {
		$model = $dane['model'];
		$rejestracja = $dane['rejestracja'];
		$data = $dane['data'];
		$this->pdo->exec("INSERT INTO `baza_samochod`.`samochody` (`id`, `model`, `rejestracja`, `data_produkcji`) VALUES (NULL, '$model', '$rejestracja', '$data')");
		echo "Dodano: ".$dane['model']." ".$dane['rejestracja']." ".$dane['data']."<br>"; 
	}
	 function pokazSamochody($rejestracja) {
		 
		$this->stmt = $this->pdo->query("SELECT * FROM samochody WHERE rejestracja!='$rejestracja'");
		echo "<table>";
		foreach($this->stmt as $this->row){
			echo "<tr >";
			echo "<td style='border: 1px solid black'>".$this->row['id']."</td><td style='border: 1px solid black'>". $this->row['model']."</td><td style='border: 1px solid black'>". $this->row['rejestracja']."</td><td style='border: 1px solid black'>". $this->row['data_produkcji'];  
			echo "</tr>";
		}
		echo "</table>";
	}
}


$samochod = new Samochod();


$dane = array(
    "model" => "AUDI",
    "rejestracja" => "KOL AUDI",
    "data" => "2017-07-13"
);

$rejestracja = "1213";

$samochod->polacz();
$samochod->dodajSamochod($dane);
$samochod->pokazSamochody($rejestracja);