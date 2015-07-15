<?php 

	// $numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];
	// for ($i = 0; $i < count($numbers); $i++) {
 //    	echo "\$numbers has an element with a value of {$numbers[$i]}\n";
	// }

	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach ($things as $thingy) {
		if (is_string($thingy)) {
			echo is_string;
		}
	}

// 	$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
// 		foreach ($data as $datum) {
//     if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
//     } else if (is_string($datum)) {
//         echo "{$datum} is a string\n";
//     }
// }


 ?>