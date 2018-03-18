<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		header("Location:login.php");
		
	}
?>


<?php
  $delid=isset($_GET['delid']) ? $_GET['delid']:"";
  if ($delid != "") {
    require("connect.php");
    $sql = "delete from game where game_id = $delid" ;
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
  }
  
require("connect.php");

$result = mysqli_query($conn,"SELECT * FROM game ORDER BY game_id ASC");
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
		$i++;
		$qu_id[$i] =  $row['game_id'];
		$qu_pertanyaan[$i] = $row['game_name'];
		$qu_opsi1[$i] = $row['genre'];
		$qu_opsi2[$i] = $row['release_date'];
		$qu_opsi3[$i] = $row['singkat'];
		$qu_opsi4[$i] = $row['sinopsis'];
    $qu_opsi5[$i] = $row['user_rating'];
    $qu_opsi6[$i] = $row['spec_id'];
    $qu_opsi7[$i] = $row['gambar_k'];
    $qu_opsi8[$i] = $row['gambar_m'];
    $qu_opsi9[$i] = $row['gambar_b'];
    $qu_opsi10[$i] = $row['link'];
	}
	mysqli_close($conn);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
   background-color : brown;
}
table, th, td {

    border: 5px solid;
    border-collapse: collapse;
}
th {
    background-color : green;
    
    padding: 5px;
    text-align: top;    
}
td {
   background-color : red;
   vertical-align : top;
}
</style>
<title>ADMIN PANEL NO STYLE</title>
</head>
<body>
<p><strong>DAFTAR DATA GAME</strong></p>
<p><a href="gameedit.php" class="nextButton">Insert Data</a> |
<a href="logout.php" class="nextButton">Logout</a></p>
<table width="2000" border="1">
  <tr>
    <th>Game ID</th>
    <th>Game Name</th>
    <th>Genre</th>
    <th>Release Date</th>
    <th>Singkat</th>
    <th>Review</th>
    <th>User Rating</th>
    <th>Spec_ID</th>
    <th>Gambar Kecil</th>
    <th>Gambar Medium</th>
    <th>Gambar Besar</th>
    <th>Link</th>
    <th>Option</th>
  </tr>
 <?php for($i=1;$i<=sizeof($qu_id);$i++) { ?>
  <tr>
    <td><?php echo $qu_id[$i] ?></td>
    <td><?php echo $qu_pertanyaan[$i] ?></td>
    <td><?php echo $qu_opsi1[$i] ?></td>
    <td><?php echo $qu_opsi2[$i] ?></td>
    <td><?php echo $qu_opsi3[$i] ?></td>
    <td><?php echo $qu_opsi4[$i] ?></td>
    <td><?php echo $qu_opsi5[$i] ?></td>
    <td><?php echo $qu_opsi6[$i] ?></td>
    <td><?php echo $qu_opsi7[$i] ?></td>
    <td><?php echo $qu_opsi8[$i] ?></td>
    <td><?php echo $qu_opsi9[$i] ?></td>
    <td><?php echo $qu_opsi10[$i] ?></td>
    <td><a href="gameedit.php?editid=<?php echo $qu_id[$i] ?>">edit</a> / <a href="?delid=<?php echo $qu_id[$i] ?>">del</a></td>
  </tr>
  <?php } ?>
</table>
<p>&nbsp;</p>
</body>
</html>