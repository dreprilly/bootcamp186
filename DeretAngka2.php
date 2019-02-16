<?php

class DeretAngka{
	
	//0 2 4 6 4 2 0
	public function getOddAndReverse($n){
		$result = array();
		$data = 0;
		for($i = 0; $i < $n; $i++){
			//collect to result array
			$result[$i] = $data;
			
			if($i <= ($n-1)/2-1){
				$data = $data + 2;
			} else {
				$data = $data - 2;
			}
		}
		
		return $result;
  }
  
  // single return
  public function getTambah($n1, $n2) { // parameter
    return $n1 + $n2;
  }

  // multi return
  // 0,1,2,3,4...
  public function getIncrement($n) {
    $result = array();
    for ($i=0; $i < $n; $i++) { 
      $result[$i] = $i;
    }
    return $result;
  }

  // 1,3,5...
  public function getIncrementBy2($n) {
    $hasil = array();
    $data = 1;
    for ($i=0; $i < $n; $i++) { 
      $hasil[$i] = $data;
      $data += 2;
    }
    return $hasil;
  }
  
  // 5,3,1...
  public function getIncrementBy2Reverse($n) {
    $hasil = array();
    $data = 1;
    for ($i=0; $i < $n; $i++) { 
      array_unshift($hasil, $data);
      $data += 2;
    }
    return $hasil;
  }

  // 1,1,2,3,5...
  public function getFibo($n) {
    $result = array(1,1);
    for ($i=2; $i < $n; $i++) { 
      $result[$i] =  $result[$i - 1] + $result[$i - 2];
    }
    return $result;
  }

  // 1,1,1,3,5,9...
  public function getTribo($n) {
    $result = array(1,1,1);
    for ($i=3; $i < $n; $i++) { 
      $result[$i] =  $result[$i - 1] + $result[$i - 2] + $result[$i - 3];
    }
    return $result;
  }

}	

$deret = new DeretAngka();
// echo json_encode($deret->getIncrement(9)) ."\n"; // argument
// echo json_encode($deret->getIncrementBy2(9)) ."\n"; // argument
// print_r($deret->getIncrementBy2Reverse(9)) ."\n"; // argument
// echo print_r($deret->getFibo(9)) ."\n"; // argument
print_r($deret->getTribo(9)) ."\n"; // argument