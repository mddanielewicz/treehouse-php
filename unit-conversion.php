<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
  <?php
    //Number in lbs we want to convert to kg
    $total_lbs = 75;
    //Floating point value for lbs to kg conversion
    $lbs_to_kg = 0.453592;
    //Use variables above to calculate lbs to kb conversion
    $total_kg = $total_lbs * $lbs_to_kg;
    //Display the lbs to kg
    echo "$total_lbs lbs equals $total_kg kg" ,"<br>";
  
    //Number of mi we want to convert to km
      $total_mi = 20;
    //Floating point value for mi to km conversion
      $mi_to_km = 1.60934;
    //Use variables above to calculate lbs to kb conversion
      $total_km = $total_mi * $mi_to_km;
    //Display the lbs to kg
    echo "$total_mi mi equals $total_km km" , "<br>" ;
  
    //Number of degrees f we want to convert to c
      $total_f = 32;
    //Convert fahrenheit to celsius
      $total_c = ($total_f - 32)/(9/5);
    //Display the lbs to kg
    echo "$total_f degrees fahrenheit equals $total_c degrees celsius" ;
  
  ?>
</body>
</html