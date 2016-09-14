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
      <title>Miles Davis Audio and Sheet Music</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <script src="audioplayerengine/jquery.js"></script>
      <script src="audioplayerengine/amazingaudioplayer.js"></script>
      <link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-1.css">
      <script src="audioplayerengine/initaudioplayer-1.js"></script>
      </head>
<body>
  <center>
<div id='fg_membersite_content'>
<h1>Miles Davis Audio and Sheet Music</h1>
</div>
<div>
  <br><br><br><br><br><br>
  <h2>Directions</h2>
  <object data="http://aperionproject.com/Music-Study-Area/pdfs/Directions.pdf" type="application/pdf" height="504" width="720" title="Directions" name="Directions">
    Your browser does not support viewing .PDF files. <a href="http://aperionproject.com/Music-Study-Area/pdfs/Directions.pdf">Directions</a>
  </object>
  <br><br>
  <audio controls>
    <source src="audio/Directions-I.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
  <br><br><br><br><br><br>
  <h2>Pharoh's Dance</h2>
  <object data="http://aperionproject.com/Music-Study-Area/pdfs/pharohs-dance.pdf" type="application/pdf" height="504" width="720" title="Pharohs Dance" name="Pharohs Dance">
    Your browser does not support viewing .PDF files. <a href="http://aperionproject.com/Music-Study-Area/pdfs/pharohs-dance.pdf">Pharohs Dance</a>
  </object><br><br>
  <audio controls>
    <source src="audio/pharohs-dance.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
  <br><br><br><br><br><br>
  <h2>Spanish Key</h2>
  <object data="http://aperionproject.com/Music-Study-Area/pdfs/spanish-key.pdf" type="application/pdf" height="504" width="720" title="Spanish Key" name="Spanish Key">
    Your browser does not support viewing .PDF files. <a href="http://aperionproject.com/Music-Study-Area/pdfs/spanish-key.pdf">Spanish Key</a>
  </object><br><br>
  <audio controls>
    <source src="audio/spanish-key.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
  <br><br><br><br><br><br>
  <h2>Sanctuary</h2>
  <object data="http://aperionproject.com/Music-Study-Area/pdfs/Sanctuary.pdf" type="application/pdf" height="504" width="720" title="sanctuary" name="Directions">
    Your browser does not support viewing .PDF files. <a href="http://aperionproject.com/Music-Study-Area/pdfs/Sanctuary.pdf">Sanctuary</a>
  </object>
  <br><br>
  <audio controls>
    <source src="audio/sanctuary.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
  <br><br><br><br><br><br>
  <h2>Yesternow</h2>
  <object data="http://aperionproject.com/Music-Study-Area/pdfs/Yesternow.pdf" type="application/pdf" height="504" width="720" title="Yesternow" name="Yesternow">
    Your browser does not support viewing .PDF files. <a href="http://aperionproject.com/Music-Study-Area/pdfs/Yesternow.pdf">yesternow</a>
  </object><br><br>
  <audio controls>
    <source src="audio/yesternow.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
<br><br><br><br><br><br>
  <h2>Right Off</h2>
  <object data="http://aperionproject.com/Music-Study-Area/pdfs/right-off.pdf" type="application/pdf" height="504" width="720" title="Right Off" name="Right Off">
    Your browser does not support viewing .PDF files. <a href="http://aperionproject.com/Music-Study-Area/pdfs/right-off.pdf">Right Off</a>
  </object><br><br>
  <audio controls>
    <source src="audio/right-off.mp3" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
</center>
</body>
</html>
