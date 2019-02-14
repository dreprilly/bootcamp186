<?php
class Soal1B{

	private $baris = 0;
	private $kolom = 0;
	private $matrix = array();
	
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				if($i == $j){
					$this->matrix[$i][$j] = "$i.$j";
				} 
			}
		}		
	}
	
	public function showMatrix(){
		echo "<table border=1 style='border-collapse: collapse;'>";
		for($i = 0; $i < $this->baris; $i++){
			echo "<tr>";
			for($j = 0; $j < $this->kolom; $j++){
				echo "<td>";
				//if(@$this->matrix[$i][$j] != null){
					echo @$this->matrix[$i][$j];
				//} else {
					//echo "null";
				//}
				echo "</td>";	
			} 
			echo "</tr>";
		}	
		echo "</table>";
	}
}

echo "<form method='POST'>";
echo "input : <input type='number' name='input' />";
echo "<input type='submit' value='submit' />";
echo "</form>";

//getting number
if(@$_POST['input'] != null){
	echo "input : ". $_POST['input']."<p/>";
	$jawab = new Soal1();
	$jawab->setMatrix($_POST['input']);
	$jawab->showMatrix();
}
