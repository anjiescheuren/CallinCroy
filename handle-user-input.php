<!-- <?php

 header('Content-type: text/xml');
 echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	//Create variable with user input.
	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 1)
	{
		echo '<Play>https://api.twilio.com/cowbell.mp3</Play>';
	}
	elseif ($user_pushed == 2)
	{
		echo '<Play>https://www.dropbox.com/sh/accxby1kzr1bw7p/AAAQhTUd0NBYYRU8vRPKR_e7a/Peach%20Kelli%20Pop/Peach%20Kelli%20Pop/02%20Dreamphone.mp3</Play>';
	}
	elseif ($user_pushed ==3)
	{
		echo '<Play>https://www.dropbox.com/sh/accxby1kzr1bw7p/AAAQhTUd0NBYYRU8vRPKR_e7a/Peach%20Kelli%20Pop/Peach%20Kelli%20Pop/03%20Scorpio.mp3</Play>';
	}
	else
	{
		echo "<Say>Sorry, I can't do that yet.</Say>";
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}
	echo '</Response>';
?> -->

<?php
  $digitPushed = $_POST['Digits'];
?>
<Response>
  <?php
  switch ($digitPushed) {
    case "1":
  ?>
    <Play>#Your Ngrok Forwarding URL #/TakingBackSunday.mp3</Play>
  <?php
      break;
    case "2":
  ?>
    <Play>#Your Ngrok Forwarding URL #/BrandNew.mp3</Play>
  <?php
      break;
    case "3":
  ?>
    <Play>#Your Ngrok Forwarding URL #/SavesTheDay.mp3</Play>
  <?php
      break;
    case "4":
  ?>
    <Play>#Your Ngrok Forwarding URL #/SayAnything.mp3</Play>
  <?php
      break;
    default:
  ?>
    <Redirect>incoming-call.xml</Redirect>
  <?php
      break;
  }
  ?>
  <Pause length="8"/>
</Response>

