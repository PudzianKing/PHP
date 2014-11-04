<?php
  include 'include/head.php';

  extract($_REQUEST);
    if (! isset ( $submit_age ))
      exit;
?>

  <table class="table">
<?php

  if ( $age >= 55 ){
    $price = 8.25;
  } else {
    $price = 10;
  }
  print "<td>Opłata za przejazd wynosi $price zł</td>";
?>
  </table>

<?php

  include 'include/footer.php';
?>
