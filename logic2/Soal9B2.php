<?php

INCLUDE '../Matrix.php';

class Soal9B2 extends Matrix{

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			$dataJ = 1;
			for($j = 0; $j < $this->kolom; $j++){
				$this->matrix[$i][$j] = $dataJ;
				
				if($j <= ($this->kolom-1)/2 - 1)
					$dataJ = $dataJ + 2;
				else 
					$dataJ = $dataJ - 2;
			}
		}
	}
}

$jawab = new Soal9B2();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

