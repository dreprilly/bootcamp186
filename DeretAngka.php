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
	
}	