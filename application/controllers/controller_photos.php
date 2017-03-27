<?php
class Controller_Photos extends Controller {
    
  public function __construct() {
    $this->i18n = new i18n;
    $this->view = new View;
    $this->model = new Model_Photos;
  }

  public function action_index() {
    $param = array();
    $data = array();
    $param['css'] = array('photos', 'photo_layer');
    $param['js'] = array('photo_layer');
    $param['title'] = 'Фотографии';
    $data['photo_layer'] = true;
    $data['photos'] = $this->model->getPhotos();
    $this->view->generate('photos_view.php', 'template_view.php', $param, $data, $i18n);
  }

  public function action_upload() {
    $param = array();
    $data = array();
    $param['css'] = array('photos');
    $param['title'] = 'Загрузка фото';
    if($_POST['photo_submit']) {
      $data['upload'] = $this->model->uploadPhoto($_FILES['photo']);
    }
    $this->view->generate('photos_uploader_view.php', 'template_view.php', $param, $data, $i18n);
  }
  
}