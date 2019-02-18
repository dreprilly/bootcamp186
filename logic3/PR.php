<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class PR extends Matrix{

	private $deret;
	
	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = ($n*2)-1;
		$fibo = $this->deret->getFibo($n);
		$char = $this->deret->getChars($n);
		
		for($i = 0; $i < $this->baris; $i++){
			$index = 0;
			for($j = 0; $j < $this->kolom; $j++){
				if($i - $j == 0){
					$this->matrix[$i][$j] = $fibo[$i];
					//mirror
					$this->matrix[$i][$this->kolom-$j-1] = $fibo[$i];
				} else if($j + $i == $n - 1){
					
					$this->matrix[$i][$j] = $fibo[$j];
					$this->matrix[$i][$this->kolom-$j-1] = $fibo[$j];
				} else if($i == ceil($this->baris/2)-1 && $j <= $n - 1){
					$this->matrix[$i][$j] = "". $char[$index];
					$this->matrix[$i][$this->kolom-$j-1] = $char[$index];
					$index++;
				}
				
			}
		}
	}
}

$jawab = new PR();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

