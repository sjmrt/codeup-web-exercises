"use strict"

function listener(event) {
	var clickedButton = this;
	console.log(clickedButton);
}

var buttons = document.getElementsByTagName('button');

for(var i = 0; i < buttons.length; i += 1) {
	buttons[i].addEventListener('click', listener, false);
}

function calculateOutput() {
	var left = document.getElementById('left')
	var right = document.getElementById('right')
	var center = document.getElementById('')
}


