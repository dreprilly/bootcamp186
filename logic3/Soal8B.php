<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal8B extends Matrix{

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
				if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "". ($i+1);
					} else {
						$this->matrix[$i][$j] = " ";
					}
				//area kanan
				} else if($i - $j <= 0 && $i + $j >= $this->kolom - 1){
					if($j % 2 == 0){
						$this->matrix[$i][$j] = "". ($n-$j);
					} else {
						$this->matrix[$i][$j] = " ";
					}
				//area bawah
				} else if($i+$j >= $this->kolom-1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "". ($n-$i);
					} else {
						$this->matrix[$i][$j] = " ";
					}
					
				//area sisa (kiri)
				} else {
					if($j % 2 == 0){
						$this->matrix[$i][$j] = "". ($j + 1);
					} else {
						$this->matrix[$i][$j] = " ";
					}
					
				}
				
				
				
			}
		}
	}
}

$jawab = new Soal8B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

