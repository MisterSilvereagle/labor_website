<?php

		include 'config.php';
		include 'tables.php';

		function cleanup($dateiname){
    		$dateiname = strtolower ( $dateiname );
			$dateiname = str_replace ('"', "-", $dateiname );
			$dateiname = str_replace ("'", "-", $dateiname );
			$dateiname = str_replace ("*", "-", $dateiname );
			$dateiname = str_replace ("ß", "ss", $dateiname );
			$dateiname = str_replace ("ß", "ss", $dateiname );
			$dateiname = str_replace ("ä", "ae", $dateiname );
			$dateiname = str_replace ("ä", "ae", $dateiname );
			$dateiname = str_replace ("ö", "oe", $dateiname );
			$dateiname = str_replace ("ö", "oe", $dateiname );
			$dateiname = str_replace ("ü", "ue", $dateiname );
			$dateiname = str_replace ("ü", "ue", $dateiname );
			$dateiname = str_replace ("Ä", "ae", $dateiname );
			$dateiname = str_replace ("Ö", "oe", $dateiname );
			$dateiname = str_replace ("Ü", "ue", $dateiname );
			$dateiname = htmlentities ( $dateiname );
			$dateiname = str_replace ("&", "und", $dateiname );
			$dateiname = str_replace ("+", "und", $dateiname );
			$dateiname = str_replace ("(", "-", $dateiname );
			$dateiname = str_replace (")", "-", $dateiname );
			$dateiname = str_replace (" ", "-", $dateiname );
			$dateiname = str_replace ("\'", "-", $dateiname );
			$dateiname = str_replace ("/", "-", $dateiname );
			$dateiname = str_replace ("?", "-", $dateiname );
			$dateiname = str_replace ("!", "-", $dateiname );
			$dateiname = str_replace (":", "-", $dateiname );
			$dateiname = str_replace (";", "-", $dateiname );
			$dateiname = str_replace (",", "-", $dateiname );
			$dateiname = str_replace ("--", "-", $dateiname );

			$dateiname = filter_var($dateiname, FILTER_SANITIZE_URL);
			return ($dateiname);
		}		

?>