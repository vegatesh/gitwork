<?php
echo"Survey-Form";
echo "<br>";
$SweetName=$_POST['textbox1'];
echo " Sweet Name: $SweetName <br>";
$Email=$_POST['textbox2']; 
echo " Email: $Email <br>";
$Age=$_POST['textbox3']; 
echo "Age: $Age <br>";
$Position=$_POST['currentPos'];
echo "Curren Position:$Position <br>";
$CodeCamp=$_POST['position'];
echo "Position:$CodeCamp <br>";
$RatingcodeCamp=$_POST['star']; 
echo "Rating:$RatingcodeCamp <br>";
$Improve=$_POST['projects'];
echo "Improvising:$Improve <br>";
$message=$_POST['commet'];
echo "comments:$message <br>";
?>
