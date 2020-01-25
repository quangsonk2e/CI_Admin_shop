<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
 
if (! function_exists('changedate')) {
	function changedate($date){

		$date=explode('/', $date);
		return $date[2].'-'.$date[1].'-'.$date[0];
		}

	}
if(! function_exists('num_product')){
	function num_product($size){
		
		 $data=explode(',',$size);
		 $quantity=0;
		 foreach ($data as $key => $value) {
		 	$value=explode(':', $value);
		 	foreach ($value as $k => $v) {
		 		$quantity+=$v;
		 	}
		 }
		
		 return $quantity;
		}
}