<div id="photos">
  <div class="head_gray">
    <div class="head_gray_left">Загрузка фото</div>
  </div>
  <div class="photos_wrap">
    <FORM action="" method="POST" enctype="multipart/form-data">
      <div class="upload_msg">
        <?php
          $u = $data['upload'];
          if($u['err'] === true && !empty($u['err_msg'])) {
            echo $u['err_msg'];
          } else if($u['err'] === false && !empty($u['html'])) {
            echo $u['html'];
          } else {
            echo '<div class="upload_msg_title">Загрузка фото</div><div class="upload_msg_text">Выберите файлы в поле ниже</div>';
          }
        ?>  
      </div>
      <div class="input_wrap">
        <input type="file" name="photo" multiple="true" accept="image/*">
      </div>
      <div class="input_wrap">
        <input type="submit" name="photo_submit" class="button submit" value="Загрузить">
      </div>
    </FORM>
  </div>
</div>