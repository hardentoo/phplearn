<html>
  <head>
    <title>PHP</title>
  </head>
  <body>

  <?php
        $x=1;
        $y=1;

	for ($begin=0, $end=20; $begin<=$end;$begin++){
	    $a=$x+$y;
	    $x=$y;
	    $y=$a;

	    echo "$x<br />";
	}
    ?>

  </body>
</html>
