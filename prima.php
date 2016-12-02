<?php
		echo 'bilangan prima 1-100:<br>';
		for ($i=1; $i <= 100 ; $i++) { 
			$prima = true;
			for ($j=2; $j<$i; $j++) { 
				if($i%$j==0){
					$prima = false;
					break;
				}
			}
			if($prima) echo $i."<br>";
		}
?>