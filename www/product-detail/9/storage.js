//add new key=>value to the HTML5 storage
function SaveItem() {
			
	var name = document.getElementById('name').innerHTML;
	var data = document.getElementById('data').innerHTML;
	localStorage.setItem(name, data);
	doShowAll();
	
}
//------------------------------------------------------------------------------
//change an existing key=>value in the HTML5 storage
function ModifyItem() {
	var name1 = document.getElementById('name').innerHTML;
	var data1 = ddocument.getElementById('data').innerHTML;
	//check if name1 is already exists
	
//check if key exists
			if (localStorage.getItem(name1) !=null)
			{
			  //update
			  localStorage.setItem(name1,data1);
			  document.getElementById('data').innerHTML = localStorage.getItem(name1);
			}
		
	
	doShowAll();
}
//-------------------------------------------------------------------------
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
		var key = "";
		var list = "<tr><th>Item Name</th><th>Price</th></tr>\n";
		var i = 0;
		//for more advance feature, you can set cap on max items in the cart
		for (i = 0; i <= localStorage.length-1; i++) {
			key = localStorage.key(i);
			list += "<tr><td>" + key + "</td>\n<td>"
					+ localStorage.getItem(key) + "</td></tr>\n";
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