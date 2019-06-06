/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/main.js":
/*!*********************!*\
  !*** ./src/main.js ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_main__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sass/main */ "./src/sass/main.scss");
/* harmony import */ var _sass_main__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_sass_main__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scripts_polyfills__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/polyfills */ "./src/scripts/polyfills.js");
/* harmony import */ var _scripts_polyfills__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_scripts_polyfills__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_app__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/app */ "./src/scripts/app.js");
/* blanket front end styles and js */
// import styles for compilation
 // browser polyfills

 // import 'whatwg-fetch';
// import 'promise-polyfill/src/polyfill';
//vendors
//import '../vendor/noframework.waypoints.js';
//custom js



/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./src/scripts/app.js":
/*!****************************!*\
  !*** ./src/scripts/app.js ***!
  \****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _something__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./something */ "./src/scripts/something.js");


(function () {
  document.addEventListener('DOMContentLoaded', function () {
    console.log('Your document is ready!');
    _something__WEBPACK_IMPORTED_MODULE_0__["something"].doInit();
  });
  document.addEventListener('click', function (e) {
    var target = e.target; //console.log(`target: ${target}`);

    if (target.matches('.something')) {
      _something__WEBPACK_IMPORTED_MODULE_0__["something"].handleClick(e);
    }
  }, {
    passive: true,
    capture: false
  });
  var searchSomething = document.querySelector('#search__form');

  if (searchSomething) {
    searchSomething.addEventListener('submit', function (e) {
      e.preventDefault();
      _something__WEBPACK_IMPORTED_MODULE_0__["something"].handleSearch(e);
    });
  } // window.addEventListener('resize', function () {
  // }, false);

})();

/***/ }),

/***/ "./src/scripts/polyfills.js":
/*!**********************************!*\
  !*** ./src/scripts/polyfills.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

//matches - https://developer.mozilla.org/en-US/docs/Web/API/Element/matches#Polyfill
if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
}

/***/ }),

/***/ "./src/scripts/something.js":
/*!**********************************!*\
  !*** ./src/scripts/something.js ***!
  \**********************************/
/*! exports provided: something */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "something", function() { return something; });
var something = function () {
  var body = document.body;

  var doInit = function doInit() {//initialize
  };

  var handleClick = function handleClick(e) {
    alert("you clicked on ".concat(e.target.classList, "!"));
  };

  var handleSearch = function handleSearch(e) {
    var searchTerm = _getSearchTerm(e.target);

    alert("searching for ".concat(searchTerm, "!"));
  }; //private


  var _getSearchTerm = function _getSearchTerm(target) {
    return target.querySelector('input[type="search"]').value;
  };

  return {
    doInit: doInit,
    handleClick: handleClick,
    handleSearch: handleSearch
  };
}();

/***/ })

/******/ });