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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 15);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Modules/Slider/Resources/assets/admin/js/Slide.js":
/*!***********************************************************!*\
  !*** ./Modules/Slider/Resources/assets/admin/js/Slide.js ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var _default = /*#__PURE__*/function () {
  function _default(data) {
    _classCallCheck(this, _default);

    this.slidePanelHtml = this.getSlidePanelHtml(data);
  }

  _createClass(_default, [{
    key: "getSlidePanelHtml",
    value: function getSlidePanelHtml(data) {
      data.slide.options = data.slide.options || this.getDefaultOptions();

      var template = _.template($('#slide-template').html());

      return $(template(data));
    }
  }, {
    key: "getDefaultOptions",
    value: function getDefaultOptions() {
      return {
        caption_1: {},
        caption_2: {},
        direction: 'left',
        call_to_action: {}
      };
    }
  }, {
    key: "render",
    value: function render() {
      this.attachEventListeners();
      this.showSelectedOptionBlock();
      return this.slidePanelHtml;
    }
  }, {
    key: "attachEventListeners",
    value: function attachEventListeners() {
      var _this = this;

      this.slidePanelHtml.find('.delete-slide').on('click', function () {
        _this.slidePanelHtml.remove();
      });
      this.slidePanelHtml.find('.change-option-block').on('change', function (e) {
        _this.slidePanelHtml.find('.slide-options').hide();

        _this.slidePanelHtml.find(".".concat(e.currentTarget.value)).show();
      });
    }
  }, {
    key: "showSelectedOptionBlock",
    value: function showSelectedOptionBlock() {
      var _this2 = this;

      setTimeout(function () {
        _this2.slidePanelHtml.find('.change-option-block').trigger('change');
      });
    }
  }]);

  return _default;
}();



/***/ }),

/***/ "./Modules/Slider/Resources/assets/admin/js/Slider.js":
/*!************************************************************!*\
  !*** ./Modules/Slider/Resources/assets/admin/js/Slider.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
/* harmony import */ var _Slide__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Slide */ "./Modules/Slider/Resources/assets/admin/js/Slide.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }



var _default = /*#__PURE__*/function () {
  function _default() {
    _classCallCheck(this, _default);

    this.slideCount = 0;
    this.addSlides(FleetCart.data['slider.slides']);

    if (this.slideCount === 0) {
      this.addSlide();
    }

    this.attachEventListeners();
    this.makeSlidesSortable();
  }

  _createClass(_default, [{
    key: "addSlides",
    value: function addSlides(slides) {
      var _iterator = _createForOfIteratorHelper(slides),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var attributes = _step.value;
          this.addSlide(attributes);
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
    }
  }, {
    key: "addSlide",
    value: function addSlide() {
      var attributes = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
      var slide = new _Slide__WEBPACK_IMPORTED_MODULE_0__["default"]({
        slideNumber: this.slideCount++,
        slide: attributes
      });
      $('#slides-wrapper').append(slide.render());
    }
  }, {
    key: "attachEventListeners",
    value: function attachEventListeners() {
      var _this = this;

      $('.add-slide').on('click', function () {
        _this.addSlide();
      });
      this.attachImagePickerEventListener();
    }
  }, {
    key: "attachImagePickerEventListener",
    value: function attachImagePickerEventListener() {
      $('#slides-wrapper').on('click', '.slide-image', function (e) {
        var picker = new MediaPicker({
          type: 'image'
        });
        picker.on('select', function (file) {
          var html = "\n                    <img src=\"".concat(file.path, "\">\n                    <input type=\"hidden\" name=\"slides[").concat(e.currentTarget.dataset.slideNumber, "][file_id]\" value=\"").concat(file.id, "\">\n                ");
          $(e.currentTarget).html(html);
        });
      });
    }
  }, {
    key: "makeSlidesSortable",
    value: function makeSlidesSortable() {
      Sortable.create(document.getElementById('slides-wrapper'), {
        handle: '.slide-drag',
        animation: 150
      });
    }
  }]);

  return _default;
}();



/***/ }),

/***/ "./Modules/Slider/Resources/assets/admin/js/main.js":
/*!**********************************************************!*\
  !*** ./Modules/Slider/Resources/assets/admin/js/main.js ***!
  \**********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Slider */ "./Modules/Slider/Resources/assets/admin/js/Slider.js");

new _Slider__WEBPACK_IMPORTED_MODULE_0__["default"]();
$('#autoplay').on('change', function (e) {
  $('.autoplay-speed-field').toggleClass('hide');
});
window.admin.removeSubmitButtonOffsetOn('#slides');

/***/ }),

/***/ 15:
/*!****************************************************************!*\
  !*** multi ./Modules/Slider/Resources/assets/admin/js/main.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\ecommerce_full\Modules\Slider\Resources\assets\admin\js\main.js */"./Modules/Slider/Resources/assets/admin/js/main.js");


/***/ })

/******/ });