<?php
	$path = "img/ivymodOrganizadas";
	$files = scandir($path);
	$cont = 0;
	foreach ($files as $value) { 
		if (!is_dir($value)) { 
			if (strstr($value, "-")) {
				//echo "contiene guión ".$value." - ";
				$codigoImagen = explode("-", $value);
				//echo $codigoImagen[1]."<br>";
				$dirImg = substr($codigoImagen[1], 0, -4);
				echo $dirImg."<br>";
				if (!file_exists($path.'/'.$dirImg)) {
				    mkdir($path.'/'.$dirImg, 0777, true);
				    rename($path.'/'.$value, $path.'/'.$dirImg.'/'.$value);
				    //echo $path.'/'.$value.'<br>'. $path.'/'.$dirImg.'/'.$value;
				}else {
					rename($path.'/'.$value, $path.'/'.$dirImg.'/'.$value);
				}
			}
		}
		$cont++;		
	}
?>