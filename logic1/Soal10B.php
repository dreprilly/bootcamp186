<?php

INCLUDE '../Matrix.php';

class Soal10B extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				if($i - $j >= 0 && $i <= ($this->baris-1)/2){
					$this->matrix[$i][$j] = "*";
				} else if($i - $j <= 0 && $i >= ($this->baris-1)/2){
					$this->matrix[$i][$j] = "#";
				}
			}
		}
	}
}

$jawab = new Soal10B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

