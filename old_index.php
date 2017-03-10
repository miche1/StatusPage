<html>
<head>
  <title>status</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!--webapp settings-->
  <link rel="apple-touch-icon" href="media/icon.png"/>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!--<link rel="manifest" href="manifest.json">-->
  <meta name="status" content="status">

</head>
<body style="background-color: #ecf0f1;">

<form method="get" action="index.php">
  <div class="jumbotron" style="background-color: #ecf0f1; width:80%; margin: auto; padding-top: 2em;">
    <div style="width:90%;margin: auto;">
    <h1><b>STATUS</b></h1>
    <h2>services
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
    </h2>
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
</form="">
</body>
</html>
