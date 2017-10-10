$(document).ready(function() {

	var strCookieName = "cookie-compliance";
	var strApprovedVal = "approved";

	var cookieVal = readCookie(strCookieName);
	var $displayMsg = $('#cookieMessageWrapper');

	if (cookieVal != strApprovedVal) {
		setTimeout(function() { $displayMsg.slideDown(200); }, 200); 
	} else if (!$displayMsg.is(':hidden')) {
		$displayMsg.slideUp();
	};

	$('#cookieClose').click(function() {
		$displayMsg.slideUp();
		createCookie(strCookieName, strApprovedVal, 365); // Remember data for a year
	});
});

//Cookie functions
function createCookie(name, value, days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		var expires = "; expires=" + date.toGMTString(); // time zone GMT +0
	}
	else var expires = "";
	document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';'); // split at ;(simicollon) and we will get the path between simicollon fx. 10;10;20 so we will get ["10","10","20"]
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function eraseCookie(name) { // if we need to delete cookies, so we have to write a code to call it. but we does not need it for this project.
	createCookie(name, "", -1);
}