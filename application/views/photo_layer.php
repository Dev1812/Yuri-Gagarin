<div id="background_layer"></div>
<div id="pl">
  <div class="pl_close" onclick="PhotoLayer.hide();">
    <i class="icon pl_icon_close"></i>
  </div>
  <div class="pl_wrap">
    <div onClick="PhotoLayer.show(map.pl_active-1);" class="pl_arrow pl_arrow_left" id="pl_arrow_left">
      <i class="icon arrow_icon"></i>
    </div>
    <div onClick="PhotoLayer.show(map.pl_active+1);" class="pl_arrow pl_arrow_right" id="pl_arrow_right">
      <i class="icon arrow_icon"></i>
    </div>
    <div class="pl_body" id="pl_body">
      <img id="pl_img" class="pl_img" src="/images/layer_2.jpg">
    </div>
  </div>
</div>