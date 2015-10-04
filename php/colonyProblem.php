<?php

	//colonyInfo();
	
	//Colony Info Main Function
	function house_condition($colonyInfoAry, $houseNumer) {
		
		//$colonyInfoAry = array(2,2,1,1,1);
		//$houseNumer = 4;

		$houseCondition = returnHouseCondition($colonyInfoAry, $houseNumer);
		

		return $houseCondition;
	}
	

	function returnHouseCondition($inputAry, $houseNumber){
		
		//Array which is to be partitioned
		$colonyInfoAry = $inputAry;
		$colonyInfoAryLen = count($colonyInfoAry);
		

		//Verifying for alpha numeric and special character values
		for($i=0; $i < $colonyInfoAryLen; $i++){

			if(!is_numeric($colonyInfoAry[$i])){
				return -1;
			} else {
				
				
				if(!isInteger($colonyInfoAry[$i])){
					return -1;
				} else {
					//Verification for negetive values
					if($colonyInfoAry[$i] < 0){
						return -1;
					}
				}
				
			}
		}
		
		//Checking for Invalid House Number
		if($houseNumber > $colonyInfoAryLen || $houseNumber <= 0 || !is_numeric($houseNumber)){
			return -1;
		}
		
		//First house aggregate value should not be 0
		//Verification of first house and last house values since they have only one neighbour so value should not be greater than 2
		if(!$colonyInfoAry[0] || !$colonyInfoAry[1] || $colonyInfoAry[0] > 2 || $colonyInfoAry[$colonyInfoAryLen-1] > 2){
			return -1;
		}
		
		
		//@TODO: Need to put another condition for first house value verification
		
		//Core Logic
		$houseCdnInfoAry[$colonyInfoAryLen];
		
		//Making first house condition to be 1 which indicates good
		$houseCdnInfoAry[0] = 1;

		
		for($i=1; $i < $colonyInfoAryLen; $i++){
			
			if($i > 1){
				$secNeighbourValue = $houseCdnInfoAry[$i-2];
			}
			
			$houseCdnInfoAry[$i] = $colonyInfoAry[$i-1] - $houseCdnInfoAry[$i-1] - $secNeighbourValue;
		}
		
		//print_r($houseCdnInfoAry);
		
		//error_reporting(E_ALL);
		
		return $houseCdnInfoAry[$houseNumber-1];

	}

	function isInteger($k){
		return intVal($k)=== $k;
	}

?>