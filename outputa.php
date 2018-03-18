<?php
   $namaanda = $_POST['namaanda'];
    $alamat = $_POST['alamat'];
     $tingkat = $_POST['tingkat'];
      $ttlanda = $_POST['ttlanda'];
       $kemampuan = $_POST['kemampuan'];
        $ttd = $_POST['ttd'];
   // print_r("nama: ", $namaanda);
   // return;
function watermarkImage ($SourceFile, $WaterMarkText, $WaterMarkText1, $WaterMarkText2, $WaterMarkText3, $WaterMarkText4, $WaterMarkText5, $DestinationFile) { 
   list($width, $height) = getimagesize($SourceFile);
   $image_p = imagecreatetruecolor($width, $height);
   $image = imagecreatefromjpeg($SourceFile);
   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height); 
   $black = imagecolorallocate($image_p, 0, 0, 0);
   $font = 'Parakeet.ttf';
   $font_size = 18; 
   imagettftext($image_p, $font_size, 0, 350, 275, $black, $font, $WaterMarkText);
      imagettftext($image_p, $font_size, 0, 350, 295, $black, $font, $WaterMarkText1);
         imagettftext($image_p, $font_size, 0, 350, 315, $black, $font, $WaterMarkText2);
            imagettftext($image_p, $font_size, 0, 350, 335, $black, $font, $WaterMarkText3);
               imagettftext($image_p, $font_size, 0, 350, 355, $black, $font, $WaterMarkText4);
imagettftext($image_p, $font_size = 30, 0, 140, 485, $black, $font = 'tt.ttf', $WaterMarkText5);
   if ($DestinationFile<>'') {
      imagejpeg ($image_p, $DestinationFile, 100); 
   } else {
      header('Content-Type: image/jpeg');
      imagejpeg($image_p, null, 100);
   };
   imagedestroy($image); 
   imagedestroy($image_p); 
};

watermarkImage('serti.jpg', $namaanda, $alamat, $tingkat, $ttlanda, $kemampuan, $ttd, './sertif.jpg')
?>

<html>
   <head>
      <title>Sertifikat</title>
   </head>
   <body>
      <img src="sertif.jpg" alt="">
   </body>
</html>