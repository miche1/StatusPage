<html>
<head>
  <title>Status</title>
</head>
<body>
  <h1>Status</h1>
  <h2>Hosts</h2>	
  <?php
    
 $logFile = file_get_contents('/home/monitor/status-log.txt');


    $data = explode( ';', $logFile);

  status($data[1],"VPN");
  status($data[3],"cloud");

	function status($stat, $host)
	{
	    if ($stat == "true")
	    {
   		 print("<h3>".$host." -- online </h3>");
   	    }
   	    else
    	    {
	    print("<h3>".$host." -- offline </h3>");
	    }
	}
  ?>

</body>
</html>
