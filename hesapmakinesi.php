<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=”author” Content=” ” />
<title>Hesap Makinesi</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="868" height="195" border="1" align="center" backcolor="red">
    <tr>
      <td height="35" colspan="4"><div align="center"><strong>HESAP MAKİNASI</strong></div></td>
    </tr>
    <tr>
      <td width="82" height="31"><strong>1.SAYI</strong></td>
      <td colspan="2"><input type="text" name="kutu1" id="kutu1" /></td>
      <td width="332" rowspan="4">Sonuç==
        <?php
//Değişkenlere Başlangıç değeri veriyoruz
$sayi1=0;
$sayi2=0;
 
//Kullanıcının yazdığı kutulardaki verileri değişkenlerimize alıyoruz
 
  $sayi1=$_POST["kutu1"];
  $sayi2=$_POST["kutu2"];
 
//Kullanıcının seçtiği  radio daki value değerini değişkenimize alıyoruz
 
  $secim=$_POST[“radio”]
 
//Hangi radio seçilmişse o işlemi yaptıracak olan if deyimlerini yazıyoruz
 
  if($secim==”a1”)
  {
                 $topla=$sayi1+$sayi2;
                 echo $topla; 
  }
 
    if($secim==”a2”)
  {
                 $cikar=$sayi1-$sayi2;
                 echo $cikar; 
  }
 
    if($secim==”a3”)
  {
                 $carpma=$sayi1*$sayi2;
                 echo $carpma; 
  }
 
    if($secim==”a4”)
  {
                 $bolme=$sayi1/$sayi2;
                 echo $bolme; 
  }
 
    if($secim==”a5”)
  {
                 $bolme=$sayi1%$sayi2;
                 echo $kalan; 
  }
   
  ?>
</td>
    </tr>
    <tr>
      <td height="27"><strong>2.SAYI</strong></td>
      <td colspan="2"><input type="text" name="kutu2" id="kutu2" /></td>
    </tr>
    <tr>
      <td height="35"><input type="radio" name="radio" id="radio1" value="a1" />
        <strong>Toplama</strong></td>
      <td width="62"><input type="radio" name="radio" id="radio2" value="a2" />
        <strong>Çıkarma</strong></td>
      <td width="99"><input type="radio" name="radio" id="radio3" value="a3" />
        <strong>Çarpma</strong></td>
    </tr>
    <tr>
      <td height="28"><input type="radio" name="radio" id="radio4" value="a4" />
        <strong>Bölme</strong></td>
      <td><input type="radio" name="radio5" id="radio10" value="a5" />
      <strong>      Kalan</strong></td>
      <td><input type="submit" name="buton" id="buton" value="Hesapla" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
