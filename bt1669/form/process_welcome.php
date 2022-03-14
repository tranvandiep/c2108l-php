<?php
$fullname = $email = $address = $pwd = "";
if(isset($_COOKIE['fullname'])) {
	$fullname = $_COOKIE['fullname'];
}
if(isset($_COOKIE['email'])) {
	$email = $_COOKIE['email'];
}
if(isset($_COOKIE['address'])) {
	$address = $_COOKIE['address'];
}
if(isset($_COOKIE['pwd'])) {
	$pwd = $_COOKIE['pwd'];
}