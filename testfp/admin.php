<?php
	require ("connect.php");

	$hasil=mysqli_query($conn,"SELECT * FROM buku") ;
	if (false === $hasil) 
    	echo mysql_error();
	$i=0;
	$id2=0;
	while ($row = mysqli_fetch_array($hasil)) {
			$id2++;
			$i++;
			$id[$i] = $row['id'];
			$namabuku[$i] = $row['namabuku'];
			$pemilik[$i] = $row['pemilik'];
			$penulis[$i] = $row['penulis'];
			$review[$i] = $row['review'];
			$kat[$i]=$row['kategori'];
			$buku[$i]= $row['buku'];
			
	}
	//mysqli_close($con);


?>
<?php
  session_start();
  if(empty($_SESSION['email']))
  {
    header("location:index.php");
  }
  else if($_SESSION['email']!="imam@its.ac.id")
  {
    header("location:index2.php");
  }
  include "connect.php";
?>


<!doctype html> 
<html lang= ''>
<head>
     <title>List Buku</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
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
	background-image: img/full-slide1.jpg
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

<table>
  <tr>
  <th>Judul Buku</th>
    <th>Penulis</th>
    <th>Review</th>
    <th>Kategori</th>
    <th></th>
     <th></th>
  </tr>

<?php if($id2!=0){for ($i=1; $i<=sizeof($id); $i++) {?>
  <tr>
    <td><?php echo $namabuku[$i] ?></td>
    <td><?php echo $penulis[$i] ?></td>
    <td><?php echo $review[$i] ?></td>
    <td><?php echo $kat[$i] ?></td>
    <td> <button onclick="location.href='hapus.php?id_buku=<?php echo $id[$i] ?>' ">
	HAPUS</button> 
	<td> <button onclick="location.href='edit2.php?id_buku=<?php echo $id[$i] ?>' ">
	EDIT</button> 
  </tr>
<?php }}?>
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