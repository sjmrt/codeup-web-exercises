// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'violet'; // TODO: change this to your favorite color from the list
var message;

console.log('Random color chosen is ' + color);
console.log('My favorite color is ' + favorite);
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if (color=='red'){
 	message='Redrum, redrum';
} else if (color=='orange'){
 	message='Orange you glad I did not say banana';
} else if (color=='yellow') {
 	message='We all live in a yellow submarine';
} else if (color=='green') {
	message='The grass is always greener on the other side';
} else if (color=='blue') {
	message='Blue da ba di da ba da';
} else {
	message='I do not know anything by that color';
}
console.log(message);

message = (favorite == color) ? "Violet you\'re turning violet!" : "This color is basic"; 
console.log(message)

//var color=favorite ? console.log(message='Violet you are turning violet') : console.log('This color is basic') ;  

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

// color='favorite' ? Violet you are turning violet : 'message';