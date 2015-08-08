<?php

	define("DOSYA_ADI","dagitici.xml");

	$xml = simplexml_load_file(DOSYA_ADI);
	foreach ($xml->dagitici as $a) {
		echo $a->ad . " => ";
		echo $a->gelistirici . " <br> ";
	}

?>
