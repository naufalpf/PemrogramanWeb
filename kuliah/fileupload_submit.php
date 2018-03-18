<?php
	if ($_FILES['fileField']['name']!="") {
		$namaFile=$_FILES['fileField']['name'];
		$fileBaru=move_uploaded_file($_FILES['fileField']['tmp_name'],  "uploads/" . $namaFile);
	}
?>