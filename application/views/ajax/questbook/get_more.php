<?php
  $m = $data['ajax'];

  if(empty($m['messages']) || !$m['has_more']) {
    echo json_encode(array('err'=>false,'has_more'=>false,'offset'=>$m['offset']));
    return false;
  }
  $html = '';
  foreach ($m['messages'] as $v) {
  	$html .= '<div class="post" id="post_'.$v['id'].'">
  	  <img src="/images/layer_2.jpg" class="author_photo">
  	  <div class="post_wrap">
  	  	<div class="post_author"><a>'.$v['owner_name'].'</a></div>
  	  	<div class="post_text">'.$v['text'].'</div>
  	  	<div class="post_date">'.$v['date'].'</div>
  	  </div>
  	</div>';
  }
  
  echo json_encode(array('err'=>false,'html'=>$html,'has_more'=>$m['has_more'],'offset'=>$m['offset']));
?>