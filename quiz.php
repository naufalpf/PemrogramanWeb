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

<ul class="topnav">
			<li><a  href="index.php">Home</a></li>
			<li><a href="cv.php">CV</a></li>
			<li><a href="galeri.php">Video</a></li>
			<li><a href="dll.php">Link</a></li>
			<li><a class="active" href="quiz.php">Quiz</a></li>
				<li><a href="input.php">Sertifikat</a></li>
				<li><a href="cms">E-learning CMS</a></li>
	</ul>

<script src="clock.js" type="text/javascript"></script>
	<br><br>
<div class="box-shadow2" >
<?php
	$delid = isset($_GET['delid']) ? $_GET['delid']:"";
	if ($delid!="") {
		// hapus data 
		require("_conn.php");
		$sql = "delete from quiz_5115100057 where qu_id=$delid";
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);		
	}

	require("_conn.php");
	$result = mysqli_query($conn, "SELECT * FROM quiz_5115100057");
	
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
<p><a href="quiz_edit.php">Tambah Data sebagai Admin</a></p>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Pertanyaan</th>
    <th>Opsi 1</th>
    <th>Opsi 2</th>
    <th>Opsi 3</th>
    <th>Opsi 4</th>
    <th>Jawaban</th>
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
    <td><a href="quiz_edit.php?editid=<?php echo $qu_id[$i] ?>">Edit </a> / <a href="?delid=<?php echo $qu_id[$i] ?>"> Delete</a></td>
  </tr>
<?php } ?>
</table>
</div>
<hr>
<br><br>
<div class="box-shadow2" >
<div class="question">
    <p><br><br>TES KEPRIBADIAN<br><br>1. Saat kamu sedang berpuasa, lalu temanmu menawarkan minum. Apa yang kamu lakukan?</p>
    <form class="options">
        <input class="option" type="radio" name="question2" value=0>Memarahinya, lalu mengambil minumannya.<br>
        <input class="option" type="radio" name="question2" value=0>Langsung ambil tanpa basa-basi.<br>
        <input class="option" type="radio" name="question2" value=1>Mengucapkan terima kasih, lalu menolak dengan halus.<br>
        <input class="option" type="radio" name="question2" value=0>Minum air tersebut, lalu lanjut berpuasa.<br>
    </form>
</div>
<div class="question">
    <p><br><br>TES KEPRIBADIAN<br><br>2.Ketika temanmu terjatuh, apa yang kamu lakukan?</p>
    <form class="options">
    	<input class="option" type="radio" name="question1" value=1>Menolongnya dan berkata "Kamu gapapa?"<br>
        <input class="option" type="radio" name="question1" value=0>Tertawa terbahak-bahak depan dia.<br>
        <input class="option" type="radio" name="question1" value=0>Lewat saja seakan tidak tahu.<br>
        <input class="option" type="radio" name="question1" value=0>Berdoa kepada Allah agar ia bisa berdiri lagi.<br>
    </form>
</div>

<div class="question">
    <p><br><br>TES KEPRIBADIAN<br><br>3. Saat kamu melihat uang terjatuh dijalan, apa yang kamu lakukan?</p>
    <form class="options">
        <input class="option" type="radio" name="question3" value=0>Ambil, lalu tukarkan dengan jajan di warung terdekat.<br>
        <input class="option" type="radio" name="question3" value=1>Bertanya pada orang sekitar. Jika tak ada yang punya, diamalkan ke masjid.<br>
        <input class="option" type="radio" name="question3" value=0>Berusaha mengalihkan semua orang dan tetap menjaga uangnya tidak terlihat orang lain.<br>
        <input class="option" type="radio" name="question3" value=0>Mengubur uang tersebut.<br>
    </form>
</div>
<div class="question">
    <p><br><br>TES KEPRIBADIAN<br><br>4. Saat teman kamu kesusahan dalam ujian/kuis, dan meminta bantuanmu. Apa yang kamu lakukan?</p>
    <form class="options">
        <input class="option" type="radio" name="question4" value=0>Memberinya jawaban, ya walaupun belum tentu benar.<br>
        <input class="option" type="radio" name="question4" value=1>Pura-pura tidak mendengar, lalu memberinya ceramah usai kuis bahwa nyontek itu berdosa.<br>
        <input class="option" type="radio" name="question4" value=0>Langsung memberi tahu ke dosen pengawas.<br>
        <input class="option" type="radio" name="question4" value=0>Mencari jawaban dari teman lain, karena tidak bisa menjawab juga.<br>
    </form>
</div>
<div class="question">
    <p><br><br>TES KEPRIBADIAN<br><br>5. Siapa yang paling kamu andalkan dan mintai pertolongan dalam menjalani hidup sehari-hari?</p>
    <form class="options">
        <input class="option" type="radio" name="question5" value=0>Diri sendiri<br>
        <input class="option" type="radio" name="question5" value=0>Teman<br>
        <input class="option" type="radio" name="question5" value=0>Orang Tua<br>
        <input class="option" type="radio" name="question5" value=1>Allah SWT<br>
    </form>
</div>
    <input style="margin-bottom:25px; font-size:150%; color:#760000" type="button" id='next' value="Next" onclick="sum_values()">
 <div id="result"></div>

</div>
<script>
$(document).ready(function(){
answers = new Object();
var question;
var answer;
$('.option').change(function(){
    answer = ($(this).attr('value'));
    question = ($(this).attr('name'));
    answers[question] = answer;
});
var item1 = document.getElementById('question');
var totalQuestions = $('.question').size();
var currentQuestion = 0;
$questions = $('.question');
$questions.hide();
$($questions.get(currentQuestion)).fadeIn();
$('#next').click(function(){
    $($questions.get(currentQuestion)).fadeOut(function(){
        currentQuestion = currentQuestion + 1;
        if(currentQuestion == totalQuestions){
		var result = 0;
		for (question in answers){	
			result = result + parseInt(answers[question]);
		}
        if(result == 1 || result == 0)
        {
            var html = "<h1 style='color:green'>Tes Selesai<br><br> Anda sama sekali tidak memiliki sifat baik </h1>"
            document.getElementById('result').innerHTML = html;
        }
		else if(result == 2)
		{
			var html = "<h1 style='color:green'>Tes Selesai<br><br> Kebaikan anda kurang, coba renungi dosa anda selama ini </h1>"
			document.getElementById('result').innerHTML = html;
		}
		else if (result == 3)
		{
			var html = "<h1 style='color:green'>Tes Selesai<br><br>  Anda orang yang berjiwa baik, namun masih kurang rasa kepedulian </h1>"
			document.getElementById('result').innerHTML = html;
		}
		else if (result == 4)
		{
			var html = "<h1 style='color:green'>Tes Selesai<br><br> Anda memiliki jiwa kebaikan, tapi tidak sebaik Naufal </h1>"
			document.getElementById('result').innerHTML = html;
		}
		else if (result == 5)
		{
			var html = "<h1 style='color:green'>Tes Selesai<br><br> Anda memiliki sifat baik dan suka membantu, layaknya Naufal</h1>"
			document.getElementById('result').innerHTML = html;
		}
		$('#next').hide();
        }else{
		$($questions.get(currentQuestion)).fadeIn();
        }
    });

});
});
</script> 
<hr>
	<h2>Social Media: <br>
	<a href="mailto:naufalpf@gmail.com" target="_blank"> <img src="foto/mail.jpg" alt="m" width="42" height="42"> </a>
	<a href="https://www.facebook.com/naufalpf2" target="_blank"> <img src="foto/fb.png" alt="fb" width="42" height="42"> </a>
	<a href="https://www.twitter.com/naufalpf2" target="_blank"><img src="foto/twit.png"  alt="tw" width="42" height="42"> </a>
	<a href="https://www.instagram.com/naufalpf" target="_blank"><img src="foto/ig.png" alt = "ig" width="42" height="42"> </a>
        </h2>

<div id="footer">
       Copyright &copy; 2017. Designed by Nopal&trade; dibantu temannya.
    </div>


</footer>

</body>

</html>