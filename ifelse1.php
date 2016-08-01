<?php
$username = "Najib";
$usertype = "PTDJB";

if($usertype == "user"){
   echo "Welcome ".$username.". Your User Type is User";
}else{
   echo "Welcome ".$username.". Your User Type is Admin .<br/>";
}

$name = "Pejabat Tanah Johor Bahru";
$majlis = "Majlis Perkhidmatan Cemerlang 2016";
$markah = 70;

if($markah == 100){
   $grade = "Layak mendapat anugerah!";
}else if($markah >= 90 &&  $markah <= 100){
   $grade = "Di calonkan!";
}else if($markah >= 85 &&  $markah <= 89){
   $grade = "Boleh dipertimbangkan!";
}else if($markah >= 80 &&  $markah <= 85){
   $grade = "Tidak layak untuk anugerah tapi layak untuk kenaikan tangga gaji!";
}else if($markah <= 80){
   $grade = "Dikenakan tindakan tatatertib!";
}else{
   $grade = null;
}
if($grade==null){
   echo "Sila masukkan markah?";
}else{
   echo "Panel ".$majlis." ".$name." mengumumkan anda ". $grade. " berdasarkan kepada markah penilaian prestasi tahun 2016 " .$markah. " markah" ;
}
?>