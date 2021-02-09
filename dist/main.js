/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
(() => {
/*!*************************!*\
  !*** ./src/apifetch.js ***!
  \*************************/
eval("document.querySelector('#adresse').addEventListener('keyup', function () {\r\n    let inputContent = document.getElementById('adresse');\r\n    let container = document.getElementById('result');\r\n    container.innerHTML = \"\";\r\n    let url = `https://api-adresse.data.gouv.fr/search/?q=${this.value}&limit=6`;\r\n    fetch(url)\r\n        .then(response =>response.json())\r\n        .then(data => {\r\n        let result = data.features;\r\n        result.forEach(element => {\r\n            let listElement = document.createElement('li');\r\n            listElement.classList.add('item');\r\n            listElement.innerText = element.properties.label;\r\n            container.appendChild(listElement);\r\n            listElement.addEventListener('click', function () {\r\n                inputContent.value = listElement.innerText;\r\n                container.innerHTML = \"\";\r\n            });\r\n        });\r\n    }); \r\n});\n\n//# sourceURL=webpack://refonte-site-soutenancehtml/./src/apifetch.js?");
})();

(() => {
/*!***********************!*\
  !*** ./src/burger.js ***!
  \***********************/
eval("$(document).ready(function(){$(\".burger\").click(function(){$(\"nav ul\").toggle(500);});});\n\n//# sourceURL=webpack://refonte-site-soutenancehtml/./src/burger.js?");
})();

(() => {
/*!*************************!*\
  !*** ./src/slackMsg.js ***!
  \*************************/
eval("const token = getAuth();\r\n\r\nlet button = document.querySelector(\"#submit\");\r\n\r\nbutton.addEventListener('click', function(){\r\n    let firstName = document.querySelector(\"#firstname\").value; //prénom\r\n    let lastName = document.querySelector(\"#lastname\").value; //nom\r\n    let emailName = document.querySelector(\"#email\").value; //email\r\n    let personAdress = document.querySelector(\"#adresse\").value; //adresse\r\n    let messageForm = document.querySelector(\"#message\").value; //message\r\n    \r\n\r\n    fetch ('https://slack.com/api/chat.postMessage',{\r\n        method: 'POST',\r\n    headers: new Headers({\r\n        'Authorization': token,\r\n        'Content-type': 'application/json'\r\n    }),\r\n    body: JSON.stringify({\"channel\":\"C01JQDF93K7\",\"text\":`NOUVEAU CONTACT: \\n\\n Nom:${lastName} \\n Prénom:${firstName} \\n Email: ${emailName} \\n Adresse: ${personAdress} \\n Message: ${messageForm}`})\r\n});\r\n});\r\n\n\n//# sourceURL=webpack://refonte-site-soutenancehtml/./src/slackMsg.js?");
})();

/******/ })()
;