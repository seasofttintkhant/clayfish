// JavaScript Document
// areaタグに [onmouseover="changeMapImage('images/◯◯◯_on.jpg')" onmouseout="changeMapImage('images/◯◯◯_off.jpg')"] を追加

//画像の先読み
var imgObj = new Image();
imgObj.src = "../◯◯◯/images/◯◯◯_off.jpg,../◯◯◯/images/◯◯◯_off.jpg";

//画像の差し替え
function changeMapImage(imgPath) {
	document.getElementById('map').src = imgPath;
}
