<?php
system('clear');
$berita = file_get_contents ('https://pb.etools.id/raw/SK2IzelE1I');
$read = file_get_contents("key.txt");
$pass = file_get_contents('https://pb.etools.id/raw/uDq2tQZC6Z');
if ($pass == 'no'){
      echo "\33[31;1m[•]\33[0;32msscrip sudah di off kan\n";
      echo "\33[31;1m[•]\33[0;32ms$berita\n";
      exit;
}else{
if($read == $pass){
      echo "\33[31;1m[•]\33[0;32msyour key is upadated";
}
elseif($read != $pass){
      echo "\33[31;1m[•]\33[0;32mscript code = https://adsafelink.com/5u8a\n";
      $save = fopen("key.txt", "w");
      echo "masukan password =  ";
$p = trim(fgets(STDIN));
      if($pass == $p){
            fwrite($save, $p);            
            echo "\33[31;1m[•]\33[0;32mspassword benar\n";
           fclose($save);
           sleep(2);
           echo "\33[31;1m[•]\33[0;32mThank for you support guys";
      }else{
            echo "\33[31;1m[•]\33[0;32mspassword salah\n";
            sleep(2);
            echo "\33[31;1m[•]\33[0;32mpls get the code = https://adsafelink.com/5u8a\n";
            exit;
      }
      }
}
system('clear');
echo "\33[0;32m[#]\33[32;1m=========== \33[37;mWelcome To CNI Project \33[32;1m===========\33[0;32m[#]\n";
echo "\33[32;1m";
system('figlet [ Bit Shark ]');
echo "\33[31;1m[•]==============================================[•]\n";
echo "\33[31;1m[•]\33[0;32mscript  \33[31;1m= \33[37;1mBitShark Auto Claim    \33[31;1m[•]\33[0;32mversion \33[37;1m1.0\n";
echo "\33[31;1m[•]\33[0;32mcreator \33[31;1m= \33[37;1mwira\n";
echo "\33[31;1m[•]\33[0;32msupport \33[31;1m= \33[37;1mcoved 19\n";
echo "\33[31;1m[•]\33[0;32msupport \33[31;1m= \33[37;1mindra yuda\n";
echo "\33[31;1m[•]\33[0;32myoutube \33[31;1m= \33[37;1mCNI\n";
echo "\33[31;1m[•]\33[37;1mscript is free not for sell\n";
echo "\33[31;1m[•]\33[37;1msegala resiko di tanggung sendiri...!!\n";
echo "\33[31;1m[•]==============================================[•]\n";
echo "\n\n";
echo "loading.......\n";
if($wallet == ' '){
echo "\33[0;32m[?]\33[37;1mMasukan Wallet mu di cfg biar auto wd ";
sleep(2);
}
function hitung($menit){
$menit--;$detik = 60;
while (true){
$detik--;
echo "\r                       \r";
echo "\33[32;1m[•]\33[37;1mwaiting ==> \33[36;1m$menit:$detik\r";
sleep(1);
if ($detik == 0){
$menit--;
$detik = 60;
if ($menit == -1){
break;
}
}
}
}
echo "\n\n";
echo "\33[32;1m[•]\33[37;1mMining with reward\n";
echo "\33[32;1m[•]\33[37;1m0,00000005 BTC to 0,1 BTC for each round\n\n\n";
sleep(2);
while(true){
    if ($pass == 'no'){
      echo "\33[31;1m[•]\33[0;32msscrip sudah di off kan\n";
      echo "\33[31;1m[•]\33[0;32ms$berita\n";
      exit;
}
include ('wallet.php');
$url = array();
$url[] = $url0;
$url[] = $url1;
$url[] = $url2;
$url[] = $url3;
$url[] = $url4;
$url[] = $url5;
$mine = "https://bitshark.io/api/free_btc/mining";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $mine);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);   
      curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.TXT");
      curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.TXT");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);      
      $total = curl_exec($ch);
      $a= explode ('"balance":',$total);
      $a1 = explode ('}',$a[1]);
      $b = explode ('{"success":',$total);
      $b1 = explode (',"message',$b[1]);
      $c = explode ('prize":',$total);
      $c1 = explode (',"',$c[1]);
      
$wd = "https://bitshark.io/api/withdraw/submit";
$data = '{"address":"$wallet","amount":30000}';
$c = curl_init();
      curl_setopt($c, CURLOPT_URL, $mine);
      curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($c, CURLOPT_HTTPHEADER, $url);
      curl_setopt($c, CURLOPT_POST, 1);
      curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);   
      curl_setopt($c, CURLOPT_COOKIEJAR, "COOKIE.TXT");
      curl_setopt($c, CURLOPT_COOKIEFILE, "COOKIE.TXT");
      curl_setopt($c, CURLOPT_POSTFIELDS, $data1);      
      $result = curl_exec($ch);
      $d = explode ('{"success":false,"message":"',$result);
      $d1 = explode ('!"}',$d[1]);
      
      if($a1[0] == '3000'){
      	echo "\33[32;1m[•]\33[36;1mSucces withdaraw to your wallet..\n";
      }    
      if ($b1[0] == 'true'){
      	echo "\33[32;1m[•]\33[37;1mSucces Claim = \33[36;1m$c1[0] \33[37;1mSatoshi\n";
          echo "\33[32;1m[•]\33[37;1mYour ballance = \33[36;1m$a1[0] \33[37;1mSatoshi\n";
      }if($b1[0] == 'false'){
      	echo "\33[32;1m[•]\33[37;1mYou has claimed...\n";
      hitung(60);
      }
 

}
 
 
 
 ?>




