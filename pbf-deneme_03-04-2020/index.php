
<?php
//index.php

$error = '';
$isimsoyisim = '';
$yas = '';
$cinsiyet = '';
$email = '';
$gsm1 = '';
$gsm2 = '';
$yakinadi = '';
$yakinTel = '';
$okul1 = '';
$bolum1 = '';
$meslek1 = '';
$mezun = '';
$sSinif = '';
$okul2 = '';
$bolum2 = '';
$meslek2 = '';
$ikaSehir = '';
$ilce = '';
$mahalle = '';
$excel = '';
$ilgiAlanı = '';
$kutSehir = '';
$gas = array();
$sed = '';
$sbd = '';
$asd = '';
$ybText = '';
$yb = '';
$gaf = array();
$deneyimText = '';
$refText = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);

 return $string;
}

if(isset($_POST["submit"]))
{


 if(empty($_POST["isimsoyisim"]))
 {
  $error .= '<p><label class="text-danger">Lütfen tam isminizi giriniz.</label></p>';
 }
 else
 {
  $isimsoyisim = clean_text($_POST["isimsoyisim"]);
  if(!preg_match("/^[a-zA-ZZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$isimsoyisim))
  {
   $error .= '<p><label class="text-danger">İsim yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }



 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Lütfen e-mail adresinizi giriniz.</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Geçersiz e-posta adresi</label></p>';
  }
 }



 if(empty($_POST["gsm1"]))
 {
  $error .= '<p><label class="text-danger">Lütfen telefon numaranızı giriniz!</label></p>';
 }
 else
 {
  $gsm1 = clean_text($_POST["gsm1"]);
  if(!preg_match("/^[0]+[5]+[0-9]{9}$/",$gsm1))
  {
   $error .= '<p><label class="text-danger">Telefon numaranızı boşluk bırakmadan ve "05" yazarak giriniz. Örn: 05999999999</label></p>';
  }
 }



 if(empty($_POST["gsm2"]))
 {
  $gsm2 = 'NULL';
 }
 else
 {
  $gsm2 = clean_text($_POST["gsm2"]);
  if(!preg_match("/^[0]+[5]+[0-9]{9}$/",$gsm2))
  {
   $error .= '<p><label class="text-danger">Telefon numaranızı boşluk bırakmadan ve "05" yazarak giriniz. Örn: 05999999999</label></p>';
  }
 }



 if(empty($_POST["yas"]))
 {
  $error .= '<p><label class="text-danger">Lütfen yaşınızı giriniz!</label></p>';
 }
 else
 {
  $yas = clean_text($_POST["yas"]);
  if(!preg_match("/^[0-9]{2}$/",$yas))
  {
   $error .= '<p><label class="text-danger">Lütfen sadece 18\'den büyük 2 haneli sayı giriniz.</label></p>';
  }
  else
  {
  	if(number_format($yas)<18)
  	{
  		$error .= '<p><label class="text-danger">18 Yaşından büyük olmanız gerekmektedir!</label></p>';
  	}
  }
 }



 if(!isset($_POST['optradio']))
 {
  $error .= '<p><label class="text-danger">Lütfen cinsiyetinizi seçiniz!</label></p>';
 }
 else
 {
  $optradio = clean_text($_POST["optradio"]);
 }
 
 

 if(empty($_POST["yakinadi"]))
 {
  $error .= '<p><label class="text-danger">Lütfen ulaşabileceğimiz bir yakınınızın tam adını yazınız.</label></p>';
 }
 else
 {
  $yakinadi = clean_text($_POST["yakinadi"]);
  if(!preg_match("/^[a-zA-Z ]{0,30}$/",$yakinadi))
  {
   $error .= '<p><label class="text-danger">Yİsim yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }



 if(empty($_POST["yakinTel"]))
 {
  $error .= '<p><label class="text-danger">Lütfen yakınınıza ait telefon numarasını yazınız.</label></p>';
 }
 else
 {
  $yakinTel = clean_text($_POST["yakinTel"]);
  if(!preg_match("/^[0]+[5]+[0-9]{9}$/",$yakinTel))
  {
   $error .= '<p><label class="text-danger">YTelefon numaranızı boşluk bırakmadan ve "05" yazarak giriniz. Örn: 05999999999</label></p>';
  }
 }



 if(empty($_POST["okul1"]))
 {
  $error .= '<p><label class="text-danger">Lütfen 1okulunuzu yazınız.</label></p>';
 }
 else
 {
  $okul1 = clean_text($_POST["okul1"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$okul1))
  {
   $error .= '<p><label class="text-danger">1Okulunuzu yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }




  if(empty($_POST["bolum1"]))
 {
  $error .= '<p><label class="text-danger">Lütfen 1bölümünüzü yazınız.</label></p>';
 }
 else
 {
  $bolum1 = clean_text($_POST["bolum1"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$bolum1))
  {
   $error .= '<p><label class="text-danger">1Bölümünüzü yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }




  if(empty($_POST["meslek1"]))
 {
  $error .= '<p><label class="text-danger">Lütfen mesleğinizi yazınız.</label></p>';
 }
 else
 {
  $meslek1 = clean_text($_POST["meslek1"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$meslek1))
  {
   $error .= '<p><label class="text-danger">Mesleğinizi yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }



  if(!isset($_POST['mezun']))
 {
  $error .= '<p><label class="text-danger">Lütfen okul devam durumunuzu belirtiniz!</label></p>';
 }
 else
 {
  $mezun = clean_text($_POST["mezun"]);
  if($mezun == 'Devam Ediyor')
  {
  	  if(!isset($_POST['sSinif']) || $_POST['sSinif'] == 'sinif_bos')
		 {
		  $error .= '<p><label class="text-danger">Lütfen sınıfınızı seçiniz!</label></p>';
		 }
		 else
		 {
		  $sSinif = clean_text($_POST["sSinif"]);
		 }
  }
 }


 



  if(empty($_POST["okul2"]))
 {
  $okul2 = 'NULL';
 }
 else
 {
  $okul2 = clean_text($_POST["okul2"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$okul2))
  {
   $error .= '<p><label class="text-danger">Okulunuzu yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }




  if(empty($_POST["bolum2"]))
 {
  $bolum2 = 'NULL';
 }
 else
 {
  $bolum2 = clean_text($_POST["bolum2"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$bolum2))
  {
   $error .= '<p><label class="text-danger">Bölümünüzü yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }




  if(empty($_POST["meslek2"]))
 {
  $meslek2 = 'NULL';
 }
 else
 {
  $meslek2 = clean_text($_POST["meslek2"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$meslek2))
  {
   $error .= '<p><label class="text-danger">Mesleğinizi yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }



 if(!isset($_POST['ikaSehir']))
 {
  $error .= '<p><label class="text-danger">Lütfen ikamet ettiğiniz şehri seçiniz!</label></p>';
 }
 else
 {
  $ikaSehir = clean_text($_POST["ikaSehir"]);
 }



   if(empty($_POST["ilce"]))
 {
  $error .= '<p><label class="text-danger">Lütfen ikamet ettiğiniz ilçeyi yazınız.</label></p>';
 }
 else
 {
  $ilce = clean_text($_POST["ilce"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$ilce))
  {
   $error .= '<p><label class="text-danger">Lütfen ikamet ettiğiniz ilçeyi yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }




  if(empty($_POST["mahalle"]))
 {
  $error .= '<p><label class="text-danger">Lütfen ikamet ettiğiniz mahalleyi yazınız.</label></p>';
 }
 else
 {
  $mahalle = clean_text($_POST["mahalle"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,30}$/",$mahalle))
  {
   $error .= '<p><label class="text-danger">Mahallenizi yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }




 if(!isset($_POST['excel']))
 {
  $error .= '<p><label class="text-danger">Lütfen cinsiyetinizi seçiniz!</label></p>';
 }
 else
 {
  $excel = clean_text($_POST["excel"]);
 }



  if(empty($_POST["ilgiAlanı"]))
 {
  $ilgiAlanı = 'NULL';
 }
 else
 {
  $ilgiAlanı = clean_text($_POST["ilgiAlanı"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,300}$/",$ilgiAlanı))
  {
   $error .= '<p><label class="text-danger">Özel ilgi alanları ve yetenkelerinizi yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }



 if(!isset($_POST['kutSehir']))
 {
  $error .= '<p><label class="text-danger">Lütfen doğduğunuz şehri seçiniz!</label></p>';
 }
 else
 {
  $kutSehir = clean_text($_POST["kutSehir"]);
 }



 if(!isset($_POST['gas']))
 {
  $error .= '<p><label class="text-danger">Lütfen görev alabileceğiniz şehirleri seçiniz!</label></p>';
 }
 else
 {
 	$gasS = "- ";
 	foreach ($_POST["gas"] as $sdonusum) 
 	{
 		if(!empty($sdonusum))
 		{
 			if($sdonusum == 'Tümü')
 			{
 				$gasS .= (" " . $sdonusum );
 				break;
 			}
 			else
 			{
 				$gasS .= (" " . $sdonusum );
 			}
 		}


 	}

 	$gasS .= " -";
  
 }



 if(!isset($_POST['sed']))
 {
  $error .= '<p><label class="text-danger">Lütfen seyahat engel durumunuzu belirtiniz!</label></p>';
 }
 else
 {
  $sed = clean_text($_POST["sed"]);
 }





 if(!isset($_POST['sbd']))
 {
  $error .= '<p><label class="text-danger">Lütfen sürücü belgesi durumunuzu belirtiniz!</label></p>';
 }
 else
 {
  $sbd = clean_text($_POST["sbd"]);
 }



 if(!isset($_POST['asd']))
 {
  $error .= '<p><label class="text-danger">Lütfen askerlik durumunuzu belirtiniz!</label></p>';
 }
 else
 {
  $asd = clean_text($_POST["asd"]);
 }



 if(empty($_POST["ybText"]))
 {
  $ybText = 'NULL';
  $yb = 'NULL';
 }
 else
 {
  $ybText = clean_text($_POST["ybText"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,20}$/",$ybText))
  {
   $error .= '<p><label class="text-danger">Lütfen sadece harf ve boşluk kullanınız.</label></p>';
  }
  else
  {
  	 if(!isset($_POST["yb"]))
		 {
		 	$error .= '<p><label class="text-danger">Lütfen dil seviyenizi belirtiniz.</label></p>';
		 }
		 else
		 {
		  $yb = clean_text($_POST["yb"]);
		 }
  }
 }



 if(!isset($_POST['gaf']))
 {
  $error .= '<p><label class="text-danger">Lütfen görev alabileceğiniz faaliyetleri seçiniz!</label></p>';
 }
 else
 {
 	$gafS = "- ";
 	foreach ($_POST["gaf"] as $donusum) 
 	{
 		if(!empty($donusum))
 		{
 		$gafS .= (" " . $donusum );
 		}


 	}

 	$gafS .= " -";
  
 }



 if(empty($_POST["deneyimText"]))
 {
  $deneyimText = 'NULL';
 }
 else
 {
  $deneyimText = clean_text($_POST["deneyimText"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,300}$/",$deneyimText))
  {
   $error .= '<p><label class="text-danger">Deneyim ve üstlenilen görevleri yazarken sadece harf ve boşluk kullanınız.</label></p>';
  }
 }



 if(empty($_POST["refText"]))
 {
  $refText = 'NULL';
 }
 else
 {
  $refText = clean_text($_POST["refText"]);
  if(!preg_match("/^[a-zA-ZİıĞğşçÇŞüÜöÖ ]{0,300}$/",$refText))
  {
   $error .= '<p><label class="text-danger">Referanslarınızı belirtiniz.</label></p>';
  }
 }







 if($error == '')
 {
  $file_open = fopen("basvurular.csv", "a");
  $no_rows = count(file("basvurular.csv"));
  if($no_rows > 0)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  date_default_timezone_set("Europe/Istanbul");
  $tarih = date("d.m.Y-H:i:s");
  
  $form_data = array(
   'id_no' => $no_rows,
   'tarih'  => $tarih,
   'isimsoyisim'  => $isimsoyisim,
   'yas' => $yas,
   'cinsiyet' => $optradio,
   'gsm1' => $gsm1,
   'gsm2' => $gsm2,
   'email'  => $email,
   'yakinadi' => $yakinadi,
   'yakinTel' => $yakinTel,
   'okul1' => $okul1,
   'bolum1' => $bolum1,
   'meslek1' => $meslek1,
   'mezun' => $mezun,
   'sSinif' => $sSinif,
   'okul2' => $okul2,
   'bolum2' => $bolum2,
   'meslek2' => $meslek2,
   'ikaSehir' => $ikaSehir,
   'ilce' => $ilce,
   'mahalle' => $mahalle,
   'excel' => $excel,
   'ilgiAlanı' => $ilgiAlanı,
   'kutSehir' => $kutSehir,
   'gorSehir' => $gasS,
   'sed' => $sed,
   'sbd' => $sbd,
   'asd' => $asd,
   'ybText' => $ybText,
   'yb' => $yb,
   'gaf' => $gafS,
   'deneyimText' => $deneyimText,
   'refText' => $refText

   
  );
  fputcsv($file_open, $form_data);
  	$error = '<label class="text-success">Başvurunuz başarıyla tamamlanmıştır.</label>';
	$isimsoyisim = '';
	$yas = '';
	$cinsiyet = '';
	$email = '';
	$gsm1 = '';
	$gsm2 = '';
	$yakinadi = '';
	$yakinTel = '';
	$okul1 = '';
	$bolum1 = '';
	$meslek1 = '';
	$mezun = '';
	$sSinif = '';
	$okul2 = '';
	$bolum2 = '';
	$meslek2 = '';
	$ikaSehir = '';
	$ilce = '';
	$mahalle = '';
	$excel = '';
	$ilgiAlanı = '';
	$kutSehir = '';
	$gorSehir = '';
	$sed = '';
	$sbd = '';
	$asd = '';
	$ybText = '';
	$yb = '';
	$gaf = '';
	$deneyimText = '';
	$refText = '';
  
 }

echo $error;

}



$startPage = '<!DOCTYPE html>
<html lang="tr">
<head>
  <title>İLETİŞİM FORMU</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



</head>
<body>
 
<div class="container-fluid basvuru">
	<h3 class="baslık" align="center">ANKA DANIŞMA GRUBU PROJE PERSONELİ BAŞVURU FORMU</h3>
	<form class="basvuru" method="post">
		<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label class="labTan">Başvuru Tarihi</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<input type="datetime" class="form-control" id="currentTime" placeholder="Otomatik Çekilecektir!" name="datetime" disabled>
	  		</div>
	  		<div class="col-xs-12 col-md-2 col-md-offset-1">
	  			<label class="labTan">Ad Soyad<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<input type="text" class="form-control" id="adsoyad" placeholder="Ad Soyad..." name="isimsoyisim" maxlength="30">
	  		</div>
    	</div>

    	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label class="labTan">Yaş<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<input type="number" class="form-control" id="yas" placeholder="Yaşınız..." maxlength="2" name="yas" >
	  		</div>
	  		<div class="col-xs-12 col-md-2 col-md-offset-1">
	  			<label class="labTan">Cinsiyet<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<label class="opRad">
	  				<input type="radio" name="optradio" value="Erkek"> Erkek
	  			</label>
	  			<label class="opRad">
	  				<input type="radio" name="optradio" value="Kadın"> Kadın
	  			</label>
	  		</div>
    	</div>

    	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label class="labTan">GSM1<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  				<input type="tel" class="form-control tel" id="tel1" placeholder="1.) 05xxxxxxxxx" maxlength="11" name="gsm1" >
	  		</div>
	  		<div class="col-xs-12 col-md-2 col-md-offset-1">
	  			<label class="labTan">GSM2</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  				<input type="tel" class="form-control tel" id="tel2" placeholder="2.) 05xxxxxxxxx" maxlength="11" name="gsm2">
	  		</div>
    	</div>

    	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label class="labTan">E-Mail<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<input type="email" class="form-control" id="pMail" placeholder="anka@ankaturk.com.tr" pattern="[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="30" name="email" >
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label class="labTan">Ulaşılacak Yakın Adı<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<input type="isimsoyisim" class="form-control" id="yadsoyad" name="yakinadi" maxlength="30" placeholder="Ad Soyad..." >
	  		</div>
	  		<div class="col-xs-12 col-md-2 col-md-offset-1">
	  			<label>
	  				Tel No<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  				<input type="tel" class="form-control tel" id="ytel" placeholder="05xxxxxxxxx" pattern="05+[0-9]{9}$" maxlength="11" name="yakinTel">
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label class="labTan">Okulu 1<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div class="col-xs-12 col-md-9">
	  			<input type="text" class="form-control" id="okul1" placeholder="Eskişehir Osmangazi Üniversitesi..." name="okul1" maxlength="50" >
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-2 col-md-offset-3">
	  			<input type="text" class="form-control" id="bolum1" name="bolum1" placeholder="Bölümü..." maxlength="30" >
	  		</div>
	  		<div class="col-xs-12 col-md-2">
	  			<input type="text" class="form-control" id="meslek1" name="meslek1" placeholder="Mesleği..." maxlength="30" >
	  		</div>
	  		<div id="mezCont" class="col-xs-12 col-md-3">
	  			<input class="sınıf" type="radio" id="mezun" name="mezun" value="Mezun"><label class="sınıf" for="mezun">Mezun</label>
	  			<input class="sınıf" type="radio" id="devamediyor" name="mezun" value="Devam Ediyor"><label class="sınıf" for="devamediyor">Devam Ediyor</label>
	  		</div>
	  		<div class="col-xs-12 col-md-2">
	  			<select id="sSinif" class="sSinif form-control" name="sSinif" value="sSinif">
	  				<option id="opS1" name="oSinif" value="sinif_bos" style="color: grey;">Sınıf Seçiniz..</option>
	  				<option id="opS2" name="oSinif" value="Hazırlık">Hazırlık</option>
	  				<option id="opS3" name="oSinif" value="1">1</option>
	  				<option id="opS4" name="oSinif" value="2">2</option>
	  				<option id="opS5" name="oSinif" value="3">3</option>
	  				<option id="opS6" name="oSinif" value="4">4</option>
	  				<option id="opS7" name="oSinif" value="5">5</option>
	  				<option id="opS8" name="oSinif" value="6">6</option>
	  			</select>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Okulu 2
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-9">
	  				<input type="text" class="form-control" id="oku2" name="okul2" placeholder="Eskişehir Osmangazi Üniversitesi..." maxlength="50">
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-2 col-md-offset-3">
	  			<input type="text" class="form-control" id="bolum2" name="bolum2" placeholder="Bölümü..." maxlength="30" >
	  		</div>
	  		<div class="col-xs-12 col-md-2">
	  			<input type="text" class="form-control" id="meslek2" name="meslek2" placeholder="Mesleği..." maxlength="30" >
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-2">
	  			<label>
	  				İkamet Ettiği İl<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-2 col-md-offset-1">
	  			<select name="ikaSehir" class="sehir form-control">
				    <option value="0">İl Seçiniz..</option>
				    <option value="Adana">Adana</option>
				    <option value="Adıyaman">Adıyaman</option>
				    <option value="Afyonkarahisar">Afyonkarahisar</option>
				    <option value="Ağrı">Ağrı</option>
				    <option value="Amasya">Amasya</option>
				    <option value="Ankara">Ankara</option>
				    <option value="Antalya">Antalya</option>
				    <option value="Artvin">Artvin</option>
				    <option value="Aydın">Aydın</option>
				    <option value="Balıkesir">Balıkesir</option>
				    <option value="Bilecik">Bilecik</option>
				    <option value="Bingöl">Bingöl</option>
				    <option value="Bitlis">Bitlis</option>
				    <option value="Bolu">Bolu</option>
				    <option value="Burdur">Burdur</option>
				    <option value="Bursa">Bursa</option>
				    <option value="Çanakkale">Çanakkale</option>
				    <option value="Çankırı">Çankırı</option>
				    <option value="Çorum">Çorum</option>
				    <option value="Denizli">Denizli</option>
				    <option value="Diyarbakır">Diyarbakır</option>
				    <option value="Edirne">Edirne</option>
				    <option value="Elazığ">Elazığ</option>
				    <option value="Erzincan">Erzincan</option>
				    <option value="Erzurum">Erzurum</option>
				    <option value="Eskişehir">Eskişehir</option>
				    <option value="Gaziantep">Gaziantep</option>
				    <option value="Giresun">Giresun</option>
				    <option value="Gümüşhane">Gümüşhane</option>
				    <option value="Hakkâri">Hakkâri</option>
				    <option value="Hatay">Hatay</option>
				    <option value="Isparta">Isparta</option>
				    <option value="Mersin">Mersin</option>
				    <option value="İstanbul">İstanbul</option>
				    <option value="İzmir">İzmir</option>
				    <option value="Kars">Kars</option>
				    <option value="Kastamonu">Kastamonu</option>
				    <option value="Kayseri">Kayseri</option>
				    <option value="Kırklareli">Kırklareli</option>
				    <option value="Kırşehir">Kırşehir</option>
				    <option value="Kocaeli">Kocaeli</option>
				    <option value="Konya">Konya</option>
				    <option value="Kütahya">Kütahya</option>
				    <option value="Malatya">Malatya</option>
				    <option value="Manisa">Manisa</option>
				    <option value="Kahramanmaraş">Kahramanmaraş</option>
				    <option value="Mardin">Mardin</option>
				    <option value="Muğla">Muğla</option>
				    <option value="Muş">Muş</option>
				    <option value="Nevşehir">Nevşehir</option>
				    <option value="Niğde">Niğde</option>
				    <option value="Ordu">Ordu</option>
				    <option value="Rize">Rize</option>
				    <option value="Sakarya">Sakarya</option>
				    <option value="Samsun">Samsun</option>
				    <option value="Siirt">Siirt</option>
				    <option value="Sinop">Sinop</option>
				    <option value="Sivas">Sivas</option>
				    <option value="Tekirdağ">Tekirdağ</option>
				    <option value="Tokat">Tokat</option>
				    <option value="Trabzon">Trabzon</option>
				    <option value="Tunceli">Tunceli</option>
				    <option value="Şanlıurfa">Şanlıurfa</option>
				    <option value="Uşak">Uşak</option>
				    <option value="Van">Van</option>
				    <option value="Yozgat">Yozgat</option>
				    <option value="Zonguldak">Zonguldak</option>
				    <option value="Aksaray">Aksaray</option>
				    <option value="Bayburt">Bayburt</option>
				    <option value="Karaman">Karaman</option>
				    <option value="Kırıkkale">Kırıkkale</option>
				    <option value="Batman">Batman</option>
				    <option value="Şırnak">Şırnak</option>
				    <option value="Bartın">Bartın</option>
				    <option value="Ardahan">Ardahan</option>
				    <option value="Iğdır">Iğdır</option>
				    <option value="Yalova">Yalova</option>
				    <option value="Karabük">Karabük</option>
				    <option value="Kilis">Kilis</option>
				    <option value="Osmaniye">Osmaniye</option>
				    <option value="Düzce">Düzce</option>
				</select>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<label>
	  				İlçe<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-2">
	  			<input type="text" name="ilce" maxlength="20">
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<label>
	  				Mahalle<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-2">
	  			<input type="text" name="mahalle" maxlength="20">
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Excel Bilgisi<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="excel" id="azExcel" value="Az"><label class="sınıf" for="azExcel">Az</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="excel" id="ortaExcel" value="Orta"><label class="sınıf" for="ortaExcel">Orta</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="excel" id="iyiExcel" value="İyi"><label class="sınıf" for="iyiExcel">İyi</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="excel" id="ileriExcel" value="İleri"><label class="sınıf" for="ileriExcel">İleri</label>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Özel İlgi Alanları/Yetenekler<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-9">
	  			<textarea type="text" id="ilgiAlanı" name="ilgiAlanı" class="form-control ilgiAlanı" maxlength="300" placeholder="İlgi alanlarınız ve yetenekleriniz arasında - işareti kullanınız. Örn: Voleybol oynamak-Koşmak-Kitap Okumak."></textarea>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Aslen Nerelisiniz?<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<select name="kutSehir" class="sehir form-control">
				    <option value="0">Lütfen kayıtlı olduğunuz ili seçiniz..</option>
				    <option value="Adana">Adana</option>
				    <option value="Adıyaman">Adıyaman</option>
				    <option value="Afyonkarahisar">Afyonkarahisar</option>
				    <option value="Ağrı">Ağrı</option>
				    <option value="Amasya">Amasya</option>
				    <option value="Ankara">Ankara</option>
				    <option value="Antalya">Antalya</option>
				    <option value="Artvin">Artvin</option>
				    <option value="Aydın">Aydın</option>
				    <option value="Balıkesir">Balıkesir</option>
				    <option value="Bilecik">Bilecik</option>
				    <option value="Bingöl">Bingöl</option>
				    <option value="Bitlis">Bitlis</option>
				    <option value="Bolu">Bolu</option>
				    <option value="Burdur">Burdur</option>
				    <option value="Bursa">Bursa</option>
				    <option value="Çanakkale">Çanakkale</option>
				    <option value="Çankırı">Çankırı</option>
				    <option value="Çorum">Çorum</option>
				    <option value="Denizli">Denizli</option>
				    <option value="Diyarbakır">Diyarbakır</option>
				    <option value="Edirne">Edirne</option>
				    <option value="Elazığ">Elazığ</option>
				    <option value="Erzincan">Erzincan</option>
				    <option value="Erzurum">Erzurum</option>
				    <option value="Eskişehir">Eskişehir</option>
				    <option value="Gaziantep">Gaziantep</option>
				    <option value="Giresun">Giresun</option>
				    <option value="Gümüşhane">Gümüşhane</option>
				    <option value="Hakkâri">Hakkâri</option>
				    <option value="Hatay">Hatay</option>
				    <option value="Isparta">Isparta</option>
				    <option value="Mersin">Mersin</option>
				    <option value="İstanbul">İstanbul</option>
				    <option value="İzmir">İzmir</option>
				    <option value="Kars">Kars</option>
				    <option value="Kastamonu">Kastamonu</option>
				    <option value="Kayseri">Kayseri</option>
				    <option value="Kırklareli">Kırklareli</option>
				    <option value="Kırşehir">Kırşehir</option>
				    <option value="Kocaeli">Kocaeli</option>
				    <option value="Konya">Konya</option>
				    <option value="Kütahya">Kütahya</option>
				    <option value="Malatya">Malatya</option>
				    <option value="Manisa">Manisa</option>
				    <option value="Kahramanmaraş">Kahramanmaraş</option>
				    <option value="Mardin">Mardin</option>
				    <option value="Muğla">Muğla</option>
				    <option value="Muş">Muş</option>
				    <option value="Nevşehir">Nevşehir</option>
				    <option value="Niğde">Niğde</option>
				    <option value="Ordu">Ordu</option>
				    <option value="Rize">Rize</option>
				    <option value="Sakarya">Sakarya</option>
				    <option value="Samsun">Samsun</option>
				    <option value="Siirt">Siirt</option>
				    <option value="Sinop">Sinop</option>
				    <option value="Sivas">Sivas</option>
				    <option value="Tekirdağ">Tekirdağ</option>
				    <option value="Tokat">Tokat</option>
				    <option value="Trabzon">Trabzon</option>
				    <option value="Tunceli">Tunceli</option>
				    <option value="Şanlıurfa">Şanlıurfa</option>
				    <option value="Uşak">Uşak</option>
				    <option value="Van">Van</option>
				    <option value="Yozgat">Yozgat</option>
				    <option value="Zonguldak">Zonguldak</option>
				    <option value="Aksaray">Aksaray</option>
				    <option value="Bayburt">Bayburt</option>
				    <option value="Karaman">Karaman</option>
				    <option value="Kırıkkale">Kırıkkale</option>
				    <option value="Batman">Batman</option>
				    <option value="Şırnak">Şırnak</option>
				    <option value="Bartın">Bartın</option>
				    <option value="Ardahan">Ardahan</option>
				    <option value="Iğdır">Iğdır</option>
				    <option value="Yalova">Yalova</option>
				    <option value="Karabük">Karabük</option>
				    <option value="Kilis">Kilis</option>
				    <option value="Osmaniye">Osmaniye</option>
				    <option value="Düzce">Düzce</option>
				</select>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Görev Alabileceğiniz Şehirler?<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
		  		<div class="sehirSec" onclick="secenekGoster()">
		  			<select name="gorSehir" class="sehir form-control">
				        <option disabled selected value="düzenlenecek">Lütfen şehir/şehirleri seçiniz!</option>
				    </select>
				    <div class="opKapama"></div>
				</div>
				<div id="checkSehir">
					<label for="gas0"><input type="checkbox" name="gas[]" id="gas0" value="Tümü">Tümü</label>
				    <label for="gas1"><input type="checkbox" name="gas[]" id="gas1" value="Adana">Adana</label>
				    <label for="gas2"><input type="checkbox" name="gas[]" id="gas2" value="Adıyaman">Adıyaman</label>
				    <label for="gas3"><input type="checkbox" name="gas[]" id="gas3" value="Afyonkarahisar">Afyonkarahisar</label>
				    <label for="gas4"><input type="checkbox" name="gas[]" id="gas4" value="Ağrı">Ağrı</label>
				    <label for="gas5"><input type="checkbox" name="gas[]" id="gas5" value="Amasya">Amasya</label>
				    <label for="gas6"><input type="checkbox" name="gas[]" id="gas6" value="Ankara">Ankara</label>
				    <label for="gas7"><input type="checkbox" name="gas[]" id="gas7" value="Antalya">Antalya</label>
				    <label for="gas8"><input type="checkbox" name="gas[]" id="gas8" value="Artvin">Artvin</label>
				    <label for="gas9"><input type="checkbox" name="gas[]" id="gas9" value="Aydın">Aydın</label>
				    <label for="gas10"><input type="checkbox" name="gas[]" id="gas10" value="Balıkesir">Balıkesir</label>
				    <label for="gas11"><input type="checkbox" name="gas[]" id="gas11" value="Bilecik">Bilecik</label>
				    <label for="gas12"><input type="checkbox" name="gas[]" id="gas12" value="Bingöl">Bingöl</label>
				    <label for="gas13"><input type="checkbox" name="gas[]" id="gas13" value="Bitlis">Bitlis</label>
				    <label for="gas14"><input type="checkbox" name="gas[]" id="gas14" value="Bolu">Bolu</label>
				    <label for="gas15"><input type="checkbox" name="gas[]" id="gas15" value="Burdur">Burdur</label>
				    <label for="gas16"><input type="checkbox" name="gas[]" id="gas16" value="Bursa">Bursa</label>
				    <label for="gas17"><input type="checkbox" name="gas[]" id="gas17" value="Çanakkale">Çanakkale</label>
				    <label for="gas18"><input type="checkbox" name="gas[]" id="gas18" value="Çankırı">Çankırı</label>
				    <label for="gas19"><input type="checkbox" name="gas[]" id="gas19" value="Çorum">Çorum</label>
				    <label for="gas20"><input type="checkbox" name="gas[]" id="gas20" value="Denizli">Denizli</label>
				    <label for="gas21"><input type="checkbox" name="gas[]" id="gas21" value="Diyarbakır">Diyarbakır</label>
				    <label for="gas22"><input type="checkbox" name="gas[]" id="gas22" value="Edirne">Edirne</label>
				    <label for="gas23"><input type="checkbox" name="gas[]" id="gas23" value="Elazığ">Elazığ</label>
				    <label for="gas24"><input type="checkbox" name="gas[]" id="gas24" value="Erzincan">Erzincan</label>
				    <label for="gas25"><input type="checkbox" name="gas[]" id="gas25" value="Erzurum">Erzurum</label>
				    <label for="gas26"><input type="checkbox" name="gas[]" id="gas26" value="Eskişehir">Eskişehir</label>
				    <label for="gas27"><input type="checkbox" name="gas[]" id="gas27" value="Gaziantep">Gaziantep</label>
				    <label for="gas28"><input type="checkbox" name="gas[]" id="gas28" value="Giresun">Giresun</label>
				    <label for="gas29"><input type="checkbox" name="gas[]" id="gas29" value="Gümüşhane">Gümüşhane</label>
				    <label for="gas30"><input type="checkbox" name="gas[]" id="gas30" value="Hakkâri">Hakkâri</label>
				    <label for="gas31"><input type="checkbox" name="gas[]" id="gas31" value="Hatay">Hatay</label>
				    <label for="gas32"><input type="checkbox" name="gas[]" id="gas32" value="Isparta">Isparta</label>
				    <label for="gas33"><input type="checkbox" name="gas[]" id="gas33" value="Mersin">Mersin</label>
				    <label for="gas34"><input type="checkbox" name="gas[]" id="gas34" value="İstanbul">İstanbul</label>
				    <label for="gas35"><input type="checkbox" name="gas[]" id="gas35" value="İzmir">İzmir</label>
				    <label for="gas36"><input type="checkbox" name="gas[]" id="gas36" value="Kars">Kars</label>
				    <label for="gas37"><input type="checkbox" name="gas[]" id="gas37" value="Kastamonu">Kastamonu</label>
				    <label for="gas38"><input type="checkbox" name="gas[]" id="gas38" value="Kayseri">Kayseri</label>
				    <label for="gas39"><input type="checkbox" name="gas[]" id="gas39" value="Kırklareli">Kırklareli</label>
				    <label for="gas40"><input type="checkbox" name="gas[]" id="gas40" value="Kırşehir">Kırşehir</label>
				    <label for="gas41"><input type="checkbox" name="gas[]" id="gas41" value="Kocaeli">Kocaeli</label>
				    <label for="gas42"><input type="checkbox" name="gas[]" id="gas42" value="Konya">Konya</label>
				    <label for="gas43"><input type="checkbox" name="gas[]" id="gas43" value="Kütahya">Kütahya</label>
				    <label for="gas44"><input type="checkbox" name="gas[]" id="gas44" value="Malatya">Malatya</label>
				    <label for="gas45"><input type="checkbox" name="gas[]" id="gas45" value="Manisa">Manisa</label>
				    <label for="gas46"><input type="checkbox" name="gas[]" id="gas46" value="Kahramanmaraş">Kahramanmaraş</label>
				    <label for="gas47"><input type="checkbox" name="gas[]" id="gas47" value="Mardin">Mardin</label>
				    <label for="gas48"><input type="checkbox" name="gas[]" id="gas48" value="Muğla">Muğla</label>
				    <label for="gas49"><input type="checkbox" name="gas[]" id="gas49" value="Muş">Muş</label>
				    <label for="gas50"><input type="checkbox" name="gas[]" id="gas50" value="Nevşehir">Nevşehir</label>
				    <label for="gas51"><input type="checkbox" name="gas[]" id="gas51" value="Niğde">Niğde</label>
				    <label for="gas52"><input type="checkbox" name="gas[]" id="gas52" value="Ordu">Ordu</label>
				    <label for="gas53"><input type="checkbox" name="gas[]" id="gas53" value="Rize">Rize</label>
				    <label for="gas54"><input type="checkbox" name="gas[]" id="gas54" value="Sakarya">Sakarya</label>
				    <label for="gas55"><input type="checkbox" name="gas[]" id="gas55" value="Samsun">Samsun</label>
				    <label for="gas56"><input type="checkbox" name="gas[]" id="gas56" value="Siirt">Siirt</label>
				    <label for="gas57"><input type="checkbox" name="gas[]" id="gas57" value="Sinop">Sinop</label>
				    <label for="gas58"><input type="checkbox" name="gas[]" id="gas58" value="Sivas">Sivas</label>
				    <label for="gas59"><input type="checkbox" name="gas[]" id="gas59" value="Tekirdağ">Tekirdağ</label>
				    <label for="gas60"><input type="checkbox" name="gas[]" id="gas60" value="Tokat">Tokat</label>
				    <label for="gas61"><input type="checkbox" name="gas[]" id="gas61" value="Trabzon">Trabzon</label>
				    <label for="gas62"><input type="checkbox" name="gas[]" id="gas62" value="Tunceli">Tunceli</label>
				    <label for="gas63"><input type="checkbox" name="gas[]" id="gas63" value="Şanlıurfa">Şanlıurfa</label>
				    <label for="gas64"><input type="checkbox" name="gas[]" id="gas64" value="Uşak">Uşak</label>
				    <label for="gas65"><input type="checkbox" name="gas[]" id="gas65" value="Van">Van</label>
				    <label for="gas66"><input type="checkbox" name="gas[]" id="gas66" value="Yozgat">Yozgat</label>
				    <label for="gas67"><input type="checkbox" name="gas[]" id="gas67" value="Zonguldak">Zonguldak</label>
				    <label for="gas68"><input type="checkbox" name="gas[]" id="gas68" value="Aksaray">Aksaray</label>
				    <label for="gas69"><input type="checkbox" name="gas[]" id="gas69" value="Bayburt">Bayburt</label>
				    <label for="gas70"><input type="checkbox" name="gas[]" id="gas70" value="Karaman">Karaman</label>
				    <label for="gas71"><input type="checkbox" name="gas[]" id="gas71" value="Kırıkkale">Kırıkkale</label>
				    <label for="gas72"><input type="checkbox" name="gas[]" id="gas72" value="Batman">Batman</label>
				    <label for="gas73"><input type="checkbox" name="gas[]" id="gas73" value="Şırnak">Şırnak</label>
				    <label for="gas74"><input type="checkbox" name="gas[]" id="gas74" value="Bartın">Bartın</label>
				    <label for="gas75"><input type="checkbox" name="gas[]" id="gas75" value="Ardahan">Ardahan</label>
				    <label for="gas76"><input type="checkbox" name="gas[]" id="gas76" value="Iğdır">Iğdır</label>
				    <label for="gas77"><input type="checkbox" name="gas[]" id="gas77" value="Yalova">Yalova</label>
				    <label for="gas78"><input type="checkbox" name="gas[]" id="gas78" value="Karabük">Karabük</label>
				    <label for="gas79"><input type="checkbox" name="gas[]" id="gas79" value="Kilis">Kilis</label>
				    <label for="gas80"><input type="checkbox" name="gas[]" id="gas80" value="Osmaniye">Osmaniye</label>
				    <label for="gas81"><input type="checkbox" name="gas[]" id="gas81" value="Düzce">Düzce</label>
				</div>
			</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Seyahat Engel Durumu<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="sed" id="sed1" value="Var"><label class="sınıf" for="sed1">Var</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="sed" id="sed2" value="Yok"><label class="sınıf" for="sed2">Yok</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3 col-md-offset-2">
	  			<label>
	  				Sürücü Belgesi Durumu<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="sbd" id="sbd1" value="Var"><label class="sınıf" for="sbd1">Var</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="sbd" id="sbd2" value="Yok"><label class="sınıf" for="sbd2">Yok</label>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Askerlik Durumu?<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="asd" id="asd1" value="Evet"><label class="sınıf" for="asd1">Evet</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="asd" id="asd2" value="Hayır"><label class="sınıf" for="asd2">Hayır</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="asd" id="asd3" value="Muaf"><label class="sınıf" for="asd3">Muaf</label>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-3">
	  			<label>
	  				Yabancı Dil:<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div>
	  			</label>
	  		</div>
	  		<div class="col-xs-12 col-md-3">
	  			<input type="text" class="form-control" name="ybText" id="ybText" placeholder="İngilizce.." maxlength="20">
	  		</div>
	  		<div class="col-xs-12 col-md-1 col-md-offset-1">
	  			<input type="radio" name="yb" id="yb1" value="Az"><label class="sınıf" for="yb1">Az</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="yb" id="yb2" value="Orta"><label class="sınıf" for="yb2">Orta</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="yb" id="yb3" value="İyi"><label class="sınıf" for="yb3">İyi</label>
	  		</div>
	  		<div class="col-xs-12 col-md-1">
	  			<input type="radio" name="yb" id="yb4" value="İleri"><label class="sınıf" for="yb4">İleri</label>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div align="center" class="col-xs-12 col-md-12"><label class="labTan">Görev Alabileceğiniz Faaliyetler<span id="requiredSpan" class="required">*</span><div class="required">Zorunlu Alan. Lütfen Doldurunuz.</div></label>
	  		</div>
	  		<div align="center" class="col-xs-12 col-md-3">
	  			<label for="gaf1"><input type="checkbox" id="gaf1" name="gaf[]" value="Saha Anketi">Saha Anketi</label>
	  		</div>
	  		<div align="center" class="col-xs-12 col-md-3">
	  			<label for="gaf2"><input type="checkbox" id="gaf2" name="gaf[]" value="Mülakat">Mülakat</label>
	  		</div>
	  		<div align="center" class="col-xs-12 col-md-3">
	  			<label for="gaf3"><input type="checkbox" id="gaf3" name="gaf[]" value="Çağrı Merkezi Anketi">Çağrı Merkezi Anket</label>
	  		</div>
	  		<div align="center" class="col-xs-12 col-md-3">
	  			<label for="gaf4"><input type="checkbox" id="gaf4" name="gaf[]" value="Veri İşleme">Veri İşleme</label>
	  		</div>

	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-12"><label>İş/Proje deneyimi ve üstlenilen görevler</label></div>
	  		<div class="col-xs-12 col-md-12"><textarea id="ipdg" class="form-control ilgiAlanı son" name="deneyimText" maxlength="300"></textarea></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-xs-12 col-md-12"><label>Referanslar</label></div>
	  		<div class="col-xs-12 col-md-12"><textarea id="ipdg" class="form-control ilgiAlanı" name="refText" maxlength="300"></textarea></div>
	  	</div>

   		<input id="subForm" type="submit" name="submit" class="btn btn-info" value="Submit" />
  	</form>
</div>
<div class="requiredSayfa">* Zorunlu Alan. Lütfen Doldurunuz.</div>

<script src="main.js"></script>

</body>
</html>';

print $startPage;

?>


