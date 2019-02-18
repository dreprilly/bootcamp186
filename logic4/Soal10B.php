<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal10B extends Matrix{

	private $deret;

	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix2($n, $n2){
		$this->baris = $n;
		$this->kolom = ($n*$n2)-($n2-1); //(($n-1)*$n2)-($n2-1);
		$chars = $this->deret->getChars($n);
		
		$addBangun = 0;
		for($bangun = 0; $bangun < $n2; $bangun++){
			for($i = 0; $i < $this->baris; $i++){
				$index = 0;
				for($j = 0; $j < $this->kolom; $j++){
					if($j + $i >= $n/2 - 1 && $j - $i <= $n/2 && $i <= $n/2){
						//ADDBANGUN => UNTUK COPY KE JUMLAH BANGUN N2
						//segitiga atas
						$this->matrix[$i][$j + $addBangun] = $chars[$index];
						//mirror untuk segitiga bawah
						$this->matrix[$this->baris - $i - 1][$j + $addBangun] = $chars[$index];
						if($j <= floor($n/2) - 1)
							$index = $index + 1;
						else 
							$index = $index - 1;	
					}
				}
			}
			$addBangun = $addBangun + ($n - 1);
		}
		
	}

}

$jawab = new Soal10B();
$jawab->form2();
$jawab->setMatrix2(@$_POST['input'], @$_POST['input2']);
$jawab->showMatrix();

