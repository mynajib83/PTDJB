<ul>
<?php
for($bini = 0; $bini <= 10; $bini++) {
       echo "<li>".$bini."</li>";
   }
   ?>
</ul>

<strong>Daerah: </strong>
<ul>
   <?php
   $daerahs = array("Johor Bahru", "Batu Pahat", "Muar", "Segamat", "Kota Tinggi", "Pontian", "Mersing", "Tangkak", "Kulai", "Kluang");
   foreach ($daerahs as $daerah) {
       echo "<li>".$daerah . PHP_EOL."</li>";
   }
   ?>
</ul>

<ul>
   <?php
   $bini = 0;
   while ($bini <= 10) {
       echo "<li>".$bini."</li>";
       $bini++;
   }
   ?>
</ul>

<strong>Daerah: </strong>
<ul>
   <?php
   $daerahs = array("Johor Bahru", "Batu Pahat", "Muar", "Segamat", "Kota Tinggi", "Pontian", "Mersing", "Tangkak", "Kulai", "Kluang");
   $num = 0;
   do{
       echo "<li>".$daerahs[$num] . PHP_EOL."</li>";
       $num++;
   }while($num <= 6);
   ?>
</ul>