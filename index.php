<DOCTYPE html>
<html>
<head><title> Press Any key= </title> </head>
<link rel="stylesheet" href="css/index.css"></link>
<body>
<?php
  $SoundName = "";
  if($_GET['anykey']!="") {
    $input = $_GET['anykey'];
    switch($input){
      case "w" : $SoundName = "sound/marbles.wav";
        break;

      case "q" : $SoundName = "sound/poker.wav";
          break;

      case "e" : $SoundName = "sound/service.wav";
            break;

      case "r" : $SoundName = "sound/soundbible.wav";
            break;

      case "t" : $SoundName = "sound/tasmanian.wav";
            break;

      case "y" : $SoundName = "sound/van.wav";
              break;
      default: $SoundName = "Doesn't exists in libarary" ;
            }

    echo '<audio autoplay="true" style="display:none;">
          <source src="'.$SoundName.'" type="audio/wav">
            </audio>';

    }else {
      $SoundName = 'You have Enter something';
    }
?>

<div class="container">
  <h2>Please Enter the Followings(w,q,e,r,t,y)</h2>
    <p><?php echo $SoundName; ?> </p>
  <form method="GET" action ="press.php">
    <label>Enter Any key here:</label>
    <input type="text" name="anykey"/><br><br>
    <input type="submit">

  </form>

</div>
</body>
</html>
