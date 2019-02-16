<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal10B extends Matrix{

	private $deret;
	//init
	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
    $da = $this->deret->getOddAndReverse($n);
		
		echo json_encode($da);
		echo "<p/>";
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				$this->matrix[$i][$j] = "" .$da[$i];
			}
		}
	}
}

$jawab = new Soal10B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

