<?php
	$namaanda = $_POST['in_namaanda'];
	$ttlanda = $_POST['in_ttlanda'];
	
	
function watermark_text($source_img, $wm_text, $wm_text2) {
	$imagetobewatermark=imagecreatefromjpeg($source_img);
//	$font="../font/century gothic.ttf";

	$font="arial.ttf";
	$fontsize="30";
	$white = imagecolorallocate($imagetobewatermark, 255, 255, 255);
	imagettftext($imagetobewatermark, $fontsize, 0, 50, 80, $white, $font, $wm_text);
	imagettftext($imagetobewatermark, $fontsize, 0, 50, 150, $white, $font, $wm_text2);
	header("Content-type:image/jpg");
	imagejpeg($imagetobewatermark);
	imagedestroy($imagetobewatermark);	
}


$gambar_asli = "serti.jpg";
watermark_text($gambar_asli, $namaanda, $ttlanda);
?>