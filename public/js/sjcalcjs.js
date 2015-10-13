function clearDisplay() {
    var display = document.getElementById('display');
    display.value = '0';
    storedNum = '0';
    calculationFinished = true;
    operation = operations.none;
}

function clearPreviousResult() {
    var display = document.getElementById('display');
    if (calculationFinished) {
        display.value = '0';
        calculationFinished = false;
    }
}

function numInput() {
    console.log(this.value)
    var display = document.getElementById('display');
    clearPreviousResult();
    if (display.value === '0') display.value = '';
    display.value += this.value;
}

function insertDecimal() {
    var display = document.getElementById('display');
    clearPreviousResult();
    if (display.value.indexOf('.') === -1) display.value += '.';
}

operations = {
    none:     function(left, right) { return right; },
    add:      function(left, right) { return left + right; },
    subtract: function(left, right) { return left - right; },
    multiply: function(left, right) { return left * right; },
    divide:   function(left, right) { return left / right; } 
};

function setOperation() {
    var command;
    console.log(this.value)
    var display = document.getElementById('display');
    if (this.value == '+') {
        command = "add"
    } else if (this.value == '-'){
        command = "subtract"
    } else if (this.value == '*'){
        command = "multiply" 
    } else if (this.value == '/'){
        command = "divide"
    }

    calculate();
    storedNum = display.value;
    if (operations.hasOwnProperty(command))
        operation = operations[command];
}

function calculate() {
    var display = document.getElementById('display');
    display.value = operation(+storedNum, +display.value);
    calculationFinished = true;
    operation = operations.none;
}

var numbers = document.getElementsByClassName('number');
var operators = document.getElementsByClassName('operator');

var decimal = document.getElementById('decimal');
var equalsbutton = document.getElementById('equalsbutton');
var clear = document.getElementById('clear');

clear.addEventListener('click', clearDisplay);
equalsbutton.addEventListener('click', calculate);
decimal.addEventListener('click', insertDecimal);

for (var i = 0; i<numbers.length; i++) {
    numbers[i].addEventListener('click', numInput);
} 

for (var i = 0; i<operators.length; i++) {
    operators[i].addEventListener('click', setOperation);
}


if ('addEventListener' in window)
    window.addEventListener('load', clearDisplay);
else
    window.attachEvent('onload', clearDisplay);