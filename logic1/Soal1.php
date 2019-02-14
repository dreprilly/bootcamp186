<?php
class Soal1{

	//private $baris = 0;
	//private $kolom = 0;
	
	public function getSolution($n){
		
		//* * * * * //baris = y = $i = vertical 
		//* * * * * //kolom = x = $j = horizontal
		//* * * * *
		for($i = 0; $i < $n; $i++){
			for($j = 0; $j < $n; $j++){
				if($i == $j){
					echo "* ";
				} else {
					echo "&nbsp;&nbsp;";
				}
			}
			echo "<br/>";
		}			
	}
}
echo "<form action ='./Soal1.php' method='POST'>";
echo "input : <input type='number' name='input' />";
echo "<input type='submit' value='submit' />";
echo "</form>";

//getting number
if(@$_POST['input'] != null){
	echo "input : ". $_POST['input']."<p/>";
	$jawab = new Soal1();
	$jawab->getSolution($_POST['input']);
}
