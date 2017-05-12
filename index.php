<html>
<head>
  <title>services status</title>
  <meta http-equiv="refresh" content="300; URL=http:status.miche1.de">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <!--webapp settings-->
  <link rel="apple-touch-icon" href="media/icon.png"/>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="manifest" href="manifest.json">
  <meta name="status" content="status">

</head>
<body style="background-color: #ffffff;">

<form method="get" action="index.php">
  <div class="jumbotron" style="background-color: #ffffff; width:80%; margin: auto; padding-top: 2em;">
    <div style="width:90%;margin: auto;">
    <h1 class="page-header"><b>STATUS</b></h1>
    <h2>services
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
    </h2>
    <br>

  <?php

  $logFile = file_get_contents('/home/monitor/status-log.txt');

    $data = explode( ';', $logFile);


  status($data[1],"VPN");
  status($data[3],"cloud");
  status($data[5],"node");
  status($data[7],"node2");

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

  function showTime()
  {
    print("<h5>");
    print(date("H:i:s"));
    print("<h5>");
  }
  ?>

 <table>
   <tr>
     <td> <button class="btn btn-default" href="#">show logs</button> </td>
     <td style="padding-left: 1em"><?php showTime(); ?> </td>
  </tr>
</table>
</div>
</div>
</form>
</body>
</html>
