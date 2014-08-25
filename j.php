<?php
	function remove_prop_ids($prop_ids,$propertyValue){
	    	$prop_idsArr = explode(',',$prop_ids);
	    	$propertyValueArr = explode('|',$propertyValue);
	    	$propertyValueArr1 = explode(',',$propertyValueArr[1]);
	    	$propertyValueArr2 = array_diff($propertyValueArr1,$prop_idsArr);
	    	$newPropertyValue = implode(',',$propertyValueArr2);
	    	$newPropertyValue2 = $propertyValueArr[0].'|'.$newPropertyValue;
	    	return $newPropertyValue2;
    	}
	$a = '1,2,3,4,5';
	$b = '1|1,2,3,4,5';
	echo remove_prop_ids($a,$b);
