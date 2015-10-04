<?php

	//partition();
	
	//Partition Main Function
	function partition($input1) {
		
		//$input1 = array(11.5,5,5,1);

		$partitionStatus = returnSum($input1);
		
		return $partitionStatus;
	}
	

	function returnSum($inputAry){
		
		//Array which is to be partitioned
		$partitionAry = $inputAry;
		$partitionAryLen = count($partitionAry);

		//Verifying for alpha numeric and special character values
		for($i=0; $i < $partitionAryLen; $i++){

			if(!is_numeric($partitionAry[$i])){
				return "Invalid";
			} else {

				if(!isInteger($partitionAry[$i])){
					return "Invalid";
				} else {
					if($partitionAry[$i] > 65535){
						return "Invalid";
					}
				}
			}
		}

		$partitionArySum =  array_sum($partitionAry);
		sort($partitionAry);

		//Veryfying for negetive array values
		if($partitionAry[0] <= 0){
			return "Invalid";
		}
		
		//Verifying for odd sum
		if($partitionArySum % 2) {
			return "No";
		}

		$partitionVal = $partitionArySum/2;

		//Verifying for a array index value exceeding half of the sum
		if($partitionAry[$partitionAryLen - 1] > $partitionVal) {
			return "No";
		}


		//Core Logic
		$partitionTableAry[$partitionArySum];

		$partitionTableAry[0] = true;
		for($k=1; $k <= $partitionArySum; $k++){
			$partitionTableAry[$k] = false;
		}

		for($i=0; $i < $partitionAryLen; $i++){

			for($j =$partitionArySum - $partitionAry[$i]; $j >=0; $j--){
					
				if($partitionTableAry[$j]){
					$partitionTableAry[$j + $partitionAry[$i]]=true;
				}
			}
		}
		
		if($partitionTableAry[$partitionArySum/2]) {
			return "Yes";
		} else {
			return "No";
		}
		
		error_reporting(E_ALL);
	}

	function isInteger($k){
		return intVal($k, 10)=== $k;
	}

?>