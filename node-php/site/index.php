<html>
<?php

print("welcome to php");

$dir    = '/site';
$files1 = scandir($dir);
//$files2 = scandir($dir, 1);

?><pre><?
//print_r($files1);
?></pre><?


$json = file_get_contents("http://players");
$players = json_decode($json)->players;

?><ul><?
foreach($players as $player) {
    echo("<li>$player</li>");
}
?></ul><?

?>
</html>


