let input = '';
let result = document.getElementById('result');

function addInput(val) {
  input += val;
  result.value = input;
}

function clearResult() {
  input = '';
  result.value = '';
}

function calculate(operator) {
  switch (operator) {
    case '+':
      input += '+';
      break;
    case '-':
      input += '-';
      break;
    case '*':
      input += '*';
      break;
    case '/':
      input += '/';
      break;
    case '=':
      result.value = eval(input);
      input = result.value;
      break;
  }
}
