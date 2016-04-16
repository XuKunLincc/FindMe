<?php
// $becArry["time"]="2015";

// $desArry["name"]="ckl";
// $desArry["sex"]="boy";

// update($becArry, $desArry);

// function update($becArry,$desArry){

// 			$e = "update testTable set";

// 			foreach ($desArry as $key => $value) {
// 				$e .= <<<CKL
// 				$key="$value",
// CKL;
// 			}

// 			$e = substr($e, 0, -1);
// 			$e .= " where ";

// 			foreach ($becArry as $key => $value) {
// 				$e .= <<<CKL
// 				$key="$value" and
// CKL;
// 			}
// 			$e = substr($e, 0, -3);

// 			echo $e;
// 		}

	getNameByKeys("num","14211210108","phoneNum","18475098348");

	function getNameByKeys(){
		$varArray = func_get_args();
		$varNum = func_num_args();
		$becArray;
		for($i = 0; $i < $varNum; $i+=2){
			$becArray[$varArray[$i]] = $varArray[$i+1];
		}

		queryByKeys("name",$becArray);
	}

	function queryByKeys($content,$becArry){
		$e = "SELECT $content from user where ";
		foreach ($becArry as $key => $value) {
			$e .= <<<CKL
			 $key="$value" and
CKL;
		}
		$e = substr($e, 0, -3);
		
		echo $e;
	}
?>