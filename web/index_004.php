<html>
<head>
	<title>PHP Learn</title>
	<meta charset="UTF-8">
</head>
<body>

<p>All is working</p>



<p>Массив</p>

<?php

    if ( PHP_VERSION >= "5.4.0") {
    	$carray = [2,5,11];
    } else {
    	$carray = array(1,4,9);
    }
	
	for ($i = 0; $i < 3; $i++) {
            echo $i . " ---> " . $carray[$i] . "<br>";
		}	

    $narray = array(
    	1 => __FILE__,
    	2 => __DIR__,
    	3 => __LINE__,
    	4 => __CLASS__,
    	5 => __TRAIT__,
    	6 => __METHOD__,
    	7 => __NAMESPACE__,
    	);

    for ($i = 1; $i <= 7; $i++) {
    	    if ($narray[$i] == '') continue;
            echo $narray[$i] . "<br>";
		}	

	echo "<br>Внутрение константы PHP " . PHP_VERSION . "<br><br>";

	echo "__FILE__ = " . __FILE__;
	echo "<br>";
	echo "__DIR__ = " . __DIR__;
	echo "<br>";
	echo "__LINE__ = " . __LINE__;
	echo "<br>";
	echo "__CLASS__ = " . __CLASS__;
	echo "<br>";
	echo "__TRAIT__ = " . __TRAIT__;
	echo "<br>";
	echo "__METHOD__ = " . __METHOD__;
	echo "<br>";
	echo "__NAMESPACE__ = " . __NAMESPACE__;

?>

</body>
</html>
