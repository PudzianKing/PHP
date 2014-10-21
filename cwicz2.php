<?php
  include 'include/head.php';

  $lancuch1="Koń";
  $lancuch2="ciągnie";
  $lancuch3="wóz";
  $zdanie="$lancuch1.$lancuch2.$lancuch3";
  printf ("Powstało zdanie: $zdanie");
  echo ("<br /><br />");

  $tab[0]="Polska";
  $tab[1]="Niemcy";
  $tab[2]="Czechy";
  $tab[3]="Francja";
  printf ("Nowi członkowie Unii Europejskiej to: ".$tab[0]." i ".$tab[2].", a starzy trutnie to: ".$tab[1]." i ".$tab[3]);
  

  include 'include/footer.php';
?>
