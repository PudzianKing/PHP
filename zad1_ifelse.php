<?php
  include 'include/head.php';
?>

  <form method="get" action="zad1_ifelse.php">
    <table>
      <tr>
        <td>Podaj swój wiek: </td>
        <td><input type="text" name="age" size=2/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit_age" value="Wyslij" /></td>
      </tr>
    </table>
  </form>
<?php

  extract($_REQUEST);
    if (! isset ( $submit_age ))
      exit;
?>

  <table class="table">
<?php
  $bool=ture;
  if ( $age < 13 ){
    echo "siewo23";
  } else {
    echo "23siewo";
    }
?>
  </table>

<?php
  include 'include/footer.php';
?>
