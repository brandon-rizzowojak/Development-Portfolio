<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
      <title>Music Study Area</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
<div id='fg_membersite_content'>
<h1>Music Study Area</h1>

</div>
<br><br><br><br><br><br><br><br><br>
<h2>Hello music student, click below for the Miles Davis module, more modules are coming soon!</h2>
<a href="miles.php" class="myButton">Miles Davis</a>
</center>

</body>
</html>
