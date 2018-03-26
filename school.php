<?php 

$firstName = 'Sanjana';
$lastName = 'Sankholkar';
$currentGrade = 5;
$student_class_avg = 60;

switch ($student_class_avg) {
  case "$student_class_avg < 70" : 
    echo "Dear $firstName $lastName, \nWe look forward to seeing you at summer school, beginning July 1st!\n";
    break;
  
  default: break; 
}

//Students class average <70%:
//Dear Alena Holligan,
//We look forward to seeing you at summer school, beginning July 1st!

//Student class average >=70% and current grade 9
//Dear Alena Holligan,
//Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!

//Student class average >=70% and current grade 10
//Dear Alena Holligan,
//Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!

//Student class average >=70% and current grade 11
//Dear Alena Holligan,
//Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!

//Student class average >= 70% and current grade 12
//Dear Alena Holligan,
//Congratulations! You’ve graduated High School! Don’t forget to come back and visit.

?>