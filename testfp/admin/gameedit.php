<?php
  session_start();
  if(!isset($_SESSION['login'])) {
	//echo 'Anda harus log in';
	header("Location:index.php");
}
  $editid = isset($_GET['editid']) ? $_GET['editid']:'';
  if ($editid!="") {
    require("connect.php");
    $sql = "select * from game where game_id=$editid";          
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    $qu_id = $row['game_id'];
    $qu_pertanyaan = $row['game_name'];
    $qu_opsi1 = $row['genre'];
    $qu_opsi2 = $row['release_date'];
    $qu_opsi3 = $row['singkat'];
    $qu_opsi4 = $row['sinopsis'];
    $qu_opsi5 = $row['user_rating'];
    $qu_opsi6 = $row['spec_id'];
    $qu_opsi7 = $row['gambar_k']; 
    $qu_opsi8 = $row['gambar_m'];
    $qu_opsi9 = $row['gambar_b']; 
    $qu_opsi10 = $row['link'];  
    mysqli_close($conn);
  } else {
    $qu_id = "";
    $qu_pertanyaan = "";
    $qu_opsi1 = "";
    $qu_opsi2 = "";
    $qu_opsi3 = "";
    $qu_opsi4 = "";
    $qu_opsi5 = "";
    $qu_opsi6 = "";
    $qu_opsi7 = "";
    $qu_opsi8 = "";
    $qu_opsi9 = "";
    $qu_opsi10 = "";
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
    $p_opsi5 = $_POST['i_opsi5'];
    $p_opsi6 = $_POST['i_opsi6'];
    $p_opsi7 = $_POST['i_opsi7'];
    $p_opsi8 = $_POST['i_opsi8'];
    $p_opsi9 = $_POST['i_opsi9'];
    $p_opsi10 = $_POST['i_opsi10'];

    if ($editid=="") {
    $sql = "INSERT INTO game (game_id, game_name, 
      genre,release_date,singkat, sinopsis, user_rating,spec_id,gambar_k,gambar_m,gambar_b,link)
      VALUES ($p_id, '$p_pertanyaan', 
        '$p_opsi1', '$p_opsi2','$p_opsi3','$p_opsi4','$p_opsi5','$p_opsi6','$p_opsi7','$p_opsi8','$p_opsi9','$p_opsi10')
        ";
    } else {
      $sql = "UPDATE game SET
        game_id=$p_id, 
        game_name= '$p_pertanyaan', 
        genre='$p_opsi1', 
        release_date= '$p_opsi2', 
        singkat='$p_opsi3', 
        sinopsis='$p_opsi4',
        user_rating='$p_opsi5',
        spec_id='$p_opsi6',
        gambar_k='$p_opsi7',
        gambar_m='$p_opsi8',
        gambar_b='$p_opsi9',
        link='$p_opsi10'
        WHERE game_id = $p_old_id
      ";  
    }
//    die($sql);

    require("connect.php");
          
    $result=mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location:gamelist.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit data Game</title>
</head>
<body>
<h2>EDIT DATA BASE</h2>
<form id="form1" name="form1" method="post" 
action="?act=upd<?php echo ($editid!="") ? "&editid=$editid":"";  ?>">
  <table border="1" width="1000" height="500">
    <tr>
      <td valign="top">Game id </td>
      <td>
      <input type="hidden" name="i_old_id" id="i_old_id" value="<?php echo $qu_id?>" />
      <input name="i_id" type="text" id="i_id" value="<?php echo $qu_id?>" required/></td>
    </tr>
    <tr>
      <td valign="top">Game Name</td>
      <td><textarea name="i_pertanyaan" id="i_pertanyaan" cols="45" rows="5"><?php echo $qu_pertanyaan?></textarea></td>
    </tr>
    <tr>
      <td>Genre</td>
      <td><input name="i_opsi1" type="text" id="i_opsi1" value="<?php echo $qu_opsi1?>" required/></td>
    </tr>
    <tr>
      <td>Release Date</td>
      <td><input name="i_opsi2" type="text" id="i_opsi2" value="<?php echo $qu_opsi2?>" required/></td>
    </tr>
    <tr>
      <td>Sinopsis Singkat</td>
      <td><textarea name="i_opsi3" id="i_opsi3" cols="45" rows="5"><?php echo $qu_opsi3?></textarea></td>
    </tr>
    <tr>
    <tr>
      <td>Sinopsis</td>
      <td><textarea name="i_opsi4" id="i_opsi4" cols="45" rows="5"><?php echo $qu_opsi4?></textarea></td>
        <!--<input name="i_opsi3" type="text" id="i_opsi4" value="<?php echo $qu_opsi4?>" required/></td> -->
    </tr>
    <tr>
      <td>User Rating </td>
      <td><input name="i_opsi5" type="text" id="i_opsi5" value="<?php echo $qu_opsi5?>" required/></td>
    </tr>
    <tr>
    <tr>
      <td>Spec ID </td>
      <td><input name="i_opsi6" type="text" id="i_opsi6" value="<?php echo $qu_opsi6?>" required/></td>
    </tr>
    <tr>
    <tr>
      <td>Gambar Kecil </td>
      <td><input name="i_opsi7" type="text" id="i_opsi7" value="<?php echo $qu_opsi7?>" required/></td>
    </tr>
    <tr>
    <tr>
      <td>Gambar Medium </td>
      <td><input name="i_opsi8" type="text" id="i_opsi8" value="<?php echo $qu_opsi8?>" required/></td>
    </tr>
    <tr>
    <tr>
      <td>Gambar Besar </td>
      <td><input name="i_opsi9" type="text" id="i_opsi9" value="<?php echo $qu_opsi9?>" required/></td>
    </tr>
    <tr>
    <tr>
      <td>Link Youtube </td>
      <td><input name="i_opsi10" type="text" id="i_opsi10" value="<?php echo $qu_opsi10?>" required/></td>
    </tr>
    <tr>  
      <td colspan="2" align="right"><input type="submit" name="button" id="button" value="Kirim" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>