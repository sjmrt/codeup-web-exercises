<?php

$filename = 'contacts.txt';






function parseContacts($filename)
{
	function addDashToNumber($number)
	{
		$number = ((substr($number, 0, -7)) . "-" . (substr($number, 3, -4)) . "-" . (substr($number, -4)));
		return $number;
	}

    $contacts = array();

    $handle = fopen($filename, 'r');

	$stuff = fread($handle, filesize($filename));
	
	fclose($handle);
	
	$nameArray = explode("\n", trim($stuff));
    
    foreach($nameArray as $info){
    	$name = explode("|", $info);

    	$number = addDashToNumber($name[1]);

    	$contacts[] = ['name' => $name[0], 'number'=>$number];  	
    }
    
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));

