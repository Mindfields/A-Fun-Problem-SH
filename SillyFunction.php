<?php

	// Product array
	$products = array(
						array("brand"=>"Nike","type"=>"shoe","item"=>18),
						array("brand"=>"Reebok","type"=>"hat","item"=>13),
						array("brand"=>"Adidas","type"=>"shoe","item"=>2),
						array("brand"=>"Nike","type"=>"hat","item"=>15),
						array("brand"=>"Reebok","type"=>"shoe","item"=>78),
						array("brand"=>"Adidas","type"=>"hat","item"=>4)
		);
		// Silly Function
		function grouped_products() { 
			//get args of the function 
			$args = func_get_args(); 
			$c = count($args); 
			if ($c < 2) { 
				return false; 
			} 
			//get the array to sort 
			$array = array_splice($args, 0, 1); 
			$array = $array[0]; 
			// closures sort using args 
			usort($array, function($a, $b) use($args) { 
				$i = 0; 
				$c = count($args); 
				$cmp = 0; 
				while($cmp == 0 && $i < $c) 
				{ 
					$cmp = strcmp($a[ $args[ $i ] ], $b[ $args[ $i ] ]); 
					$i++; 
				} 

				return $cmp; 

			}); 

			return $array; 

		} 

print_r(grouped_products($products, 'brand', 'type')); 

	
?>
