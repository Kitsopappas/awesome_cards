<?php
include('CardSimple.php');
include('CardAwesome.php');
 ?>
<DOCTYPE html>
  <html>
  <head>
    <title>Cards</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/cards.css">
  </head>
  <body>

    <!-- Cards example No 1 -->
    <div class="padding">
    <?php
    #$cardS = new CardSimple("Chris", "Lorem ispum dolor", "img/avatar.jpg");
    #$cardS -> createCard("Create");

    $cardA = new CardAwesome("Chris", "Lorem ispum dolor Lorem ispum dolor Lorem ispum dolor Lorem ispum dolor", "img/avatar.jpg", "http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-65279.jpg");
    $cardA -> createCard("ADD");
     ?>

   </div>

  </body>
  </html>
