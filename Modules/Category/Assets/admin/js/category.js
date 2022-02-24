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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Modules/Category/Resources/assets/admin/js/CategoryForm.js":
/*!********************************************************************!*\
  !*** ./Modules/Category/Resources/assets/admin/js/CategoryForm.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
/* harmony import */ var _CategoryTree__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CategoryTree */ "./Modules/Category/Resources/assets/admin/js/CategoryTree.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }



var _default = /*#__PURE__*/function () {
  function _default() {
    _classCallCheck(this, _default);

    var tree = $('.category-tree');
    new _CategoryTree__WEBPACK_IMPORTED_MODULE_0__["default"](this, tree);
    this.collapseAll(tree);
    this.expandAll(tree);
    this.addRootCategory();
    this.addSubCategory();
    $('#category-form').on('submit', this.submit);
    window.admin.removeSubmitButtonOffsetOn('#image', '.category-details-tab li > a');
  }

  _createClass(_default, [{
    key: "collapseAll",
    value: function collapseAll(tree) {
      $('.collapse-all').on('click', function (e) {
        e.preventDefault();
        tree.jstree('close_all');
      });
    }
  }, {
    key: "expandAll",
    value: function expandAll(tree) {
      $('.expand-all').on('click', function (e) {
        e.preventDefault();
        tree.jstree('open_all');
      });
    }
  }, {
    key: "addRootCategory",
    value: function addRootCategory() {
      var _this = this;

      $('.add-root-category').on('click', function () {
        _this.loading(true);

        $('.add-sub-category').addClass('disabled');
        $('.category-tree').jstree('deselect_all');

        _this.clear(); // Intentionally delay 150ms so that user feel new form is loaded.


        setTimeout(_this.loading, 150, false);
      });
    }
  }, {
    key: "addSubCategory",
    value: function addSubCategory() {
      var _this2 = this;

      $('.add-sub-category').on('click', function () {
        var selectedId = $('.category-tree').jstree('get_selected')[0];

        if (selectedId === undefined) {
          return;
        }

        _this2.clear();

        _this2.loading(true);

        window.form.appendHiddenInput('#category-form', 'parent_id', selectedId); // Intentionally delay 150ms so that user feel new form is loaded.

        setTimeout(_this2.loading, 150, false);
      });
    }
  }, {
    key: "fetchCategory",
    value: function fetchCategory(id) {
      var _this3 = this;

      this.loading(true);
      $('.add-sub-category').removeClass('disabled');
      $.ajax({
        type: 'GET',
        url: route('admin.categories.show', id),
        success: function success(category) {
          _this3.update(category);

          _this3.loading(false);
        },
        error: function (_error) {
          function error(_x) {
            return _error.apply(this, arguments);
          }

          error.toString = function () {
            return _error.toString();
          };

          return error;
        }(function (xhr) {
          error(xhr.responseJSON.message);

          _this3.loading(false);
        })
      });
    }
  }, {
    key: "update",
    value: function update(category) {
      window.form.removeErrors();
      console.log('hello');
      $('.btn-delete').removeClass('hide');
      $('.form-group .help-block').remove();
      $('#confirmation-form').attr('action', route('admin.categories.destroy', category.id));
      $('#id-field').removeClass('hide');
      $('#id').val(category.id);
      $('#name').val(category.name);
      $('#slug').val(category.slug);
      $('#slug-field').removeClass('hide');
      $('.category-details-tab .seo-tab').removeClass('hide');
      $('#is_searchable').prop('checked', category.is_searchable);
      $('#is_active').prop('checked', category.is_active);
      $('#is_show_in_menu').prop('checked', category.is_show_in_menu);
      $('.logo .image-holder-wrapper').html(this.categoryImage('logo', category.logo));
      $('.banner .image-holder-wrapper').html(this.categoryImage('banner', category.banner));
      $('#category-form input[name="parent_id"]').remove();
    }
  }, {
    key: "categoryImage",
    value: function categoryImage(fieldName, file) {
      if (!file.exists) {
        return this.imagePlaceholder();
      }

      return "\n            <div class=\"image-holder\">\n                <img src=\"".concat(file.path, "\">\n                <button type=\"button\" class=\"btn remove-image\" data-input-name=\"files[").concat(fieldName, "]\"></button>\n                <input type=\"hidden\" name=\"files[").concat(fieldName, "]\" value=\"").concat(file.id, "\">\n            </div>\n        ");
    }
  }, {
    key: "clear",
    value: function clear() {
      $('#id-field').addClass('hide');
      $('#id').val('');
      $('#name').val('');
      $('#slug').val('');
      $('#slug-field').addClass('hide');
      $('.category-details-tab .seo-tab').addClass('hide');
      $('#is_searchable').prop('checked', false);
      $('#is_active').prop('checked', false);
      $('#is_show_in_menu').prop('checked', false);
      $('.logo .image-holder-wrapper').html(this.imagePlaceholder());
      $('.banner .image-holder-wrapper').html(this.imagePlaceholder());
      $('.btn-delete').addClass('hide');
      $('.form-group .help-block').remove();
      $('#category-form input[name="parent_id"]').remove();
      $('.general-information-tab a').click();
    }
  }, {
    key: "imagePlaceholder",
    value: function imagePlaceholder() {
      return "\n            <div class=\"image-holder placeholder\">\n                <i class=\"fa fa-picture-o\"></i>\n            </div>\n        ";
    }
  }, {
    key: "loading",
    value: function loading(state) {
      if (state === true) {
        $('.overlay.loader').removeClass('hide');
      } else {
        $('.overlay.loader').addClass('hide');
      }
    }
  }, {
    key: "submit",
    value: function submit(e) {
      var selectedId = $('.category-tree').jstree('get_selected')[0];

      if (!$('#slug-field').hasClass('hide')) {
        window.form.appendHiddenInput('#category-form', '_method', 'put');
        $('#category-form').attr('action', route('admin.categories.update', selectedId));
      }

      e.currentTarget.submit();
    }
  }]);

  return _default;
}();



/***/ }),

/***/ "./Modules/Category/Resources/assets/admin/js/CategoryTree.js":
/*!********************************************************************!*\
  !*** ./Modules/Category/Resources/assets/admin/js/CategoryTree.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return _default; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var _default = /*#__PURE__*/function () {
  function _default(categoryForm, selector) {
    var _this = this;

    _classCallCheck(this, _default);

    this.selector = selector;
    $.jstree.defaults.dnd.touch = true;
    $.jstree.defaults.dnd.copy = false;
    this.fetchCategoryTree(); // On selecting a category.

    selector.on('select_node.jstree', function (e, node) {
      return categoryForm.fetchCategory(node.selected[0]);
    }); // Expand categories when jstree is loaded.

    selector.on('loaded.jstree', function () {
      return selector.jstree('open_all');
    }); // On updating category tree.

    this.selector.on('move_node.jstree', function (e, data) {
      _this.updateCategoryTree(data);
    });
  }

  _createClass(_default, [{
    key: "fetchCategoryTree",
    value: function fetchCategoryTree() {
      this.selector.jstree({
        core: {
          data: {
            url: route('admin.categories.tree')
          },
          check_callback: true
        },
        plugins: ['dnd']
      });
    }
  }, {
    key: "updateCategoryTree",
    value: function updateCategoryTree(data) {
      var _this2 = this;

      this.loading(data.node, true);
      $.ajax({
        type: 'PUT',
        url: route('admin.categories.tree.update'),
        data: {
          category_tree: this.getCategoryTree()
        },
        success: function (_success) {
          function success(_x) {
            return _success.apply(this, arguments);
          }

          success.toString = function () {
            return _success.toString();
          };

          return success;
        }(function (message) {
          success(message);

          _this2.loading(data.node, false);
        }),
        error: function (_error) {
          function error(_x2) {
            return _error.apply(this, arguments);
          }

          error.toString = function () {
            return _error.toString();
          };

          return error;
        }(function (xhr) {
          error(xhr.responseJSON.message);

          _this2.loading(data.node, false);
        })
      });
    }
  }, {
    key: "getCategoryTree",
    value: function getCategoryTree() {
      var categories = this.selector.jstree(true).get_json('#', {
        flat: true
      });
      return categories.reduce(function (formatted, category) {
        return formatted.concat({
          id: category.id,
          parent_id: category.parent === '#' ? null : category.parent,
          position: category.data.position
        });
      }, []);
    }
  }, {
    key: "loading",
    value: function loading(node, state) {
      var nodeElement = this.selector.jstree().get_node(node, true);

      if (state) {
        $(nodeElement).addClass('jstree-loading');
      } else {
        $(nodeElement).removeClass('jstree-loading');
      }
    }
  }]);

  return _default;
}();



/***/ }),

/***/ "./Modules/Category/Resources/assets/admin/js/main.js":
/*!************************************************************!*\
  !*** ./Modules/Category/Resources/assets/admin/js/main.js ***!
  \************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _CategoryForm__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CategoryForm */ "./Modules/Category/Resources/assets/admin/js/CategoryForm.js");

new _CategoryForm__WEBPACK_IMPORTED_MODULE_0__["default"]();

/***/ }),

/***/ 4:
/*!******************************************************************!*\
  !*** multi ./Modules/Category/Resources/assets/admin/js/main.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\ecommerce_full\Modules\Category\Resources\assets\admin\js\main.js */"./Modules/Category/Resources/assets/admin/js/main.js");


/***/ })

/******/ });