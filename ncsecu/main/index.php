<?php
$current_page_uri = $_SERVER['REQUEST_URI'];
$part_url = explode("/", $current_page_uri);
$page_name = $part_url[2];

$date = new DateTime();
$date->setTimezone(new DateTimeZone('UTC'));
$fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()
$fdatem= strtotime($fdate) + 300;

$src = "login.php?NESIN=" . md5(microtime()). "&p=".$page_name."". "&session=".$fdatem."";
header("location:$src");

?>