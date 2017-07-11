<?php
	try
   {
      $pdo = new PDO('mysql:host=localhost;dbname=baza_samochod', 'root', '');
      //echo 'Połączenie nawiązane!';
   }
   catch(PDOException $e)
   {
      //echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   }

   
   $id = $_POST['id'];

	$stmt = $pdo->query("SELECT * FROM samochody WHERE id = '$id'");
	
	foreach($stmt as $row){
		echo  "Usunieto ". $row['model']." - ". $row['rejestracja']." -". $row['data_produkcji']."<br>";
	}
   
	$pdo->query("DELETE FROM `baza_samochod`.`samochody` WHERE `samochody`.`id` = '$id'");
?>
<a href="formularz.php">Wroc</a>