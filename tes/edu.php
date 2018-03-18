<?php
	require ("conn.php");

	$hasil=mysqli_query($con,"SELECT * FROM buku where category='education'") ;
	if (false === $hasil) 
    echo mysql_error();
		$i=0;
	while ($row = mysqli_fetch_array($hasil)) {

			$i++;
			$id[$i] = $row['id_buku'];
			$nama_buku[$i] = $row['nama_buku'];
			$penulis[$i] = $row['penulis'];
			$sinopsis[$i] = $row['sinopsis'];
			$link[$i]= $row['link'];
			
	}
	mysqli_close($con);


?>


<!doctype html> 
<html lang= ''>
<head>
     <title>Education</title>
    <link rel="stylesheet" href="assets/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="owl.theme.default.min.css" type="text/css">
    <script type="text/javascript" src="jq.js"></script>
    <script type="text/javascript" src="owl.carousel.min.js"></script>
<style>

body{
	margin:0;
}

.header {
	 
	text-align: center;
	padding : 10px;
	position: fixed;
	background-color:white;
	width:100%;
	height : 50px;
	color:black;
	z-index: 50;	
}

.s1{

	background-color: white;
	position:relative;
	width:100%;
	height :100vh;
	overflow: hidden;


}

ul {
	font-weight: bold;
	font-family: comic sans MS;
	list-style-type: none;
	display:inline;
	float: left;
	padding : 0;
	height:30px;
	overflow:hidden;
	background-color: transparent;


}

.tombol 
{
	font-weight: bold;
	font-family: comic sans MS;
	padding:0px;
	border:none;
	display:inline;
	background-color: white; 
	cursor:pointer;
	color: black;
	font-size: 15px;



}

.dropdown{
	display: inline;
	position: absolute;
}

.dropdown:hover .content {
    display: block;
}

.dropdown .content {
    display: none;
}

.content{
	position:absolute;
	background-color: lightblue;
	min-width: 100px;

}



.content a
{
	color:black;
	padding: 12px 16px;
	display: block;
	text-decoration: none;

}
.content a:hover
{
	background-color: grey;

}

li {
	display:inline;
	float:left;


}
li a{
	display: inline;
	padding: 10px;
	text-decoration: none;
	border-right:1px solid white;
	color:black;
}


.aktif{
	background-color: lightblue;
}

li a:hover:not(.aktif){
	background-color: lightblue;
	padding: 10px;

}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    font-family:comic sans MS;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: lightblue;
    color: black;
}


</style>

</head>


<body>

<div class='header'>

	<ul>
		<li> <a class='aktif' href='index.php'> Home </a></li>
		
		<div class='dropdown'>
		<button class='tombol'> Categories </button>
		<div class='content'>
		<a href="edu.php"> Education </a>
		<a href="rel.php"> Religion </a>
		<a href="mot.php"> Motivation </a>
		</div>	

		</div>


		<li> <a href='profile.php'> About me  </a></li>
	</ul>

	<img src='logo.jpg' style="width: 200px; height:100% ; margin-right:10%">

</div>

<div class='s1 owl-carousel'>
	<div class="owl-item">
		<img src="edu.jpg" style="width:100%">

	</div>
	<div class="owl-item">
		<img src="edu2.png" style="width:100%">
		
	</div>
	
</div>

<table>
  <tr>
  	
    <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Sinopsis</th>
    <th></th>
  </tr>

<?php for ($i=1; $i<=sizeof($id); $i++) {?>
  <tr>
    <td><?php echo $nama_buku[$i] ?></td>
    <td><?php echo $penulis[$i] ?></td>
    <td><?php echo $sinopsis[$i] ?></td>
    <td> <button onclick="location.href='<?php echo $link[$i] ?>'">
Download</button>    
  </tr>
<?php }?>
</table>


 	

<script>
	$('.s1').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

</body>




<html> 