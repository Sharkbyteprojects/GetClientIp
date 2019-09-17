<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="https://freesoftwaredevlopment.github.io/Terminal-style/styles/linux-terminal/terminal-body.css">
    <title>IP Service</title>
</head>
<body>
<h1>IP Adress service</h1>
<div id="ico">
<h3>Public IP:</h3>
<?php 
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "<p>";
        echo $ip;
        echo "</p>";
    ?><button onclick="guid()">Show Private IP</button></div>
<div id="gui">
<button onclick="guiri()">Show Public IP</button>
<h3>Private IP:</h3>
    <?php 
    if (! isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $client_ip = $_SERVER['REMOTE_ADDR'];
        }else {
        $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        if($client_ip == $ip){
            $client_ip = "I can't see your Private IP<br>You don't use Proxy";
        }
        echo "<p>";
        echo $client_ip;
        echo "</p>";
    ?></div>
    <script src="pripu.handler.js">
</script>
</body>
</html>