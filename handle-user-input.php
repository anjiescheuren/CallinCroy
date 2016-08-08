<!-- <?php

 header('Content-type: text/xml');
 echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	//Create variable with user input.
	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 1)
	{
		echo '<Play>https://callin-croy.herokuapp.com/lemonlime.mp3</Play>';
	}
	elseif ($user_pushed == 2)
	{
		echo '<Play>https://callin-croy.herokuapp.com/Dreamphone.mp3</Play>';
	}
	elseif ($user_pushed ==3)
	{
		echo '<Play>https://callin-croy.herokuapp.com/lemonlime.mp3</Play>';
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
    <Play>https://callin-croy.herokuapp.com/modernlove.mp3</Play>
  <?php
      break;
    case "2":
  ?>
    <Play>https://callin-croy.herokuapp.com/thirdofthetime.mp3</Play>
  <?php
      break;
    case "3":
  ?>
    <Play>https://callin-croy.herokuapp.com/worldwaiting.mp3</Play>
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

