<!DOCTYPE html>

	<head>
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<title>Sir Fodensi Web</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="coba.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Verdana' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<style>
.question{
	text-align:left;
	margin-left: 50px;
	color : yellow;
	font-weight: bold;
}
.options{
    text-align:left;
    margin-left: 50px;
    color : white;
    font-weight: normal;
}


</style>
</head>
<body>
<div style="color: black;background-color:silver;text-align:center;padding:7px 7px;text-align: justify;">
<h1 style="text-align:center; style1; font-family:Pacifico script; font-size:200%; color:rgba(31, 93, 113, 0.91);"><marquee direction="left" width="60%" scrollamount="30">Assalamu'alaikum Wr. Wb. </marquee></h1>
</div>

<?php
	$editid = isset($_GET['editid']) ? $_GET['editid']:'';
	if ($editid!="") {
		require("_conn.php");
		$sql = "select * from quiz_5115100057 where qu_id=$editid";					
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
		$qu_id = $row['qu_id'];
		$qu_pertanyaan = $row['qu_pertanyaan'];
		$qu_opsi1 = $row['qu_opsi1'];
		$qu_opsi2 = $row['qu_opsi2'];
		$qu_opsi3 = $row['qu_opsi3'];
		$qu_opsi4 = $row['qu_opsi4'];
		$qu_jawaban = $row['qu_jawaban'];
		
		mysqli_close($conn);
	} else {
		$qu_id = "";
		$qu_pertanyaan = "";
		$qu_opsi1 = "";
		$qu_opsi2 = "";
		$qu_opsi3 = "";
		$qu_opsi4 = "";
		$qu_jawaban = "";
	}
	
	$act = isset($_GET['act']) ? $_GET['act']:'';
	if ($act=="upd") {
		$p_id = $_POST['i_id'];
		$p_old_id = $_POST['i_old_id'];
		$p_pertanyaan = $_POST['i_pertanyaan'];
		$p_opsi1 = $_POST['i_opsi1'];
		$p_opsi2 = $_POST['i_opsi2'];
		$p_opsi3 = $_POST['i_opsi3'];
		$p_opsi4 = $_POST['i_opsi4'];
		$p_jawaban = $_POST['i_jawaban'];
		
		if ($editid=="") {
		$sql = "INSERT INTO quiz_5115100057 (qu_id, qu_pertanyaan, 
			qu_opsi1, qu_opsi2, qu_opsi3, qu_opsi4, 
			qu_jawaban)
			VALUES ($p_id, '$p_pertanyaan', 
				'$p_opsi1', '$p_opsi2','$p_opsi3','$p_opsi4',
				$p_jawaban)
				";
		} else {
			$sql = "UPDATE quiz_5115100057 SET
				qu_id=$p_id, 
				qu_pertanyaan= '$p_pertanyaan', 
				qu_opsi1='$p_opsi1', 
				qu_opsi2= '$p_opsi2', 
				qu_opsi3='$p_opsi3', 
				qu_opsi4='$p_opsi4', 
				qu_jawaban=$p_jawaban
				WHERE qu_id = $p_old_id
			";	
		}
		//die($sql);

		require("_conn.php");
					
		$result=mysqli_query($conn, $sql);
		mysqli_close($conn);

		header("location:quiz.php");
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>EDIT DATA QUIZ</h2>
<form id="form1" name="form1" method="post" 
action="?act=upd<?php echo ($editid!="") ? "&editid=$editid":"";  ?>">
  <table border="1">
    <tr>
      <td valign="top">ID </td>
      <td>
      <input type="hidden" name="i_old_id" id="i_old_id" value="<?php echo $qu_id?>" />
      <input name="i_id" type="text" id="i_id" value="<?php echo $qu_id?>" /></td>
    </tr>
    <tr>
      <td valign="top">Pertanyaan</td>
      <td><textarea name="i_pertanyaan" id="i_pertanyaan" cols="45" rows="5"><?php echo $qu_pertanyaan?></textarea></td>
    </tr>
    <tr>
      <td>Opsi 1</td>
      <td><input name="i_opsi1" type="text" id="i_opsi1" value="<?php echo $qu_opsi1?>" /></td>
    </tr>
    <tr>
      <td>Opsi 2</td>
      <td><input name="i_opsi2" type="text" id="i_opsi2" value="<?php echo $qu_opsi2?>" /></td>
    </tr>
    <tr>
      <td>Opsi 3</td>
      <td><input name="i_opsi3" type="text" id="i_opsi3" value="<?php echo $qu_opsi3?>" /></td>
    </tr>
    <tr>
      <td>Opsi 4</td>
      <td><input name="i_opsi4" type="text" id="i_opsi4" value="<?php echo $qu_opsi4?>" /></td>
    </tr>
    <tr>
      <td>Jawaban</td>
      <td>
 <?php 
 	$sisip1=""; $sisip2=""; $sisip3=""; $sisip4="";
 	switch ($qu_jawaban) {
		case 1; $sisip1 = " selected "; break;
		case 2; $sisip2 = " selected "; break;
		case 3; $sisip3 = " selected "; break;
		case 4; $sisip4 = " selected "; break;
	}
 ?>
      <select name="i_jawaban" id="i_jawaban">
        <option value="1" <?php echo $sisip1?>>Opsi 1</option>
        <option value="2" <?php echo $sisip2?>>Opsi 2</option>
        <option value="3" <?php echo $sisip3?>>Opsi 3</option>
        <option value="4" <?php echo $sisip4?>>Opsi 4</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="button" id="button" value="Kirim" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</div>

<div id="footer">
       Copyright &copy; 2017. Designed by Nopal&trade; dibantu temannya.
    </div>


</footer>

</body>

</html>