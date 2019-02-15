<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal9B extends Matrix{

	private $deret;
	
	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		$fibo = $this->deret->getFibo($n);
		$chars = $this->deret->getChars($n);
		
		echo json_encode($fibo)."<br/>";
		echo json_encode($chars);
		
		echo "<p/>";
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				if($i - $j <= 0 && $i + $j <= $this->kolom - 1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "". $fibo[floor(($i)/2)];
					} else {
						$this->matrix[$i][$j] = "". $chars[floor(($i)/2)];
					}
				//area kanan
				} else if($i - $j <= 0 && $i + $j >= $this->kolom - 1){
					if($j % 2 == 0){
						$this->matrix[$i][$j] = "". $fibo[floor(($n-$j)/2)];
					} else {
						$this->matrix[$i][$j] = "".  $chars[floor(($n-$j-1)/2)];
					}
				//area bawah
				} else if($i+$j >= $this->kolom-1){
					if($i % 2 == 0){
						$this->matrix[$i][$j] = "". $fibo[floor(($n-$i)/2)];
					} else {
						$this->matrix[$i][$j] = "". $chars[floor(($n-$i-1)/2)];
					}
					
				//area sisa (kiri)
				} else {
					if($j % 2 == 0){
						$this->matrix[$i][$j] = "". $fibo[floor(($j)/2)];
					} else {
						$this->matrix[$i][$j] = "". $chars[floor(($j)/2)];
					}
					
				}
				
				
				
			}
		}
	}
}

$jawab = new Soal9B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

