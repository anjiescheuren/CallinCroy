</pre>
<?php

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
		echo '<Redirect>handle-incoming-call.php</Redirect>';
	}
	echo '</Response>';
?>
