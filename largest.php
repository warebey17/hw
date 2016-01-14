<?php
        
        $num = array("11","17", "30", "4", "85",);
        $largest = 0;
        foreach ($num as $key => $value) {
        	if ($value > $largest) {
        		$largest = $value;
        	}
        }
         
echo $largest

?>
