<?php
  include 'include/head.php';
?>

  <form method="post" action="wyslij.php">
    <table border="1" cellspacing="2" cellpadding="2" style="font-face: Arial">
      <tr>
          <td><strong>Do: </strong></td>
          <td>
            <input type="text" name="do" size="25" />
          </td>
      </tr>
      <tr>
          <td><strong>Temat: </strong></td>
          <td>
            <input type="text" name="temat" size="25" />
          </td>
      </tr>
      <tr>
          <td><strong>Tresc: </strong></td>
          <td>
            <textarea name="tresc" cols="50" rows="5"></textarea>
          </td>
      </tr>
      <tr>
        <td>
            <strong><input type="hidden" name="op" value="Wyslij" /></strong>
        </td>
        <td>
          <input type="submit" name="Submit" value="Wyslij" />
        </td>
      </tr>
    </table>
  </form>

<?php
  include 'include/footer.php';
?>
