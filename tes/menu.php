<?php
  require("connect.php");
    $hasil=mysqli_query($con,"SELECT * FROM buku") ;
  if (false === $hasil) 
    echo mysql_error();
    $i=0;
  while ($row = mysqli_fetch_array($hasil)) {

      $i++;
      $id[$i] = $row['id_buku'];
      $nama_buku[$i] = $row['nama_buku'];
      $penulis[$i] = $row['penulis'];
      $sinopsis[$i] = $row['sinopsis'];
      $Category[$i] = $row['category'];
      $link[$i]= $row['link'];
      
  }
  mysqli_close($con);

?>




<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    
    
    <link rel="stylesheet" href="css2/reset.css">

    
        <link rel="stylesheet" href="css2/style.css">

    
    
    
  </head>

  <body>

    <section> 
<h1>Daftar Buku</h1>  
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Buku</th>
      <th>Penulis</th>
      <th>Sinopsis</th>
      <th>Category</th>
      <th>Link</th>
    </tr>
  </thead>
</table>
</div>

<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>

    <?php for ($i=1; $i<=sizeof($id); $i++) {?>
  <tr>
    <td><?php echo $id[$i] ?></td>
    <td><?php echo $nama_buku[$i] ?></td>
    <td><?php echo $penulis[$i] ?></td>
    <td><?php echo $sinopsis[$i] ?></td>
    <td><?php echo $Category[$i] ?></td>
    <td><?php echo $link[$i] ?></td>
    
  </tr>
<?php } ?>

  </tbody>
</table>
</div>
</section>

<center><button onclick="location.href='admin.php'"> ADD </button></center>
<center><button onclick="location.href='logout.php'"> Logout </button></center>



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js2/index.js"></script>

    
    
    
  </body>
</html>
