<?php

   try
   {
      $pdo = new PDO('mysql:host=localhost;dbname=baza_samochod', 'root', '');
      echo 'Po³¹czenie nawi¹zane!';
   }
   catch(PDOException $e)
   {
      echo 'Po³¹czenie nie mog³o zostaæ utworzone: ' . $e->getMessage();
   }
   echo "<br>";


   
?>
<form method="POST" action="dodaj.php">
Model: <input type="text" name="model"><br>
Rejestracja: <input type="text" name="rejestracja"><br>
Data produkcji: <input type="text" name="data"><br>
<input type="submit">
</form> 

<?php
	$stmt = $pdo->query("SELECT * FROM samochody ORDER BY data_produkcji DESC");
   
	echo "<table style='border: 3px solid black'>";
   
	foreach($stmt as $row){
	   echo "<tr >";
	   echo "<td style='border: 1px solid black'>".$row['id']."</td><td style='border: 1px solid black'>". $row['model']."</td><td style='border: 1px solid black'>". $row['rejestracja']."</td><td style='border: 1px solid black'>". $row['data_produkcji'];  
?>
	<td style='border: 1px solid black'>
		<form method="POST" action="usun.php">
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			<input type="submit" value="usun">
		</form> 
	</td>
<?php  
	echo "</tr>";
	}
	echo "</table>";