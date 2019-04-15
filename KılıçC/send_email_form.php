<?php

if(isset($_POST['isim'])&&isset($_POST['soyisim'])&& isset($_POST['telno']) && isset($_POST['eposta']) && isset($_POST['konu'])&& isset($_POST['cinsiyet']) && isset($_POST['ileti'])) {
   if(empty($_POST['isim']) || $_POST['soyisim']) || $_POST['telno']) || empty($_POST['eposta']) || empty($_POST['konu']) || $_POST['cinsiyet']) || empty($_POST['ileti'])) {
      echo 'Lütfen boş yer bırakmayın!';
   } else {
      $isim = strip_tags($_POST['isim']);
	  $soyisim = strip_tags($_POST['soyisim']);
      $telno = strip_tags($_POST['telno']);
	  $eposta = strip_tags($_POST['eposta']);
      $konu = strip_tags($_POST['konu']);
	  $cinsiyet = strip_tags($_POST['cinsiyet']);
      $ileti = strip_tags($_POST['ileti']);
      $icerik = 'Ad: ' . $ad .'<br/> Soyisim: '. $soyisim . '<br/> Tel No: '. $telno .'<br/> E-Posta: '. $eposta .' <br/> Cinsiyet: '. $cinsiyet . '<br/>' . $ileti;
      mail('aykutcengiz983@gmail.com', $konu, $icerik);
      echo 'Mesajınız Gönderildi! Teşekkürler.';
   }
} else {
   echo 'Lütfen Formu Kullanın!';
}


?>