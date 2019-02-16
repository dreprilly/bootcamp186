<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal7B extends Matrix{

	private $deret;
	
	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		$fibo = $this->deret->getFibo($n);
		
		echo json_encode($fibo);
		echo "<p/>";
		
		$index1 = 0;
		$index4 = $n-1;
		for($i = 0; $i < $this->baris; $i++){
			$index2 = 0;
			$index3 = $n-1;
			for($j = 0; $j < $this->kolom; $j++){
			
				if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					$this->matrix[$i][$j] = "". $fibo[$index1];
				//area kanan
				} else if($i - $j <= 0 && $i + $j >= $this->kolom - 1){
					$this->matrix[$i][$j] = "". $fibo[$index3];
				//area bawah
				} else if($i+$j >= $this->kolom-1){
					$this->matrix[$i][$j] = "" . $fibo[$index4];
				//area sisa (kiri)
				} else {
					$this->matrix[$i][$j] = "". $fibo[$index2];
				}
				$index2 = $index2 + 1;
				$index3 = $index3 - 1;
			}
			$index1 = $index1 + 1;
			$index4 = $index4 - 1;
		}
	}
}

$jawab = new Soal7B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

