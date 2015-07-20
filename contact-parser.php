<?php
function parseContacts($filename)
{

    $filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contacts = fread($handle, filesize($filename));
	$contentsArray = explode(PHP_EOL, $contacts);
	$otherArray = [];
	foreach($contentsArray as $contact) {
		array_push($otherArray, explode("|", $contact));
		// print_r($otherArray);
	}
	foreach($otherArray as $key => $value){
		$number = substr($value[1], 0, 3) . "-" . substr($value[1], 3, 3) . "-" . substr($value[1], 6,4 );
		$otherArray[$key] = array("name" => $value[0], "number" => $number);
	}
    return $otherArray;
}
var_dump(parseContacts('contacts.txt'));