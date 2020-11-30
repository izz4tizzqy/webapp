<?php
      $record = array(
            array(//1
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//2
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//3
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//4
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//5
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//6
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),

            array(//7
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//8
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//9
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//10
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//11
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//12
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//13
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//14
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//15
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//16
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//17
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//18
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//19
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//20
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//21
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//22
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//23
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//24
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//25
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//26
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//27
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//28
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//29
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            ),
            array(//30
                  "program" => " ",
                  "startDate" => " ",
                  "endDate" => " ",
                  "checkin" => " ", 
                  "checkout" => " " 
            )




      );
      
                                
function update_record ($int, $name, $sdate, $edate, $chkin, $chkout){
    for ($i=0; $i < 30; $i++) { 
          for ($j=0; $j < 5; $j++) { 
            if ($i==$int) {
                  $record[$i]["program"]=$name;
                  $record[$i]["startDate"]=$sdate;
                  $record[$i]["endDate"]=$edate;
                  $record[$i]["checkin"]= $chkin;
                  $record[$i]["checkout"]= $chkout;
         }
         else break;
          }
         
       }

       echo "<pre>" ;
       echo "Program\t\tStart Date\tEnd Date";
       array_map(function ($var) {
           echo "\n", $var["program"], "\t\t", $var["startDate"], "\t", $var["endDate"], 
           "\n\nTime :- ", $var["checkin"], " to ", $var["checkout"];
       }, $record);
       echo "<br><br><br>";
      echo "print_r($record)\n--------------\n" ,print_r($record);
 }

?>