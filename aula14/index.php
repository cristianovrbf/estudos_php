<?php
echo "<pre>";
require_once 'Video.php';
require_once 'Subscribed.php';
require_once 'Visualization.php';

$v[0] = new Video("class of html");
$v[1] = new Video("class of css");
$v[2] = new Video("class of javascript");

$s[0] = new Subscribed("Cristiano", 20, "M", "cristianovrbf");
$s[1] = new Subscribed("Maria Luiza", 19, "F", "malu1010");
$s[2] = new Subscribed("Fiona", 10, "F", "fionasShrek");
$s[3] = new Subscribed("Dino", 6, "M", "dino0304");

print_r($v);

print_r($s);

$vis[0] = new Visualization($s[0], $v[2]);
$vis[0]->avaliatePerNote(4);
$vis[1] = new Visualization($s[1], $v[2]);
$vis[1]->avaliate();
$vis[2] = new Visualization($s[2], $v[2]);
$vis[2]->avaliatePerNote(7);
$vis[3]  = new Visualization($s[3], $v[2]);
$vis[3]->avaliatePerPercentage(60);

print_r($vis);
print_r($v);
print_r($s);
?>