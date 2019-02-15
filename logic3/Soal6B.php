<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal6B extends Matrix{

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
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				//diagonal 1
				if($i - $j == 0){ 
					$this->matrix[$i][$j] = "". $fibo[$i];
				//diagonal 2
				} else if($i+$j == $this->kolom - 1){ 
					$this->matrix[$i][$j] = $fibo[$n-$i-1] ."";
				//area atas
				} else if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					$this->matrix[$i][$j] = "A";
				//area kanan
				} else if($i - $j <= 0 && $i + $j >= $this->kolom - 1){
					$this->matrix[$i][$j] = "B";
				//area bawah
				} else if($i+$j >= $this->kolom-1){
					$this->matrix[$i][$j] = "C";
				//area sisa (kiri)
				} else {
					$this->matrix[$i][$j] = "D";
				}
				
				
				
			}
		}
	}
}

$jawab = new Soal6B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

