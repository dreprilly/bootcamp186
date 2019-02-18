<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal1B extends Matrix{

	private $deret;

	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n*2-1;
		
		for($i = 0; $i < $this->baris; $i++){
			$index = 1;
			for($j = 0; $j < $this->kolom; $j++){
				if($j + $i >= $n - 1 && $j - $i <= $n - 1){
					$this->matrix[$i][$j] = " $index ";
					$index++;
				}
			}
		}
	}
}

$jawab = new Soal1B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

