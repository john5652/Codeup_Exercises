<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        echo "You typed $a and $b"; 
        return "ERROR: Both arguments must be numbers\n";
    }
}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        echo "You typed $a and $b"; 
        return "ERROR: Both arguments must be numbers\n";
    }
}
function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
        echo "You typed $a and $b";
        return "ERROR: Both arguments must be numbers\n";
    }
}
function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        echo "You typed $a and $b";
        return "ERROR: Both arguments must be numbers\n";
    }
}
function modulus($a, $b) {
	$message = "ERROR: Both arguments must be numbers.";
	if ($a == '0' || $b == '0') {
		return "Cannot divide by 0's.";
	} elseif (is_numeric($a) && is_numeric($b)) {
		return $a % $b; 
	} else  {
		if (!is_numeric($a) && !is_numeric($b)) {
			return "Neither $a nor $b is a number";
		}elseif (!is_numeric($a)) {
			return $message . " " . "$a is not a number.".PHP_EOL;
		} elseif (!is_numeric($b)) {
			return $message . " " . "$b is not a number".PHP_EOL;
		}
	}
}

echo " Below will calculate through the basic functions of math.".PHP_EOL;
echo "==========================================================".PHP_EOL;
fwrite(STDOUT, 'Type your first number ').PHP_EOL;
$a = trim(fgets(STDIN));
fwrite(STDOUT, 'Type your second number to calculate ').PHP_EOL;
$b = trim(fgets(STDIN));

echo "$a"."+"."$b = " . add($a, $b). PHP_EOL; 
echo "$a"."-"."$b = " . subtract($a, $b). PHP_EOL;
echo "$a"."*"."$b = " . multiply($a, $b). PHP_EOL;
echo "$a"."/"."$b = " . divide($a, $b). PHP_EOL;
echo "$a"."%"."$b = " . modulus($a, $b). PHP_EOL;

?>