<?php
// Copyright (c) 2017 Michael Schade, http://mvjantzen.com
$ch = curl_init();
$url = "https://api.meetup.com/" . $_GET["group"] . "/events/" . $_GET["event"] . "/rsvps?order=time&desc=true";
curl_setopt($ch, CURLOPT_URL, $url . "&key=YOURKEYHERE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch);
curl_close($ch);
?>
