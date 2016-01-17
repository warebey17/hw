<?php
//Create an array from own sentence without using encoding.
	$bio = "My name is Quentin and I'm learning to code";
	$results = array();
	$length = strlen($bio);
	for($i=0; $i < $length; $i++)
{
	if($bio[$i] = "$length")	
	{
		array_push($results, $i);
	}
}		
	;
print_r ($results);
?>
