<html>
<head>
  <title>Status</title>
</head>
<body>
  <h1>Status</h1>

  <?php
    $logFile = file_get_contents('/home/monitor/status-log.txt');

   //  echo $logFile;

    $data = explode( ';', $logFile);

    if ($data[1] == "true")
    {
    print("<h3> VPN -- online </h3>");
    }
    else
    {
    print("<h3> VPN -- offline </h3>");
    }

    if ($data[3] == "true")
    {
      print("<h3> cloud -- online </h3>");
    }
    else
    {
        print("<h3> cloud -- offline </h3>");
    }

  ?>

</body>
</html>
