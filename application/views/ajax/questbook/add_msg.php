<?php
  $add_msg = $data['ajax'];

  if($add_msg['err'] === true) {
    echo json_encode($add_msg);
    return false;
  }

  $html = '<div class="post" id="post_'.$add_msg['msg_id'].'">
  	  <img src="/images/layer_2.jpg" class="author_photo">
  	  <div class="post_wrap">
  	  	<div class="post_author"><a>'.$add_msg['firstname'].'</a></div>
  	  	<div class="post_text">'.$add_msg['text'].'</div>
  	  	<div class="post_date">'.$add_msg['date'].'</div>
  	  </div>
  	</div>';
  echo json_encode(array('err'=>false,'html'=>$html));
?>