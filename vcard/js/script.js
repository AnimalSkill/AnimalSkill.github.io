var age = prompt('Сколько вам лет?');

var sayHi;

if (age >= 18) {
  sayHi = function() {
    alert( 'Прошу Вас!' );
  }
} else {
  sayHi = function() {
    alert( 'До 18 нельзя' );
  }
}


