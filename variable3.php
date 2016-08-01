<?php
$gaji = 3100;
$elaun = 760;
$tambahan = 450;
$zakat = 10;
$bnkislam = 1000;
$ambank = 800;
$grandtotal = ($gaji+$elaun+$tambahan)-($zakat+$bnkislam+$ambank);

echo "Gaji Bersih adalah RM" .$grandtotal;
?>