<?php
ob_start();
session_start();
$visitor_count = "includes/visitor_count.txt";
$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION["curr_user"] = $ip;

if (!is_writable($visitor_count)) {
  $f = fopen($visitor_count, "w");
  fwrite($f, "0");
  fclose($f);
}

$f = fopen($visitor_count, "r");
$count = fread($f, filesize($visitor_count));
fclose($f);

if (!isset($_SESSION["visited"]) && $_SESSION["curr_user"] != $_SERVER["REMOTE_ADDR"]) {
  $_SESSION["visited"] = TRUE;
  $count++;
  $f = fopen($visitor_count, "w");
  fwrite($f, $count);
  fclose($f);
}
