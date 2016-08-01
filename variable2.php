<?php
$item1 = 325.60;
$item2 = 545.40;
$gst = 0.06;
$service = 0.10;
$grandtotal = ($item1+$item2)+(($item1+$item2) * ($gst+$service));

echo $grandtotal;
?>