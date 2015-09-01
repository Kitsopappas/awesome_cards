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
