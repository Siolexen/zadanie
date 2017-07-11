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

   	   $model = $_POST['model'];
	   $rejestracja = $_POST['rejestracja'];
	   $data = $_POST['data'];

   
   
   if(empty($model)){
	   echo "Podaj model samochodu<br>";
   }elseif(empty($rejestracja)){
	   echo "Podaj rejestracje samochodu<br>";
   }elseif(empty($data)){
	   echo "Podaj date produkcji samochodu<br>";
   }else{
	$pdo->exec("INSERT INTO `baza_samochod`.`samochody` (`id`, `model`, `rejestracja`, `data_produkcji`) VALUES (NULL, '$model', '$rejestracja', '$data')");
	echo "Dodano: ".$model." ".$rejestracja." ".$data."<br>"; 
   }
  
   


?>
<a href="formularz.php">Wroc</a>