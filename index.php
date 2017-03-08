<html>
<head>
  <title>monitoring</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body style="background-color: #ecf0f1;">

  <div class="jumbotron" style="background-color: #ecf0f1; width:80%; margin: auto; padding-top: 2em;">
    <div style="width:90%;margin: auto;">
    <h1><b>STATUS</b></h1>
    <h2>services</h2>
    <br>

  <?php

  $logFile = file_get_contents('/home/monitor/status-log.txt');

    $data = explode( ';', $logFile);


  status($data[1],"VPN");
  status($data[3],"cloud");

	function status($stat, $host)
	{
	    if ($stat == "true")
	    {
   		 print('<div class="alert alert-success" role="alert"><h4><span class="label label-default">online</span>&emsp;'.$host.'</h4></div>');
   	    }
   	    else
    	{
	    print('<div class="alert alert-danger" role="alert"><h4><span class="label label-default">offline</span>&emsp;'.$host.'</h4></div>');
	    }
	}

  ?>

  <button class="btn btn-default" href="#">show logs</button>
</div>
</div>
</body>
</html>
