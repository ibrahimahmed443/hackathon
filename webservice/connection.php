<?php

		//Connect to databse...		
		 
	
		$host = "<HOST_ADDRESS>";
		$user = "<USER>";
		$password = "<PASSWORD>";
		$db = "hackathon";
		
	
		//Table Names...
		$tableHosp = "hospital";
  		$tableDept = "department";
		$tableRel = "relation";
  
  
		$con = mysql_connect($host, $user, $password);
		if (!$con)
		{
			print "Failed to connect to database";
			return 0;
		}
		
		$check = mysql_select_db($db , $con);
	
		if (!$check)
		{
			print "Database not available";
			return 0;	
		}

?>
