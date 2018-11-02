<?php
	$arr = array(6,3,8,2,9,1);
	function order($arr){

		$count = count($arr);
		$temp = 0;

		for ($i=0;$i<$count-1;$i++) { 
			for ($j=0; $j<$count-1-$i;$j++) { 
				if($arr[$j]>$arr[$j+1]){
					$temp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $temp;
				}
			}
		}
		return $arr;
	}
	$res = order($arr);
	print_r($res);
?>