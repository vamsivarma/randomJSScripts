//This would take data structure with list of elements to be added 
//Create a DOM fragment and adds a DOM fragment as a whoel
function efficientDOMAppend() {
	//Sample data would be
	var response = {
			"data": [{
			"id": "pElem1",
			"value": "Appended Paragraph Elem1" 
		}, {
			"id": "pElem2",
			"value": "Appended Paragraph Elem2"
		}, {
			"id": "pElem3",
			"value": "Appended Paragraph Elem3"
		}]
	};

	var msgContainer = document.createDocumentFragment();
	var responseDataLen = response.data.length;
	for (var i = 0; i < responseDataLen; i++) {
		msgContainer.appendChild(createElem("p", {
			'id': response.data[i].id,
			'innerHTML': response.data[i].value
		}));
	}
	document.querySelector("#main p:nth-child(3)").appendChild(msgContainer);
}	

function createElem(name, props) {
    var el = document.createElement(name);
    for (var p in props)
        el[p] = props[p];
    return el;
}