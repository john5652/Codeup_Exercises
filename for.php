<?php 

	$inc = 1;
		fwrite(STDOUT, 'Type a number for the min ');
		$usermin = fgets(STDIN);
		fwrite(STDOUT, 'Type a number for the max ');
		$usermax = fgets(STDIN);
		fwrite(STDOUT, 'Type a number you would like to count by ');
		$inc = fgets(STDIN);
		for ($i = $usermin; $i <= $usermax; $i+=$inc) {
    		echo $i.PHP_EOL;
		}
 ?>


