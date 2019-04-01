// JavaScript Document

/* ブラウザ判定 */

/* user agent */
var _agent = navigator.userAgent.toLowerCase();
var _an    = navigator.appName;
var _ua    = navigator.userAgent;

/* platform */
var _win = (_agent.indexOf('win') != -1);
var _mac = (_agent.indexOf('mac') != -1);

/* browser version */
var _major = parseInt(navigator.appVersion);
var _minor = parseFloat(navigator.appVersion);


/* Mac OS　判定 */
var _mac_os10_ie = (_ua.indexOf('MSIE 5.2') != -1) || ((_ua.indexOf('mozilla') != -1) && (_ua.indexOf('Mac OS X') != -1));
var _mac_os10_ns = (_ua.indexOf('Mac OS X') != -1);


/* Mac用 */
if
(_mac_os10_ie) {
	alert("お使いのブラウザでは正しく表示されない場合があります。\n弊社サイトは、Safari2.0、Firefox1.0以上でのみ最適化されております。");
	}
