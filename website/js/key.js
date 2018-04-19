/* 1. Keyword case */
function GetRequest() {
	var url = location.search;
	var Request_result = new Object();
	if (url.indexOf("?") != -1) {
		var str = url.substr(1);
		strs = str.split("&");
		for(var i = 0; i < strs.length; i ++) {
			Request_result[strs[i].split("=")[0]]=(strs[i].split("=")[1]);
		}
	}
	return Request_result;
}

function Getkey() {
	var newRequest = new Object();
	newRequest = GetRequest();
	var key1, key2;
	key1 = newRequest["key1"];
	key2= newRequest["key2"];
}
 
function GetQuery(keyname) {
	var reg = new RegExp("(^|&)" + keyname + "=([^&]*)(&|$)","i");
	var r = window.location.search.substr(1).match(reg);
	if (r!=null) return (r[2]); return null;
}

function test() {
	alert(GetQuery("key1"));
	alert(GetQuery("key2"));
}

var hashtag1 = GetQuery("key1");
var hashtag2 = GetQuery("key2");
var maxResults = 1000;
