        
	<?php
    	// Declare Two Variables old and new
		// Make sure that old value should be previous date of the new date vice varsa
		
		$datetime_old="2012-06-13 02:44:39 PM";
		
		$datetime_new = date('Y-m-d h:i:s A'); 
		
		// You can use here database value also but it should be in double quote
		
       
		
        $d1="$datetime_new";
		
	   $d2="$datetime_old";
		
		// Assign in strtotime functions
		
        $date1 = strtotime("$d1");
        $date2 = strtotime("$d2");
		
		// Subtractions 
        $compare = $date1 - $date2;
		
		// Get Year value
        $y = ($compare/(60*60*24*365)%365);
		
		// Get Days Value
        $d = ($compare/(60*60*24))%365;
		
		//Get Hours Value
        $hrs = ($compare/(60*60))%24;
		
		//Get Minutes Value
        $min = ($compare/60)%60;
		
		// Get Seconds Value
		
        $sec=($compare/60*60)%60;
		
		echo "Difference between ".date('Y-m-d H:i:s',$date1)." and ".date('Y-m-d H:i:s',$date2);
        echo "is:\n<br/> <br/>";
		echo "<span style='color:red'> Years :".$y."</span> <br/>";
		echo "<span style='color:green'> Days :".$d."</span> <br/>";
		echo "<span style='color:blue'> Hours :".$hrs."</span> <br/>";
 		echo "<span style='color:purple'> Minutes :".$min."</span> <br/>";
     	echo "<span style='color:pink'> Seconds :".$sec."</span> <br/>";

      ?>
