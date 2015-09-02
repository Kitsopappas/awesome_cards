<?php
class NewsCard {
  public $title;
  public $body;
  public $com_num;
  function __construct($title, $body, $com_num){
    $this->title = $title;
    $this->body = $body;
    $this->com_num = $com_num;
  }

  function greateCard($close = false){
    echo '<div class="card">
      <h3 class="card-heading simple">'. $this->title .'</h3>
      <hr>
      <div class="card-body">
         '. $this->body .'
      </div>';
      if($close){
        echo '</div>';
      }
  }

  function addComent($com_title, $data, $avatar = "img/avatar.jpg", $close = false){
    echo '<div class="card-comments">
       <div class="comments-collapse-toggle">
          <a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">' . $this->com_num . ' <i class="icon-angle-down"></i></a>
       </div>
       <div id="c1-comments" class="comments collapse">
          <div class="media">
             <a class="pull-left" href="#">
                <img class="media-object" src="'. $avatar .'"/>
             </a>
             <div class="media-body">
                <h4 class="media-heading">'. $com_title .'</h4>
                <p>'. $data .'</p>
             </div>
          </div>
       </div>';
       if($close){
        echo '</div>';
      }
  }
}
 ?>
