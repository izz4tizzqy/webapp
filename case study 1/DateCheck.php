<?php require ('update_reservation.php');?>
<?php 
//Used to hide all php notice and error
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Get data from main.php form
$chkin = $_POST["checkin"];
$chkout = $_POST["checkout"];
$venue = $_POST["venue"];
$name = $_POST["program"];
//convert string to date
$sdate = date("d-m-Y", strtotime($_POST["startdate"])) ;
$edate = date("d-m-Y", strtotime($_POST["enddate"]));
//convert string to int  
$int =(int)$venue;
//declare x for using in loop
$x=0;
//Open the file of specific venue and convert every line into a single element of array
$fp = @fopen("$venue.txt", 'r'); 
if ($fp) {
   $arr = explode("\n", fread($fp, filesize("$venue.txt")));
}


//loop to get all the dates
While($x<=100){
   $date3 =$arr[$x];
   $date4 =$arr[$x+1];
   //convert string to date
   $newformat = date("d-m-Y", strtotime($date3));  
   $newformat = date("d-m-Y", strtotime($date4));  
   //loop increment
   $x+=2;
   
   //Date check conditions

   if ($sdate > $date3 && $edate < $date4){
      echo"The venue is already booked at this date";
   break;
   }

   elseif($sdate < $date4 && $edate > $date4 ){
      echo"The venue is already booked at this date";
   break;
   }

   elseif($edate > $date3 && $edate < $date4){
      echo"The venue is already booked at this date";
   break;
   }

   elseif($sdate < $date3 && $edate > $date4){
      echo"The venue is already booked at this date";
   break;
   }

   elseif($sdate == $date3 || $edate == $date4){
      echo"The venue is already booked at this date";
   break;
   }

   else{

      //If date input passes all the date conditions, show booking is successfull

      echo "Congratulation Your booking is confirmed";
      update_record ($int, $name, $sdate, $edate, $chkin, $chkout);


      //Add the booking date to the text file for future checking

      $myfile = fopen("$venue.txt", "a") or die("Unable to open file!");

      //use php_eol to write sdate and edate in different line
      fwrite($myfile, $sdate. PHP_EOL);
      fwrite($myfile, $edate . PHP_EOL);
      fclose($myfile);
   break;
   }      
}


?>


