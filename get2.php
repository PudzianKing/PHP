<?php
  include 'include/head.php';
  include 'include/rcg.php';

  extract($_REQUEST);
    if (! isset ( $submit_age ))
      exit;
?>

  <table class="table">
<?php
  $bool=ture;
  if ( $age < 13 ){
    $price = 5.00;
  } else {
    if ( $age <= 55 ){
      $price = 10;
    } else {
        if ( $age <= 120 ){
          $price = 8.25;
        } else {
          $bool=false;
        }
    }
  }
  if($bool){
  print "<td>Opłata za przejazd wynosi $price zł</td>";
  }
  else{
    print "<td>Ty być robot?</td>";
  }
?>
  </table>

<?php

  include 'include/footer.php';
?>
