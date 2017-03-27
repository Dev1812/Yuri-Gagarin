var PhotoLayer = {
  photos: {},
  init: function(photo_class) {
    PhotoLayer.update(photo_class);
    map.pl_active = 0;
  },
  update: function(photo_class) {
    if(!photo_class) return false;
    var photos = geByClass(photo_class),
        photos_length = photos.length,
        this_photos_length = this.photos.length,
        offset = 0,
        p;
    if(this_photos_length >= 1) {
      offset = this_photos_length + 1;
    }
    for(var i = offset; i < photos_length; i++) {
      p = photos[i];
      PhotoLayer.photos[i] = {big_photo: p.getAttribute('data-big-photo')};
    }
  },
  show: function(photo_id) {
    if(!this.photos[photo_id]) return false;
    map.pl_active = photo_id;
    
    if(!this.photos[photo_id - 1]) {
      hide('pl_arrow_left');
    } else show('pl_arrow_left');

    if(!this.photos[photo_id + 1]) {
      hide('pl_arrow_right');
    } else show('pl_arrow_right');

    ge('pl_img').src = this.photos[photo_id].big_photo;
    show(['pl', 'background_layer']);
    addEvent(document, 'keyup', PhotoLayer.onKeyUp);
  },
  hide: function() {
    hide(['pl', 'background_layer']);
  },
  onKeyUp: function(e) {
    if(!e.keyCode) return false;
    switch(e.keyCode) {
      case 27://Key ESC
        PhotoLayer.hide();
        break;
      case 37://Key LEFT
        PhotoLayer.show(map.pl_active-1);
        break;
      case 39://Key RIGHT
        PhotoLayer.show(map.pl_active+1);
        break;
    }
  }
}