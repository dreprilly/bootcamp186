<?php

INCLUDE '../Matrix.php';

class Soal6B extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				if($i - $j <= 0){
					$this->matrix[$i][$j] = "*";
				}
			}
		}
	}
}

$jawab = new Soal6B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

