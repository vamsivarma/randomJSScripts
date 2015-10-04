//Got this script from //http://www.javascriptsource.com/snippets/getelementsbyattribute.html
//This link
//I have added my comments 


//oElm - Parent of the DOM sub-tree that you want to search. - Type: DOM Object 
//strTagName - HTML element to be matched - it can be a tag name like div, span etc.., Type: String
//strArributeName - Name of the attribute that you want to search for in a matched element.., Type: String
//strArributeName - Value of the attribute that you want to match in case the element satisfying the criteria has a particular attribute Type: String   
function getElementsByAttribute(oElm, strTagName, strAttributeName, strAttributeValue){
    //If no parent is specifed or if the tag is passed as * then consider entire DOM else do a getElementByTagName of for the parent element based on the passed strTagName
    //This variable untimately holds the tree the we want to traverse
	var arrElements = (strTagName == "*" && document.all)? document.all : oElm.getElementsByTagName(strTagName);
    
	//Holds the list of matched DOM objects
	var arrReturnElements = new Array();
	
	//Concatinating the spaces and others in attribute value
    var oAttributeValue = (typeof strAttributeValue != "undefined")? new RegExp("(^|\\s)" + strAttributeValue + "(\\s|$)") : null;
    
	var oCurrent;
    var oAttribute;
    for(var i=0; i<arrElements.length; i++){
		oCurrent = arrElements[i];
		
		//This holds the (key,value) of the attributeName that we passed to getAttribute function
        oAttribute = oCurrent.getAttribute(strAttributeName);
       
		if(typeof oAttribute == "string" && oAttribute.length > 0){
            if(typeof strAttributeValue == "undefined" || (oAttributeValue && oAttributeValue.test(oAttribute))){
			    //We reach here if the criterion of attribute name and value are matching, then push the DOM object in to array that was created
                arrReturnElements.push(oCurrent);
            }
        }
    }
    return arrReturnElements;
}