/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/apifetch.js":
/*!*************************!*\
  !*** ./src/apifetch.js ***!
  \*************************/
/***/ (() => {

eval("document.querySelector('#adresse').addEventListener('keyup', function () {\r\n    let inputContent = document.getElementById('adresse');\r\n    let container = document.getElementById('result');\r\n    container.innerHTML = \"\";\r\n    let url = `https://api-adresse.data.gouv.fr/search/?q=${this.value}&limit=6`;\r\n    fetch(url)\r\n        .then(response =>response.json())\r\n        .then(data => {\r\n        let result = data.features;\r\n        result.forEach(element => {\r\n            let listElement = document.createElement('li');\r\n            listElement.classList.add('item');\r\n            listElement.innerText = element.properties.label;\r\n            container.appendChild(listElement);\r\n            listElement.addEventListener('click', function () {\r\n                inputContent.value = listElement.innerText;\r\n                container.innerHTML = \"\";\r\n            });\r\n        });\r\n    }); \r\n});\n\n//# sourceURL=webpack://refonte-site-soutenancehtml/./src/apifetch.js?");

/***/ }),

/***/ "./src/burger.js":
/*!***********************!*\
  !*** ./src/burger.js ***!
  \***********************/
/***/ (() => {

eval("$(document).ready(function(){$(\".burger\").click(function(){$(\"nav ul\").toggle(500);});});\n\n//# sourceURL=webpack://refonte-site-soutenancehtml/./src/burger.js?");

/***/ }),

/***/ "./src/slackMsg.js":
/*!*************************!*\
  !*** ./src/slackMsg.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nObject(function webpackMissingModule() { var e = new Error(\"Cannot find module './auth.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }());\n\r\nconst token = Object(function webpackMissingModule() { var e = new Error(\"Cannot find module './auth.js'\"); e.code = 'MODULE_NOT_FOUND'; throw e; }())();\r\n\r\nlet button = document.querySelector(\"#submit\");\r\n\r\nbutton.addEventListener('click', function(){\r\n    let firstName = document.querySelector(\"#firstname\").value; //prénom\r\n    let lastName = document.querySelector(\"#lastname\").value; //nom\r\n    let emailName = document.querySelector(\"#email\").value; //email\r\n    let personAdress = document.querySelector(\"#adresse\").value; //adresse\r\n    let messageForm = document.querySelector(\"#message\").value; //message\r\n    \r\n\r\n    fetch ('https://slack.com/api/chat.postMessage',{\r\n        method: 'POST',\r\n    headers: new Headers({\r\n        'Authorization': token,\r\n        'Content-type': 'application/json'\r\n    }),\r\n    body: JSON.stringify({\"channel\":\"C01JQDF93K7\",\"text\":`NOUVEAU CONTACT: \\n\\n Nom:${lastName} \\n Prénom:${firstName} \\n Email: ${emailName} \\n Adresse: ${personAdress} \\n Message: ${messageForm}`})\r\n});\r\n});\r\n\n\n//# sourceURL=webpack://refonte-site-soutenancehtml/./src/slackMsg.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./src/apifetch.js");
/******/ 	__webpack_require__("./src/burger.js");
/******/ 	__webpack_require__("./src/slackMsg.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;