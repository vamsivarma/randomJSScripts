<?php

	kfcOutlet();
	
	//Colony Info Main Function
	//N - No of advertizement boards
	//M - No of consecutive boards for which KFC Criteria applies
	//K - Minimum No of KFC boards per M consequtive boards
	//function min_boards($input1, $input2, $input3) {
	function kfcOutlet() {
				
		$N = 18;//$input1;
		$M = 3;//$input2;
		$K = 2;//$input3;
		
		$noOfWays = getOptimalCombinations($N, $M, $K);
		
		//echo $noOfWays;
		
	}

	function getOptimalCombinations($N, $M, $K){
		
		//Verifying for alpha numeric and special character values
		if(!is_numeric($N) || !is_numeric($M) || !is_numeric($K)){
				return -1;
		} else {
				
				if(!isInteger($N) || !isInteger($M) || !isInteger($K)){
					return -1;
				} else {
					//Verification for negetive values
					if($N <= 0 || $M <=0 || $K <=0){
						return -1;
					}
				}
		}
		
		//Checking for Invalid Conditions as mentioned in the problem statement
		if($K > $M || $M > $N || $K > $N || $K > 50 || $M > 50 || $N > 65535) {
			return -1;
		}
		
		if($K == $M) {
			return 1;
		}
		
		$noofWays = 0;
		
		
		//Core Logic Starts Here
		if(!(N%M)) {
			
			$noofSamples = $N/$M;
			$maxIterationLimit = gerCurPermutationValue($M,$K) - 1;
			$minIterationLimit = pow(2, $K-1);
			
			$noofWays = 1;
			
			
			for($i = $maxIterationLimit; $i >= $minIterationLimit; $i--){
				
				
				
			}
			
			
			
			
		}
		
		

	}
	
	function getCurPermutationValue($input1, $input2) {
		
		$numeratorVal = $input1;
		$denomVal = $input1 - $input2;
		
		$numeratorFact = 1;
		$denomFact = 1;
		
		while($numeratorVal) {
			$numeratorFact *= $numeratorVal;
			$numeratorVal--;
		}
		
		while($denomVal) {
			$denomFact *= $denomVal;
			$denomVal--;
		}
		
		return ($numeratorFact/$denomFact);
	}

	function isInteger($k){
		return intVal($k)=== $k;
	}
	
?>