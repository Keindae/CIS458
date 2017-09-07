<?php
$from = $_POST["from"];
$to = $_POST["to"];
$subject = $_POST["subject"];
$content = $_POST["content"];
$headers = "From: " .$from;

mail($to,$subject,$content,$headers);

echo "<h1>Eamil was sent out <br><br>";
echo "<h1>Please do not misuse this site. You will be caught<br></h1>";

?>
