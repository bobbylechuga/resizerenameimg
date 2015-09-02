<?php 
	ini_set('memory_limit', '1024M');
	set_time_limit(0);
	
	include 'libs/php-image-resize/src/ImageResize.php';
	use \Eventviva\ImageResize;
	$path = "img/ivymod";
	$files = scandir($path);
	$cont = 0;
	foreach ($files as $value) {
		if (!is_dir($value)) {
			echo $value ." **** ";			
			$image = new ImageResize($path.'/'.$value);
			$image->resizeToWidth(840);
			$image->save('img/ivymod-840x1110/'.$value);

	    	echo "<a href='http://localhost/".basename(__DIR__)."/".$path."/840x1110".$value."' target='_blank' >".$value."</a><br/>";
	    	//echo "$path/840x1110/$value <br>";
	    	$cont++;
	    	//exit;

	    }
	}
	echo "<br>Total: <b>".$cont."</b>";
?>