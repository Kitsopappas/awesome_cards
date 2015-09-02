<?php
include('CardSimple.php');
include('CardAwesome.php');
include('NewsCard.php');
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
    <link rel="stylesheet" href="css/news_card.css">
  </head>
  <body>

    <!-- Cards example No 1 -->

    <?php
    #$cardS = new CardSimple("Chris", "Lorem ispum dolor", "img/avatar.jpg");
    #$cardS -> createCard("Create");

    #$cardA = new CardAwesome("Chris", "Lorem ispum dolor Lorem ispum dolor Lorem ispum dolor Lorem ispum dolor", "img/avatar.jpg", "http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-65279.jpg");
    #$cardA -> createCard("ADD");

    $nc = new NewsCard("News Feed", "Lorem ispum dolor", "2 comments");
    $nc->greateCard(false);
    $nc->addComent("Chris Pappas", "Nice suit!", "img/avatar.jpg", true);
    echo '</div>';

     ?>

     <div class="card">
       <h3 class="card-heading simple">News Card</h3>
       <hr>
       <div class="card-body">
          ...
       </div>
       <div class="card-comments">
          <div class="comments-collapse-toggle">
             <a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">1 comment <i class="icon-angle-down"></i></a>
          </div>
          <div id="c1-comments" class="comments collapse">
             <div class="media">
                <a class="pull-left" href="#">
                   <img class="media-object" src="img/avatar.jpg"/>
                </a>
                <div class="media-body">
                   <h4 class="media-heading">Comment title</h4>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                </div>
             </div>
          </div>
       </div>
    </div>


  </body>
  </html>
