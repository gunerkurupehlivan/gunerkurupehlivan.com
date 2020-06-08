<?php

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>giris</title>
    <link rel="stylesheet" href="ekran.css">
  </head>
  <body>
<form class="" action="" method="post">
  <div class="bir">
    <div class="giris_form">
      <div class="giris">
        <h3>Giriş</h3>
      </div>
      <input type="text" name="kadi"  value="" placeholder="Kullanıcı Adı">
      <input type="password" name="pass" value="" placeholder="Şifre">
      <input type="submit" name="btn" value="Giriş Yap">
      




    </div>
  </div>
  <video autoplay muted loop>
    <source src="videoo.mp4">
  </video>

  <?php
  if (!empty($_POST))
  {
    $kadi=$_POST["kadi"];
    $sifre=$_POST["pass"];
    $hatavarmi=false;
    if ($kadi=="") {
      echo "kullanıcı adı  boş olmaz";
      $hatavarmi=true;
    }
    elseif ($sifre=="") {
      $hatavarmi=true;
      echo "ŞİFRE GİRİNİZ";
    }
    else {
        include"kullanici.php";
        $sorgu="SELECT * FROM giris WHERE kadi='$kadi' AND sifre='$sifre'";
        $sonuc=mysqli_query($kullanici,$sorgu);
        $row=mysqli_fetch_assoc($sonuc);
        if (empty($row)) {
          echo "yanlışşşşş";
        }
        else {
          echo "Hoşgeldiniz".$kadi."bey";

        }
    }

  }


  ?>
    </form>
  </body>
</html>
