<!Doctype html>
<html>
  <head>
    <title>Cwiczenie</title>
  </head>
  <body>
    <center>
      <?php
        define ("Pole",200);
        printf ("Pole wynosi: ".Pole." cm");
        echo ("<br /><br />");

        $y=0.55;
        $x=10;
        $z=$x+$y;
        printf ("Zmienna z ma wartosc: $z");
        echo ("<br /><br />");

        $x=4;
        $y=3;
        $a=$x-$y*2;
        printf ("Efektem działania jest liczba: $a");
        echo ("<br /><br />");

        $x=5;
        $y=10;
        $a=($x+$y)*2;
        $b=$x+$y*2;
        $c=$y/$x*2;
        $d=$y-$x*2+$y;
        printf ("Zmienne a,b,c,d: $a, $b, $c, $d");
        echo ("<br /><br />");

        $a=$b=$c=$d=4;
        $a+=2;
        $b-=3;
        $c*=2;
        $d/=3;
        printf ("Wartosc \$a wynosi:<font color=blue>$a</font><br />");
        printf ("Wartosc \$b wynosi:<font color=blue>$b</font><br />");
        printf ("Wartosc \$c wynosi:<font color=blue>$c</font><br />");
        printf ("Wartosc \$d wynosi:<font color=blue>$d</font><br />");
        echo ("<br /><br />");

        
      ?>
    </center>
    <footer>
      <p style="align: center">&copy <?php echo (sqrt((date(Y)))*sqrt((date(Y)))); echo (" $otlet"); ?></p>
    </footer>
  </body>
</html>
