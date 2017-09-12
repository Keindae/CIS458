<?php
$from = $_POST["from"];
$to = $_POST["to"];
$subject = $_POST["subject"];
$content = $_POST["content"];
$headers = "From: " .$from;

mail($to,$subject,$content,$headers);

echo "<h1>Creating a List</h1>";
echo "<ul>
        <li>Songs</li>
        <li>Dance</li>
        <li>Workout</li>
        </ul>";

echo "<h1>Email was sent out <br><br>";
echo "<h1>Please do not misuse this site. You will be caught<br></h1>";

?>
