<?php

class Controller_Tests extends Controller {
    
  function __construct() {
    $this->view = new View;
  }

  function action_index() {
    $param['title'] = 'Тесты';
    $param['css'] = array('tests');
    $param['js'] = array('tests');
    $this->view->generate('tests_view.php', 'template_view.php', $param, $data = null, $i18n = null);

  }

  public function action_get_answers() {
    $data['ajax'] = array('err'=>false, 'answers' => array(0, 1, 0, 3, 2));
    echo json_encode($data['ajax']);
  }

}