<html><head></head><body>

<?php 
echo "Today is " . date("Y/m/d h:m:s") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<hr />
<?php for ($i=1; $i<=10; $i++) { ?>
<table style="width:<?php echo $i*2?>0px; margin:auto; border:thick solid #333; background-color:#FF0">
  <tr>
    <td><?php echo $i?>&nbsp;</td>
  </tr>
</table>
  <?php } ?>
<p>&nbsp;</p>

<?php for ($i=1; $i<=10; $i++) { ?>
<table border="1" style="width:<?php echo $i*2?>0px; background-color:#FF0; border:thick solid #000; margin:auto">
  <tr>
    <td><?php echo $i?>&nbsp;</td>
  </tr>
</table>
<?php } ?>
<img src="testimg_txt.php">
<hr/>
<img src="testimg_img.php">
<p>&nbsp;</p>
</body></html>
