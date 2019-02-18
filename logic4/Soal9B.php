<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal9B extends Matrix{

	private $deret;

	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix2($n, $n2){
		$this->baris = $n;
		$this->kolom = ($n*$n2)-($n2-1); //(($n-1)*$n2)-($n2-1);
		
		$addBangun = 0;
		for($bangun = 0; $bangun < $n2; $bangun++){
			for($i = 0; $i < $this->baris; $i++){
				$index = 1;
				for($j = 0; $j < $this->kolom; $j++){
					//segitiga atas
					if($j + $i >= $n/2 - 1 && $j - $i <= $n/2 && $i <= $n/2){
						$this->matrix[$i][$j + $addBangun] = "$index";
						//mirror
						$this->matrix[$this->baris - $i - 1][$j + $addBangun] = "$index";
						if($j <= floor($n/2) - 1)
							$index = $index + 2;
						else 
							$index = $index - 2;	
					}
				}
			}
			$addBangun = $addBangun + ($n - 1);
		}
		
	}

}

$jawab = new Soal9B();
$jawab->form2();
$jawab->setMatrix2(@$_POST['input'], @$_POST['input2']);
$jawab->showMatrix();

