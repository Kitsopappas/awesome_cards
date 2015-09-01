<?php

class CardSimple {

  public $name;
  public $info;
  public $img;

    public function __construct($name, $info, $img) {
      $this->name = $name;
      $this->info = $info;
      $this->img = $img;
    }

  function createCard($btn_text = "ADD", $href = "http://google.com"){
    echo '<div class= "card simple">';
    echo '<a href="'. $href .'">';
    echo '<img src="' . $this->img . '"';
    echo '</a>';
    echo '<div class="card-info">';
    echo '<a class="name" href="#">'. $this->name .'</a>';
    echo '<div class="info">'. $this->info. '</div>';
    echo '</div>';
    echo '<div class="card-bottom">';
    echo '<button class="btn btn-default">'. $btn_text .'</button>';
    echo '</div></div>';
  }

}
 ?>
