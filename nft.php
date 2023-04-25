<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" >   
      <title>Trozenweb</title>
</head>
<body>
<header>
<?php include("header.php");?>
</header>
<style>
    *{
        margin: 0px;
        padding:0px;
    }
.img {
  width: 100%;
  
}
.text{
    background-image: url('strip.jpg');
    margin-top: 10px;
    margin-bottom: 15px;
    padding: 20px 0px 20px 0px;
    color: aliceblue;
    text-align: center;
    
}

.nft{
    display: inline;
    width: 24%;
    padding-left: 7px;
    background-image: url('wrxwarrior.png');
    background-size: 100%;
    background-repeat: no-repeat;
}
.masktrend{
    background-image: url('background.jpg');
}

</style>
</head>
<body style="background-color: black;">
<header style="background-color: black; "></header>
<div>
<img src="nftbanner.jpg" alt="banner" class="img">
</div>
<div class="text">
    <p>This collection is based on the vision of Meta Travelers.</p>
        <p> Team of fictional character who will explore the new world and the untapped potential of the meta verse.</p>
</div>

        <div class="container" >
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            
            
        </div>
        <div>
            <img src="masktrend.jpg" class="img">

        </div>
        <div>
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
            <img src="nft.png" class="nft">
        </div>
        <?php
include("footer.php");
?>
</body>
</html>
