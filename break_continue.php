<?php 


	for ($i = 1; $i <= 100; $i++) {
	    if ($i % 2 == 1) {
	        continue;
	    }
	    echo $i . "\n";
	}

	for ($i = 1; $i <= 100; $i++) {
		    if ($i == 11) {
		        break;
		    }
		    echo $i . "\n";
		}

 ?>



