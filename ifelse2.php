<?php
$username = "superadmin";
$usertype = "admin";

switch ($usertype) {
   case $usertype == "user":
       echo "Welcome " . $username . ". Your User Type is User";
       break;
   default:
       echo "Welcome " . $username . ". Your User Type is Admin";
       break;
}
?>

<?php
$name = "Mohd Syafiq";
$course = "Bachelor in Science Computer (Software Engineering)";
$cgpa = 2.04;
switch ($cgpa) {
   case $cgpa == 4.0:
       $grade = "High Distinction";
       break;
   case $cgpa >= 3.33 && $cgpa <= 3.99:
       $grade = "Distinction";
       break;
   case $cgpa >= 2.67 && $cgpa <= 3.32:
       $grade = "Credit";
       break;
   case $cgpa >= 2.00 && $cgpa <= 2.66:
       $grade = "Pass";
       break;
   case $cgpa <= 1.99:
       $grade = "Failed";
       break;
   default:
       $grade = null;
       break;
}
switch ($grade) {
   case $grade == null;
       echo "Please Enter the correct CGPA";
       break;
   default:
       echo "Welcome " . $name . ". You have enroll " . $course . ". Based on your CGPA (" . $cgpa . "), your grade is " . $grade;
       break;
}
?>
