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
/******/ 	return __webpack_require__(__webpack_require__.s = 20);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Themes/Storefront/resources/assets/admin/js/main.js":
/*!*************************************************************!*\
  !*** ./Themes/Storefront/resources/assets/admin/js/main.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.admin.removeSubmitButtonOffsetOn(['#logo', '#footer', '#newsletter', '#product_page', '#slider_banners', '#three_column_full_width_banners', '#brands', '#two_column_banners', '#three_column_banners', '#one_column_banner']);
$('#storefront_theme_color').on('change', function (e) {
  if (e.currentTarget.value === 'custom_color') {
    $('#custom-theme-color').removeClass('hide');
  } else {
    $('#custom-theme-color').addClass('hide');
  }
});
$('#storefront_mail_theme_color').on('change', function (e) {
  if (e.currentTarget.value === 'custom_color') {
    $('#custom-mail-theme-color').removeClass('hide');
  } else {
    $('#custom-mail-theme-color').addClass('hide');
  }
});
$('#storefront-settings-edit-form').on('click', '.panel-image', function (e) {
  var picker = new MediaPicker({
    type: 'image'
  });
  picker.on('select', function (file) {
    $(e.currentTarget).find('i').remove();
    $(e.currentTarget).find('img').attr('src', file.path).removeClass('hide');
    $(e.currentTarget).find('.banner-file-id').val(file.id);
  });
});
$('.product-type').on('change', function (e) {
  var categoryProducts = $(e.currentTarget).parents('.form-group').siblings('.category-products');
  var productsLimit = $(e.currentTarget).parents('.form-group').siblings('.products-limit');
  var customProducts = $(e.currentTarget).parents('.form-group').siblings('.custom-products');
  categoryProducts.addClass('hide');
  productsLimit.addClass('hide');
  customProducts.addClass('hide');

  if (e.currentTarget.value === 'category_products') {
    categoryProducts.removeClass('hide');
  }

  if (e.currentTarget.value === 'latest_products' || e.currentTarget.value === 'recently_viewed_products') {
    productsLimit.removeClass('hide');
  }

  if (e.currentTarget.value === 'custom_products') {
    customProducts.removeClass('hide');
  }
});

/***/ }),

/***/ 20:
/*!*******************************************************************!*\
  !*** multi ./Themes/Storefront/resources/assets/admin/js/main.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\ecommerce_full\Themes\Storefront\resources\assets\admin\js\main.js */"./Themes/Storefront/resources/assets/admin/js/main.js");


/***/ })

/******/ });