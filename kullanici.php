<?php
$servername="localhost";
$username="root";
$password="";
$teugetsename="site";

$kullanici = new mysqli($servername,$username,$password,$teugetsename);
if ($kullanici->connect_error)
{
  die ("bağlantı hatası".$kullanici->connect_error);
}
 ?>
