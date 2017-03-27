<?php
class Model_Photos extends Model {

  public $database;
  
  public function __construct() {
    $this->database = DataBase::connect();
  }

  public function getPhotos($offset = 0){
    $get_photos = $this->database->prepare("SELECT `id`, `owner_id`, `path`, `small_photo` FROM `photos`");
    $get_photos->execute();

    while($row = $get_photos->fetch(PDO::FETCH_ASSOC)) {
      $arr[] = $row;
    }
    return array('err'=>false,'photos'=>$arr);
  }
  
  /**
   * @desc Функция для загрузки фото
   * @param <Array> photos Массив с фотографиями из формы
   * @return <Array>
   *
   */
  public function uploadPhoto($photo) {
    if(!isset($photo) || !is_array($photo)) {
      return array('err'=>true,'err_msg'=>'<div class="form_msg_title">Неизвестная ошибка</div>Не передано ни одного файла');
    }

      if($photo['error'] != 0) {
        return array('err'=>true,'err_msg'=>'<div class="form_msg_title">Неизвестная ошибка</div>Пожалуйста, обновите страницу или попробуйте позже.<br>Код ошибки: '.$photos['error'][$k]);
      }

      $imageinfo = getimagesize($photo['tmp_name']);

      if($imageinfo['mime'] != 'image/gif' &&
         $imageinfo['mime'] != 'image/jpeg' &&
         $imageinfo['mime'] != 'image/jpg' &&
         $imageinfo['mime'] != 'image/png') {
        return array('err'=>true,'err_msg'=>'<div class="form_msg_title">Ошибка загрузки</div>Загружать можно только изображения');
      }
      $ip = (!empty($_SERVER['REMOTE_ADDR'])) ? strip_tags($_SERVER['REMOTE_ADDR']) : '0.0.0.0';
      
      $new_name = 'b_'.substr(hash('sha256', time().rand(0,1000000).$ip), 0, 14).'.jpg';
      $upload_dir = SITE_ROOT.'/files/'.$new_name;
 
     if(!move_uploaded_file($photo['tmp_name'], $upload_dir)) {
        return array('err'=>true,'err_msg'=>'<div class="form_msg_title">Ошибка загрузки</div>Пожалуйста, обновите страницу или попробуйте позже');
      }

    $add_photo = $this->database->prepare("INSERT INTO `photos`(`id`, `owner_id`, `path`, `small_photo`) VALUES ('','1',:_path,'')");
    $add_photo->execute(array('_path'=>'/files/'.$new_name));

      return array('err'=>false,'html'=>'<div class="form_msg_title">Фотографии успешно загружены</div>Посмотреть фотографии можно <a href="/photos" target="_blank">здесь</a>');
    

  }
}
?>