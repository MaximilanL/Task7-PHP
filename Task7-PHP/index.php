<?php
$year=$_POST['year'];
function isleap($year) {
  if($year>=1 && $year<=9999){  
    if ($year % 4 == 0) {
        echo " it's a <span style='color: green;'>leap year</span>";
    }
    else {
        echo " it's <span style='color: red;'>not</span> a leap year";
    }
  } else {
    echo "<span style='color: red;'> is not a correct year! Please, enter a correct year.</span>";
  } 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Task7-PHP</title>
  </head>
  <body style="padding: 2%;">
  	<p>Please, enter a year:</p>
    <form method="post" action="">
    <input type="number" name="year"> 
    <button type='submit'  class="btn btn-primary">Done</button>   
    </form>
    <?php
     echo "$year";
     echo isleap($year); ?>    	   
  </body>
</html>

