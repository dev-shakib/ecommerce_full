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
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Modules/FlashSale/Resources/assets/admin/js/FlashSale.js":
/*!******************************************************************!*\
  !*** ./Modules/FlashSale/Resources/assets/admin/js/FlashSale.js ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
/* harmony import */ var _FlashSaleProduct__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FlashSaleProduct */ "./Modules/FlashSale/Resources/assets/admin/js/FlashSaleProduct.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }



var _default = /*#__PURE__*/function () {
  function _default() {
    _classCallCheck(this, _default);

    this.productCount = 0;
    this.addFlashSaleProducts(FleetCart.data['flash_sale.products']);

    if (this.productCount === 0) {
      this.addProduct();
    }

    this.addFlashSaleProductsError(FleetCart.errors['flash_sale.products']);
    this.attachEventListeners();
    this.makeProductPanelsSortable();
  }

  _createClass(_default, [{
    key: "addFlashSaleProducts",
    value: function addFlashSaleProducts(products) {
      var _iterator = _createForOfIteratorHelper(products),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var attributes = _step.value;
          this.addProduct(attributes);
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
    }
  }, {
    key: "addProduct",
    value: function addProduct() {
      var attributes = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
      var productTemplate = new _FlashSaleProduct__WEBPACK_IMPORTED_MODULE_0__["default"]({
        productPanelNumber: this.productCount++,
        product: attributes
      });
      $('#products-wrapper').append(productTemplate.render());
      window.admin.selectize();
    }
  }, {
    key: "addFlashSaleProductsError",
    value: function addFlashSaleProductsError(errors) {
      for (var key in errors) {
        var parent = this.getInputFieldForKey(key).parent();
        parent.addClass('has-error');
        parent.append("<span class=\"help-block\">".concat(errors[key][0], "</span>"));
      }
    }
  }, {
    key: "getInputFieldForKey",
    value: function getInputFieldForKey(key) {
      var keyParts = key.split('.'); // Replace all "_" to "-".

      keyParts = keyParts.map(function (k) {
        return k.split('_').join('-');
      });
      return $("#".concat(keyParts.join('-')));
    }
  }, {
    key: "attachEventListeners",
    value: function attachEventListeners() {
      var _this = this;

      $('.add-product').on('click', function () {
        _this.addProduct();
      });
    }
  }, {
    key: "makeProductPanelsSortable",
    value: function makeProductPanelsSortable() {
      Sortable.create(document.getElementById('products-wrapper'), {
        handle: '.drag-icon',
        animation: 150
      });
    }
  }]);

  return _default;
}();



/***/ }),

/***/ "./Modules/FlashSale/Resources/assets/admin/js/FlashSaleProduct.js":
/*!*************************************************************************!*\
  !*** ./Modules/FlashSale/Resources/assets/admin/js/FlashSaleProduct.js ***!
  \*************************************************************************/
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

    this.productPanelHtml = this.getProductPanelHtml(data);
  }

  _createClass(_default, [{
    key: "getProductPanelHtml",
    value: function getProductPanelHtml(data) {
      data.product = this.normalizeAttributes(data.product);

      var template = _.template($('#flash-sale-product-template').html());

      return $(template(data));
    }
  }, {
    key: "normalizeAttributes",
    value: function normalizeAttributes(product) {
      if ($.isEmptyObject(product)) {
        return {
          id: null,
          pivot: {
            campaign_end: null,
            price: {
              amount: null
            },
            qty: null
          }
        };
      }

      if (!$.isEmptyObject(FleetCart.errors['flash_sale.products'])) {
        return {
          id: product.id,
          name: product.name,
          pivot: {
            campaign_end: product.campaign_end,
            price: {
              amount: product.price
            },
            qty: product.qty
          }
        };
      }

      return product;
    }
  }, {
    key: "render",
    value: function render() {
      this.attachEventListeners();
      window.admin.dateTimePicker(this.productPanelHtml.find('.datetime-picker'));
      return this.productPanelHtml;
    }
  }, {
    key: "attachEventListeners",
    value: function attachEventListeners() {
      var _this = this;

      this.productPanelHtml.find('.delete-product-panel').on('click', function () {
        _this.productPanelHtml.remove();
      });
    }
  }]);

  return _default;
}();



/***/ }),

/***/ "./Modules/FlashSale/Resources/assets/admin/js/main.js":
/*!*************************************************************!*\
  !*** ./Modules/FlashSale/Resources/assets/admin/js/main.js ***!
  \*************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _FlashSale__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FlashSale */ "./Modules/FlashSale/Resources/assets/admin/js/FlashSale.js");

new _FlashSale__WEBPACK_IMPORTED_MODULE_0__["default"]();
window.admin.removeSubmitButtonOffsetOn(['#products']);

/***/ }),

/***/ 6:
/*!*******************************************************************!*\
  !*** multi ./Modules/FlashSale/Resources/assets/admin/js/main.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\ecommerce_full\Modules\FlashSale\Resources\assets\admin\js\main.js */"./Modules/FlashSale/Resources/assets/admin/js/main.js");


/***/ })

/******/ });