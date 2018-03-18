<?php
function watermark_text($source_img, $wm_text) {
	$imagetobewatermark=imagecreatefromjpeg($source_img);
//	$font="../font/century gothic.ttf";

	$font="arial.ttf";
	$fontsize="15";
	$white = imagecolorallocate($imagetobewatermark, 255, 255, 255);
	imagettftext($imagetobewatermark, $fontsize, 0, 20, 10, $white, $font, $wm_text);
	
	header("Content-type:image/jpg");
	imagejpeg($imagetobewatermark);
	imagedestroy($imagetobewatermark);	
}


$gambar_asli = "sma1.jpg";
watermark_text($gambar_asli, "Naufal keren");
?>