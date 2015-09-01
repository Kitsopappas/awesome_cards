## Create your own cards with this php framework

> You can simply add a card to your website by simply using this framework. Example code below.

## Code Example
```sh
<?php

class CardAwesome {

  public $name;
  public $info;
  public $img;
  public $avatar;

    public function __construct($name, $info, $avatar, $img) {
      $this->name = $name;
      $this->info = $info;
      $this->img = $img;
      $this->avatar = $avatar;
    }

  function createCard($btn_text = "ADD", $href = "http://google.com"){
    echo '<div class="card awesome">';
    echo '<img class="bg-img" src="'. $this->img .'" alt=""/>';
    echo '<div class="avatar">
       <img src="'. $this->avatar .'"/>
    </div>';

    echo '<div class="info">
       <div class="title">
          '. $this->name .'
       </div>
       <div class="desc">'. $this->info .'</div>
    </div>';
    echo '<div class="bottom">
       <button class="btn">'. $btn_text .'</button>
    </div>
  </div>';
  }

}
 ?>
```

> Add the card to your web site with this code

```sh
<link rel="stylesheet" href="css/cards.css">
<?php
  include('CardAwesome.php');
  $cardA = new CardAwesome("Chris", "Lorem ispum dolor", "img/avatar.jpg", "img/sample.jpg");
  $cardA -> createCard("ADD");
?>
```

## Screen Shots
![alt tag](https://raw.githubusercontent.com/Kitsopappas/awesome_cards/master/img/img1.png)

![alt tag](https://raw.githubusercontent.com/Kitsopappas/awesome_cards/master/img/img2.png)
