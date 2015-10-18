var person = {
	firstname: 'Vamsi',
	lastname: 'Varma',
	getFullName: function() {
		var fullname = this.firstname + ' ' + this.lastname;
		return fullname; 
	}
}

var logName = function(lang1, lang2) {
	console.log('Logged: ' + this.getFullName());
}.bind(person);

//.bind makes a copy of whatever function it was passed
//But it doesn't execute it right away
//Not executing
var logPersonName = logName.bind(person);

logPersonName('en', 'es');

logName.call(person, 'en', 'es');


//Expects array for list of arguments
logName.apply(person, ['en', 'es']);


(function(lang1, lang2) {
	console.log('Logged: ' + this.getFullName());
}).apply(person, ['es', 'en']);


//Function Curring using bind
//Function currying:  Creating a copy of a function but with some preset parameters
function addFunc(a, b) {
	return a + b;
}

//Create a new function addByTwo from addFunc with default parameters
var addByTwo = addFunc.bind(this, 2);


//This would result in 10
console.log(addByTwo(8));

 
 