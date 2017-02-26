<html>
<head>
	<title>PHP Learn</title>
</head>
<body>

<p>All is working</p>

<p>Список файлов в текущей директории:</p>

<?php

	if ($handle = opendir('.')) {
    	while (false !== ($entry = readdir($handle))) {
        	if ($entry != "." && $entry != "..") {
            	echo "$entry<br>";
        	}
    	}
    	closedir($handle);
	}

	$carray = 1;

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
