/****************************************************************************
 * Author: Nilay Sondagar
 * Filename: script.js
 * Date: July 20, 2018
 * Purpose: JavaScript for the path. website. Basically just for openinng and closing the sidebar.
 ****************************************************************************/

// Opens the sidebar
function opensidebar() {
	var element = document.getElementById('sidebar');
	element.className = "slideout";
	document.getElementById("hamburger").setAttribute("onclick", "closesidebar()");
	document.getElementById('places').style.width = "95%";
	/*document.getElementById('sidebar-title').className = "rightsideup";*/
}// opensidebar

// Closes the sidebar
function closesidebar() {
	var element = document.getElementById('sidebar');
	element.className = "slidein";
	document.getElementById("hamburger").setAttribute("onclick", "opensidebar()");
	document.getElementById('places').style.width = "92vw";
	/*document.getElementById('sidebar-title').className = "sideways";*/
}

/*
function showInstaImage(me) {
	var element = document.getElementById("instaimage" + me.id.replace("card", ""));
	console.log(element);
	element.className = "instaimage slidedown";
	me.setAttribute("onclick", "hideInstaImage(this)");
}

function hideInstaImage(me) {
	var element = document.getElementById("instaimage" + me.id.replace("card", ""));
	element.className = "instaimage slideup";
	me.setAttribute("onclick", "showInstaImage(this)");
}
*/