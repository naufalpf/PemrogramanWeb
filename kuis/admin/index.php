<?php
	$delid = isset($_GET['delid']) ? $_GET['delid']:"";
	if ($delid!="") {
		// hapus data 
		require("_conn.php");
		$sql = "delete from quiz_dosen where qu_id=$delid";
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);		
	}

	require("_conn.php");
	$result = mysqli_query($conn, "SELECT * FROM quiz_dosen");
	
	$i = 0;	
	while ($row = mysqli_fetch_array($result)) {
			$i++;
			$qu_id[$i] = $row['qu_id'];
			$qu_pertanyaan[$i] = $row['qu_pertanyaan'];
			$qu_opsi1[$i] = $row['qu_opsi1'];
			$qu_opsi2[$i] = $row['qu_opsi2'];
			$qu_opsi3[$i] = $row['qu_opsi3'];
			$qu_opsi4[$i] = $row['qu_opsi4'];
			$qu_jawaban[$i] = $row['qu_jawaban'];
	}
	mysqli_close($conn);
	//print_r($qu_pertanyaan);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>Daftar seluruh data Quiz</h2>
<p><a href="quiz_edit.php">Tambah Data</a></p>
<table border="1">
  <tr>
    <th>id</th>
    <th>Pertanyaan</th>
    <th>opsi 1</th>
    <th>opsi 2</th>
    <th>opsi 3</th>
    <th>opsi 4</th>
    <th>jawaban</th>
    <th>&nbsp;</th>
  </tr>
<?php for ($i=1; $i<=sizeof($qu_id); $i++) { ?>
  <tr>
    <td><?php echo $qu_id[$i] ?></td>
    <td><?php echo $qu_pertanyaan[$i] ?></td>
    <td><?php echo $qu_opsi1[$i] ?></td>
    <td><?php echo $qu_opsi2[$i] ?></td>
    <td><?php echo $qu_opsi3[$i] ?></td>
    <td><?php echo $qu_opsi4[$i] ?></td>
    <td><?php echo $qu_jawaban[$i] ?></td>
    <td><a href="quiz_edit.php?editid=<?php echo $qu_id[$i] ?>">edit</a> / <a href="?delid=<?php echo $qu_id[$i] ?>">del</a></td>
  </tr>
<?php } ?>
</table>
</body>
</html>