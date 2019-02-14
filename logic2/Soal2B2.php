<?php

INCLUDE '../Matrix.php';

class Soal2B2 extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		$dataI = 0;
		for($i = 0; $i < $this->baris; $i++){
		
			$dataJ = 1;
			for( $j= 0; $j < $this->kolom; $j++){
				if($i - $j == 0){
					$this->matrix[$this->baris-1-$i][$j] = "". $dataI;
					$this->matrix[$i][$j] = $dataJ;
				} 
				$dataJ = $dataJ + 2;
			}
			$dataI = $dataI + 2;
			
		}
	}
}

$jawab = new Soal2B2();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

