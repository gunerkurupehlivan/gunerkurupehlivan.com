<?php
$servername="localhost";
$username="root";
$password="";
$teugetsename="site";

$connect = new mysqli($servername,$username,$password,$teugetsename);
if ($connect->connect_error) {
  die ("bağlantı hatası");
}
$adi=$_POST["ad"];
$soyadi=$_POST["s_ad"];
$sifre=$_POST["pass"];
$telno=$_POST["t_no"];
$eposta=$_POST["e_p"];
$kadi=$_POST["k_ad"];
$ekle1="insert into giris(kadi,sifre) values('$kadi','$sifre')";
 $ekle="insert into kayit(adi,soyadi,sifre,tel,eposta,kadi) values('$adi','$soyadi','$sifre','$telno','$eposta','$kadi')";
 if ($connect->query($ekle)) {
   echo "kayıt başarıyla oluşturuldu";
 }
 else {
   echo "kayıt başarısız";
 }
 if ($connect->query($ekle1)) {
   echo "kayıt başarıyla oluşturuldu";
 }
 else {
   echo "kayıt başarısız";
 }
 ?>
