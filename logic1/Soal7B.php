<?php

INCLUDE '../Matrix.php';

class Soal7B extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				if($i + $j >= $this->kolom - 1){
					$this->matrix[$i][$j] = "*";
				}
			}
		}
	}
}

$jawab = new Soal7B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

