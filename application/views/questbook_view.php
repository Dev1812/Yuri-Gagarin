<div id="to_top" class="to_top">
  <i class="to_top_icon"></i>
  Наверх
</div>

<div id="questbook">

  <div class="create_msg">
  	<div class="create_msg_title"></div>
  	<div class="create_msg_title">
      <FORM action="" method="POST" onSubmit="Questbook.formSubmit();event.preventDefault();">
      <div class="form_msg" id="questbook_form_msg"></div>
  	    <div class="input_wrap">
          <input type="hidden" name="form_hash" id="form_hash" value="<?=$data['form_hash'];?>">
          <input type="hidden" name="offset" id="offset" value="10">
  	      <input type="text" name="first_name" id="first_name" class="text_field" placeholder="Ваше имя" autofocus>
  	    </div>
  	    <div class="input_wrap">
  	      <TEXTAREA name="message" id="message" class="textarea text_field" placeholder="Ваше сообщение"></TEXTAREA>
  	    </div>


  	    <div class="input_wrap">
        <input type="text" name="captcha_code" id="captcha_code" class="text_field" maxlength="7" style="width:150px;" placeholder="Код с картинки">

        <span style="position:absolute;margin-left:29px;">
          <img src="/captcha" id="captcha_img" style="cursor:pointer;" onclick="updateCaptcha('captcha_img');">
        </span>
      </div>

  	    <div class="input_wrap">
  	      <input type="submit" name="submit" class="button" value="Отправить">
  	    </div>
  	  </FORM>
  	</div>
  </div>

  <div class="posts" id="posts">
<?php
  $m = $data['messages'];
  if(empty($m['messages'])) {
    echo '<div class="not_found">Не найдено ни одного сообщения</div>';
  } else {
    foreach ($m['messages'] as $v) {
?>
    <div class="post" id="post_<?=$v['msg_id'];?>">
      <img src="/images/layer_2.jpg" class="author_photo">
      <div class="post_wrap">
        <div class="post_author"><a><?=$v['owner_name'];?></a></div>
        <div class="post_text"><?=$v['text'];?></div>
        <div class="post_date"><?=$v['date'];?></div>
      </div>
    </div>
<?php
    }
  }
?>
  </div>
<?php

  if($m['has_more']) {
    echo '<div class="load_more" id="load_more" onClick="Questbook.getMore();">
            <div id="load_more_text">загрузить ещё...</div>
            <div id="load_more_upload" class="icon load_more_upload_icon" style="display:none;"></div>
          </div>';
  }
?>
</div>

<script type="text/javascript">
  setTimeout(ToTop.init(),10);
</script>