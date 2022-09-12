function randomUrl() {
	const randomNumber = Math.floor(Math.random() * 3); // 0 -> 1

	switch(randomNumber) {
		case 1: 
			window.location = '../shipper/shipper_danang.php';
		break;
		case 2:
			window.location = '../shipper/shipper_hcm.php';
		break;
		case 3:
			window.location = '../shipper/shipper_HN.php';
		break;
	}

}
//add new key=>value to the HTML5 storage
function SaveItem() {
	const localData = localStorage.getItem('data') || '[]';
	const parseData = JSON.parse(localData)
			
	var name = document.getElementById('name').innerHTML; //ten sap
	var price = document.getElementById('data').innerHTML; //gia className = price
	const item = {
		'name': name,
		'price': price
	};
	parseData.map( function(data){
		if(data.name !== item.name) {
			parseData.push(item)
		}
	})
	parseData.length === 0 && parseData.push(item);
	localStorage.setItem('data', JSON.stringify(parseData));
	// doShowAll();
	
}
//------------------------------------------------------------------------------
//delete an existing key=>value from the HTML5 storage
function RemoveItem() {
	var name = document.getElementById('name').innerHTML;
	document.getElementById('data').innerHTML = localStorage.removeItem(name);
	doShowAll();
}
//-------------------------------------------------------------------------------------
//restart the local storage
function ClearAll() {
	localStorage.clear();
	doShowAll();
}
//--------------------------------------------------------------------------------------
// dynamically populate the table with shopping list items
//below step can be done via PHP. 
function doShowAll() {
	if (CheckBrowser()) {
		const data = localStorage.getItem('data');
		const parseData = JSON.parse(data)

		var key = "";
		var list = "<tr><th>Item Name</th><th>Price</th></tr>\n";
		var i = 0;
		//for more advance feature, you can set cap on max items in the cart
		for (i = 0; i < parseData.length; i++) {
			// key = localStorage.key(i);
			const item = parseData[i];

			list +=  item.name + item.price + `<br>`

		}
		//if no item exists in the cart
		if (list == "<tr><th>Item</th><th>Price</th></tr>\n") {
			list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
		}
		//bind the data to html table
		document.getElementById('list').innerHTML = list;
	} else {
		alert('Cannot save shopping list as your browser does not support HTML 5');
	}
}

/*
 =====> Checking the browser support
 //this step may not be required as most of modern browsers do support HTML5
 */
 //below function may be redundant
function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// we can use localStorage object to store data
		return true;
	} else {
			return false;
	}
}
//-------------------------------------------------
/*
You can extend this script by inserting data to database or adding payment processing API to shopping cart..
*/