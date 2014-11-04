<?php
  include 'include/head.php';
?>

  <form method="get" action="get2.php">
    <table>
      <tr>
        <td>Podaj swój wiek: </td>
        <td><input type="text" name="age" size=2/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit_age" value="Kup bilet" /></td>
      </tr>
    </table>
  </form>

<?php
  include 'include/footer.php';
?>
