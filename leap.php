<?php
 





$timestamp = strtotime( '1980');
$year = date( 'Y', $timestamp);
#$year = 1980;


//INITIALIZE STOP YEAR
$timestamp = strtotime(  '2018');
$stopYear = date( 'Y', $timestamp);


//initialize counter
$counter = 0;

while ($year <= $stopYear) {

	if(isLeapYear($year)){
		$counter = $counter + 1;
		echo $year . 'Leap Year' . ' <br> ' ;	
	}else
		 echo $year . '<br>';

	  //increment year
	  $year = $year + 1;

}
 //ECHO LEAP NUMBERS
 echo '<br>'. 'Total number of leap years  = ' . $counter;



/*
|--------------------------------------
| FUNCTION TO DETERMINE LEAP YEAR
|-------------------------------------
*/


function isLeapYear($year) {

 	$isLeapYear = false;
 	if( (($year % 4)==0 &&($year % 100)!=0) || ($year % 400)==0 )
 		$isLeapYear = true;
 		return $isLeapYear ;
 }
