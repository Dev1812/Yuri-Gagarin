var Questbook = {
  formSubmit: function() {
    var firstname = ge('first_name'),
        firstname_value = first_name.value,
        message = ge('message'),
        message_value = message.value,
        captcha = ge('captcha_code'),
        captcha_value = captcha_code.value,
        form_hash = ge('form_hash').value,
        form_msg = ge('questbook_form_msg');

    if(firstname_value.length < 2) {
      return firstname.focus();
    } else if(message_value.length < 2) {
      return message.focus();
    } else if(captcha_value.length < 2) {
      return captcha_code.focus();
    }

    ajax.post({
      url: '/questbook/a_add_msg',
      data: 'form_hash='+form_hash+'&firstname='+firstname_value+'&message='+message_value+'&captcha='+captcha_value,
      success: function(obj) {
        hide(form_msg);
        switch(obj.err) {
          case true:
            form_msg.innerHTML = obj.err_msg;
            show(form_msg);
            break;
          case false:
            if(obj.html) {
              var div = document.createElement('div');
              div.innerHTML = obj.html;
              div.className = 'new_post';
              ge('posts').insertBefore(div, ge('posts').childNodes[0]);
            }
            break;
        }
      }
    });
  },
  getMore: function() {
    var offset = ge('offset');
    ajax.get({
      url: '/questbook/a_get_more/?offset='+offset.value,
      showProgress: function() {
        hide('load_more_text');
        show('load_more_upload');
      },
      hideProgress: function() {
        show('load_more_text');
        hide('load_more_upload');
      },
      success: function(obj) {
        if(obj.html) {
          var div = document.createElement('div');
          div.innerHTML = obj.html;
          ge('posts').appendChild(div);
        }
        if(!obj.has_more) {
          hide('load_more');
        }
        if(obj.offset) {
          offset.value = obj.offset;
        }
      }
    });
  }

}