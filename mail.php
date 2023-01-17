<?php
if(!empty($_POST))
{
	$name = $_POST['fname'];	
	$useremail = $_POST['email'];	
	$phone = $_POST['phone'];	
	$siteUrl = $_POST['siteUrl'];
	$redirectUrl = 	$siteUrl."#formfocus";
	$subject = $_POST['subject'];	
	$message = "User Name : ".$name."<br />Phone : ".$phone."<br />Message : ".$_POST['message'];	
	$to = "adam@bookingtimes.com";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <'.$useremail.'>';
	mail($to,$subject,$message,$headers);
	header('Location:'.$redirectUrl);
}
?>