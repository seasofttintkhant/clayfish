// JavaScript Document

/* �u���E�U���� */

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


/* Mac OS�@���� */
var _mac_os10_ie = (_ua.indexOf('MSIE 5.2') != -1) || ((_ua.indexOf('mozilla') != -1) && (_ua.indexOf('Mac OS X') != -1));
var _mac_os10_ns = (_ua.indexOf('Mac OS X') != -1);


/* Mac�p */
if
(_mac_os10_ie) {
	alert("���g���̃u���E�U�ł͐������\������Ȃ��ꍇ������܂��B\n���ЃT�C�g�́ASafari2.0�AFirefox1.0�ȏ�ł̂ݍœK������Ă���܂��B");
	}
