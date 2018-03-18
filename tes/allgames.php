<?php
  $delid=isset($_GET['delid']) ? $_GET['delid']:"";
  if ($delid != "") {
    require("connect.php");
    $sql = "delete from game where game_id = $delid" ;
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
  }
  
require("connect.php");

$result = mysqli_query($conn,"SELECT * FROM game");
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
    $qu_opsi7[$i] = $row['gambar_b'];
  }


$good = mysqli_query($conn,"SELECT * FROM game where user_rating > '7' ORDER BY USER_RATING DESC LIMIT 3");
$i = 0;
  while ($row = mysqli_fetch_array($good)) {
    $i++;
    $qu_gameid[$i] =  $row['game_id'];
    $qu_game[$i] =  $row['game_name'];
    $qu_gambar[$i] = $row['gambar_k'];
    $qu_rating[$i] = $row['user_rating'];
  }

  mysqli_close($conn);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Game4Life</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
</head>
<body>

<div id="page" class="shell">

  <div id="header">

    <div class="cl">&nbsp;</div>
    <!-- Logo -->
    <div id="logo">
      <h1><a href="#">game<span>4life</span></a></h1>
      <p class="description">your trusted reviewer</p>
    </div>

    <div class="cl">&nbsp;</div>
    <!-- Sort Navigation -->
    <div id="sort-nav">
      <div class="bg-right">
        <div class="bg-left">
          <div class="cl">&nbsp;</div>
          <ul>
            <li class="first active first-active"><a href="index.php">Home</a><span class="sep">&nbsp;</span></li>
            <li><a href="admin/gamelist.php">Login?</a><span class="sep">&nbsp;</span></li>
            <li><a href="#">All Games</a><span class="sep">&nbsp;</span></li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
    </div>
  </div>
<div id="main">
  <div id="main-bot">
    <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
      <div class="block">
        <div class="block-bot">
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt"> 
              <h3>ALL GAMES REVIEWED</h3>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <div class="row-articles articles">
            <div class="cl">&nbsp;</div>
            <?php for($i=1;$i<=sizeof($qu_id);$i++) { ?>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="review.php?rev=<?php echo $qu_id[$i] ?>"><img src="css/images/<?php echo $qu_opsi7[$i] ?>" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="review.php?rev=<?php echo $qu_id[$i] ?>"><?php echo $qu_pertanyaan[$i] ?></a></h4>
                <p><?php echo $qu_opsi3[$i] ?></p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <?php } ?>         
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
    <!--  -->
    <div id="sidebar">
      <!-- Search -->
      <!-- / Search -->
      <!-- Sign In -->
       <div id="sign" class="block">
          <div class="block-bot">
            <div class="head">
              <div class="head-cnt">
                <h3>Genre </h3>
              </div>
            </div>
            <div class="block-cnt">
              <div class="cl">&nbsp;</div>
                 <a href="fightinggames.php" class="button button-left">FIGHTING</a> <a href="sportgames.php" class="button button-right">SPORTS</a>
                 <a href="shootinggames.php" class="button button-right">SHOOTING</a><a href="rpggames.php" class="button button-left">RPG</a>

              <div class="cl">&nbsp;</div>
            </div>
          </div>
        </div>
      <!-- / Sign In -->
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Top 3 Games Rating</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <?php for($i=1;$i<=sizeof($qu_gameid);$i++) { ?>
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="review.php?rev=<?php echo $qu_gameid[$i] ?>"><img src="css/images/<?php echo $qu_gambar[$i] ?>" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="review.php?rev=<?php echo $qu_gameid[$i] ?>"><?php echo $qu_game[$i] ?></a></h4>
                <p><strong>Rating : <?php echo $qu_rating[$i] ?></strong> </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <?php } ?> 
            <div class="cl">&nbsp;</div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>
    <!-- Footer -->
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
</html>
