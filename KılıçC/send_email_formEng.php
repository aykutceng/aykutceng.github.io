<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="tr">




<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>

<?php

function go ($url, $time = 0){
		if ($time) header("Refresh: {$time}; url={$url}");
		else header("Location: {$url}");
	}
	
if(isset($_POST['name'])&&isset($_POST['surname'])&& isset($_POST['pnumber']) && isset($_POST['email']) && isset($_POST['subject'])&& isset($_POST['gender']) && isset($_POST['message'])) {
   if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['pnumber']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['gender']) || empty($_POST['message'])) {
      echo 'Please fill blanks! </br> Returning to the page...';
	  go("ContactEn.htm",2);
   } else {
      $name = strip_tags($_POST['name']);
	  $surname = strip_tags($_POST['surname']);
      $pnumber = strip_tags($_POST['pnumber']);
	  $email = strip_tags($_POST['email']);
      $subject = strip_tags($_POST['subject']);
	  $gender = strip_tags($_POST['gender']);
      $message = strip_tags($_POST['message']);
      $content = 'Ad: ' . $name .'<br/> Soyisim: '. $surname . '<br/> Tel No: '. $pnumber .'<br/> E-Posta: '. $email .' <br/> Cinsiyet: '. $gender . '<br/>' . $message;
      mail('aykutcengiz983@gmail.com', $subject, $content);
      echo 'Your message has been sent! Thank you.';
   }
} else {
   echo 'Please use the form!';
}


?>




</html>