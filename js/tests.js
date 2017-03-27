//Склонение
//Привер: alert(declension(1, ['пользователь','пользователя','пользователей']));
function declension(num, expressions) {
  var result;
  var count = num % 100;
  if (count >= 5 && count <= 20) {
    result = expressions['2'];
  } else {
    count = count % 10;
    if (count == 1) {
      result = expressions['0'];
    } else if (count >= 2 && count <= 4) {
      result = expressions['1'];
    } else {
      result = expressions['2'];
    }
  }
  return result;
}
/**
 * @author Issaev Timur
 */
var Tests = {
  MAX_ANSWERS: 5,
  answers: {},
  init: function() {
    Tests.createAnswers();
  },
  createAnswers: function() {
    var max_answers = Tests.MAX_ANSWERS || 10;
    var i=0;
    for(;i<max_answers;i++) {
      Tests.answers[i] = -1;
    }
  },
  start: function() {
    hide('tests_landing');
    show('tests_body');
  },
  setAnswer: function(question_num, answer_num) {
    Tests.answers[question_num] = answer_num;
  },
  submitForm: function() {
    ajax.post({
      url: "/tests/get_answers/",
      success: function(obj) {
	    if(obj.err === true) {
		  return false;
		}
		if(obj.answers) {
		  var rate = 0;
		  for(var i in obj.answers) {
		    if(obj.answers[i] == Tests.answers[i]) {
			  rate++;
			}
			console.log(obj.answers[i]+"  -  "+ Tests.answers[i]);
		  }
		  Tests.showTestResult(rate);
		}
			
	  }

    });
  },
  showTestResult: function(rate) {
	var tests_result = ge('tests_result');
	tests_result.innerHTML = 'Вы набрали '+rate+' '+declension(rate, ['балл','балла','баллов']);
	show(tests_result);
  }
}
setTimeout(Tests.init(), 10);