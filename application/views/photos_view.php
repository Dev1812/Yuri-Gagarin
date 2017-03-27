<div id="photos">
  <div class="head_gray">
    <span class="head_gray_left">Фотографии Юрия Гагарина</span>
	<a href="/photos/upload" target="_blank" class="float_r" style="color:#808080;">загрузить</a>
  </div>
  <div class="photos_wrap">
  <?php
    if(!isset($data['photos']['photos']) || !is_array($data['photos']['photos'])) {
      echo '<div class="not_found">Не найдено ни одного фото</div>';
    } else {
      foreach($data['photos']['photos'] as $v) {
  ?>
    <a class="photo_wrapper" onClick="PhotoLayer.show(<?=$v['id'];?>);">
      <div class="photo photo_img" style="background-image:url('<?=(!empty($v['small_photo'])) ? $v['small_photo'] : $v['path'];?>');" data-big-photo="<?=$v['path'];?>"></div>
    </a>
  <?php
      }
    }
  ?>

  </div>
</div>
<script type="text/javascript">
  setTimeout("PhotoLayer.init('photo')", 10);
</script>