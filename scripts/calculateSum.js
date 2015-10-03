//Pseudo code would be like
//This is a recursive function which takes any number of arguments(normal number or an array) and returns respective sum
//Following can be possible inputs
//(10, [[[10,30,40,100], 20, 30],20,30], 20, 30)
//So it can calculate sum even if multi-dimension arrays are passed as arguments 
function CalculateSum() {
  var total = 0;
  var argumentsLen = arguments.length; 
  
  if(argumentsLen) {
       for(var i =0; i < argumentsLen; i++) {
           if(arguments[i] instanceof Array) {
		       var arrayArgLen = arguments[i].length;
			   var subtotal = 0;
			   for(var j=0; j < arrayArgLen; j++) {
					subtotal += CalculateSum(arguments[i][j]);
			   }
			   total += subtotal;
           } else {
              total += arguments[i];
           }
       }
       
       return total;
  }
}