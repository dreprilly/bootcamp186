<?php

INCLUDE '../Matrix.php';

class Soal2B1 extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		$dataI = ($n*2) - 2;
		for($i = 0; $i < $this->baris; $i++){
		
			$dataJ = 1;
			for( $j= 0; $j < $this->kolom; $j++){
				if($i + $j == $this->kolom-1){
					$this->matrix[$i][$j] = "". $dataI;
				}
				$dataJ = $dataJ + 2;
			}
			$dataI = $dataI - 2;
			
		}
	}
}

$jawab = new Soal2B1();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

