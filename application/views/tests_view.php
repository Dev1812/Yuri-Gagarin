<?php
  $questions = array(array('title' => 'В каком году родился Юрий Гагарин?', 'questions' => array('В 1934 году', 'В 1925 году', 'В 1927 году', 'В 1937 году')),
                     array('title' => 'В каком году Юрий Гагарин впервые полетел в космос?', 'questions' => array('В 1957 году', 'В 1961 году', 'В 1963 году', 'В 1967 году')),
                     array('title' => 'Где родился Юрий Гагарин?', 'questions' => array('деревня Клушино', 'деревня Ясенево', 'город Саратов', 'поселок Южный')),
                     array('title' => 'Какую знаменитую фразу сказал Юрий Гагарин перед взлётом?', 'questions' => array('Полетели', 'Я тут', 'Тронулись', 'Поехали')),
                     array('title' => 'Как звали жену Юрий Гагарина?', 'questions' => array('Валентина Юрьевна', 'Анна Семёновна', 'Валентина Горячева', 'Анастасия Андреевна')));		 
?>
<div id="tests">
  <div id="tests_landing">
    <div class="tests_title">Тест на знание истории Юрия Гагарина</div>
    <div class="tests_description">5 вопросов</div>
    <div class="tests_start">
	  <button onClick="Tests.start();" class="button">Начать тест</button>
	</div>
  </div>
  <div id="tests_result" style="display:none;"></div>
  <div id="tests_body" style="display:none;">
    <?php
	  $questions_length = count($questions);
	  for($i=0;$i<$questions_length;$i++) {
	    $q = $questions[$i];
	?>
	<div class="test_block">
      <div class="test_block_title"><?=$q['title'];?></div>
      <div class="test_block_body">
        <div class="test_answer_block" onClick="Tests.setAnswer(<?=$i;?>, 0);">
		  <input id="question_<?=$i?>_0" name="question_<?=$i?>" type="radio" name="question_<?=$i?>" value="0">
		  <label for="question_<?=$i?>_0"><?=$q['questions'][0];?></label>
		</div>
        <div class="test_answer_block" onClick="Tests.setAnswer(<?=$i;?>, 1);">
		  <input id="question_<?=$i?>_1" name="question_<?=$i?>" type="radio" name="question_<?=$i?>" value="1">
		  <label for="question_<?=$i?>_1"><?=$q['questions'][1];?></label>
		</div>
        <div class="test_answer_block" onClick="Tests.setAnswer(<?=$i;?>, 2);">
		  <input id="question_<?=$i?>_2" name="question_<?=$i?>" type="radio" name="question_<?=$i?>" value="2">
		  <label for="question_<?=$i?>_2"><?=$q['questions'][2];?></label>
		</div>
        <div class="test_answer_block" onClick="Tests.setAnswer(<?=$i;?>, 3);">
		  <input id="question_<?=$i?>_3" name="question_<?=$i?>" type="radio" name="question_<?=$i?>" value="3">
		  <label for="question_<?=$i?>_3"><?=$q['questions'][3];?></label>
		</div>
      </div>
	</div>
	<?php
	  }
	?>

    <div class="test_submit_wrap"><button onClick="Tests.submitForm();" class="button">Закончить тест</button></div>
  </div>
</div>