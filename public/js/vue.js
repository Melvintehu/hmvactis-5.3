/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 185);
/******/ })
/************************************************************************/
/******/ ({

/***/ 10:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * Use this class if you want to make call to the API
 * @type {API}
 */
window.Form = new (function () {
   function _class() {
      _classCallCheck(this, _class);
   }
   // vueInstance = a this or new Vue()
   // formName = model that has to be found. Check Elements doc for the validation of a form


   _createClass(_class, [{
      key: 'trackProgress',
      value: function trackProgress(vueInstance, formName) {
         var _this = this;

         var ref = vueInstance.$refs[formName];
         var totalValid = 0;
         var totalValidNeeded = ref.fields.length;
         ref.fields.forEach(function (field) {
            if (_this.isValid(vueInstance, field.prop, formName)) {
               totalValid++;
            }
         });
         return Math.floor(100 / totalValidNeeded * totalValid);
      }
      // Check whether a field is valid. A function isnt defined yet for Elements. So this is a workaround

   }, {
      key: 'isValid',
      value: function isValid(vueInstance, field, formName) {
         var valid = false;
         var ref = vueInstance.$refs[formName];
         if (typeof ref !== 'undefined') {
            ref.validateField(field, function (msg) {
               valid = !msg;
            });
         }
         return valid;
      }
   }, {
      key: 'resetForm',
      value: function resetForm(vueInstance, formName) {
         vueInstance.$refs[formName].resetFields();
      }
   }, {
      key: 'generatePassword',
      value: function generatePassword(event, formModel, field) {
         // let ref = vueInstance.$refs[formName];
         var randomstring = Math.random().toString(36).slice(-8);
         formModel[field] = randomstring.toUpperCase();
      }
      // reset the media to null so nothing is shown
      // dont forget to define in :data in the uploader : { type : <insert type> }
      // nasty work around to see which type is deleted ( which field ).
      // goes through api and reverses the type through the api ( api/v1/upload) (  $uploader->type = $request->get('type') )

   }, {
      key: 'resetMedia',
      value: function resetMedia(formModel) {
         var field = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

         if (field != null) {
            formModel[field] = [];
         }
      }
      // Set the properties and keys
      // dont forget to define in :data in the uploader : { type : <insert type> }
      // nasty work around to see which type is deleted ( which field ).
      // goes through api and reverses the type through the api ( api/v1/upload) (  $uploader->type = $request->get('type') )

   }, {
      key: 'setMedia',
      value: function setMedia(formModel, field, response) {
         var media = {
            name: response.filename,
            url: '/storage/' + response.directory + '/' + response.filename + '.' + response.extension,
            id: response.id,
            type: response.type
         };
         var finalForm = formModel[field].push(media);
      }
      // Validation rule form email , used in Elements Validation for forms : http://element.eleme.io/#/en-US/component/form

   }, {
      key: 'validateMail',
      value: function validateMail(rule, value, callback) {
         // emailregex.com
         var re = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
         if (re.test(value)) {
            callback();
         } else {
            callback(new Error('Geen valide email'));
         }
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 11:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * A helper class. All components can use this class. 
 * Provides one accespoint to common used functions
 * @type {Helper}
 */
window.Helper = new (function () {
   function _class() {
      _classCallCheck(this, _class);
   }
   /**
    * Capitalizes strings
    * @param  {[string]} 
    * @return {[void]}
    */


   _createClass(_class, [{
      key: 'capitalize',
      value: function capitalize(string) {
         console.log(string);
         return string;
         // @todo : Cannot read property '0' of undefined
         // return string[0].toUpperCase() + string.slice(1);
      }
      /**
       * Method for removing items from an array
       * @param  {[array]}
       * @param  {[toBeRemovedItem]}
       * @return {[type]}
       */

   }, {
      key: 'removeFromArray',
      value: function removeFromArray(array, toBeRemovedItem) {
         return array.splice(array.indexOf(toBeRemovedItem), 1);
      }
      /**
       * Method for checking if an object has a certain property
       * logs error if the wrong type of property have been given.
       * @param  {[obj]}
       * @param  {[prop]}
       * @return {Boolean}
       */

   }, {
      key: 'hasProperty',
      value: function hasProperty(obj, prop) {
         if (!Exception.isType(prop, 'string')) {
            return false;
         } // checks if the argument given is a string
         var proto = obj.__proto__ || obj.constructor.prototype;
         return prop in obj && (!(prop in proto) || proto[prop] !== obj[prop]);
      }
      /**
       * @param  {[number]}
       * @return {Boolean}
       */

   }, {
      key: 'isNumeric',
      value: function isNumeric(number) {
         return !isNaN(parseFloat(number)) && isFinite(number);
      }
      /**
       * turns an array into an object
       * @param  {[arr]} array to turn into an object
       * @return {[type]}
       */

   }, {
      key: 'toObject',
      value: function toObject(arr) {
         var rv = {};
         for (var i = 0; i < arr.length; ++i) {
            rv[i] = arr[i];
         }
         return rv;
      }
   }, {
      key: 'formatDate',
      value: function formatDate(date) {
         var dates = date.split([" "]);
         return dates[0];
      }
   }, {
      key: 'decimalRound',
      value: function decimalRound(number, precision) {
         var factor = Math.pow(10, precision);
         var tempNumber = number * factor;
         var roundedTempNumber = Math.round(tempNumber);
         return roundedTempNumber / factor;
      }

      /**
       * Method for checking if an object has a certain property
       * logs error if the wrong type of property have been given.
       * @param  {[obj]}
       * @param  {[prop]}
       * @return {Boolean}
       */

   }, {
      key: 'hasProperty',
      value: function hasProperty(obj, prop) {
         if (!Exception.isType(prop, 'string')) {
            return false;
         } // checks if the argument given is a string
         var proto = obj.__proto__ || obj.constructor.prototype;
         return prop in obj && (!(prop in proto) || proto[prop] !== obj[prop]);
      }

      /**
       * @param  {[number]}
       * @return {Boolean}
       */

   }, {
      key: 'isNumeric',
      value: function isNumeric(number) {
         return !isNaN(parseFloat(number)) && isFinite(number);
      }

      /**
       * turns an array into an object
       * @param  {[arr]} array to turn into an object
       * @return {[type]}
       */

   }, {
      key: 'toObject',
      value: function toObject(arr) {
         var rv = {};
         for (var i = 0; i < arr.length; ++i) {
            rv[i] = arr[i];
         }
         return rv;
      }
   }, {
      key: 'formatDate',
      value: function formatDate(date) {
         var dates = date.split([" "]);
         return dates[0];
      }
   }, {
      key: 'contains',
      value: function contains($search, $array) {
         return array.indexOf($search) !== null;
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 12:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * class that can be used for messaging the user
 * @type {class}
 */
window.Messager = new (function () {
   function _class() {
      _classCallCheck(this, _class);

      this.vue = new Vue();
      this.messageTypes = {
         'success': 'success',
         'warning': 'warning',
         'danger': 'danger',
         'error': 'error',
         'info': 'info',
         'default': 'info'
      };
   }
   /**
    * messages the user 
    * @param  {[type]} type of message
    * @param  {[message]}
    * @return {[void]}
    */


   _createClass(_class, [{
      key: 'message',
      value: function message(type) {
         var _message = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

         this.vue.$message({
            message: _message || '',
            type: this.messageTypes[type] || this.messageTypes['default']
         });
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 13:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * Notifier class for notifying the user with a specific message.
 * @type {class}
 */
window.Notifier = new (function () {
   function _class() {
      _classCallCheck(this, _class);

      this.vue = new Vue();
      this.notifyTypes = {
         'success': 'success',
         'warning': 'warning',
         'danger': 'danger',
         'error': 'error',
         'info': 'info',
         'default': 'info'
      };
   }
   /**
    * Ask the user for a confirmation
    * @param  {[message]}
    * @return {[boolean]}
    */


   _createClass(_class, [{
      key: 'askConfirmation',
      value: function askConfirmation(procceed) {
         var message = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

         this.vue.$confirm('Weet u zeker dat u dit wilt verwijderen?', 'Warning', {
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
            type: 'warning'
         }).then(function () {
            procceed();
         }).catch(function () {});
      }
      /**
       * Notify the user 
       * @param  {[type]} type of message
       * @param  {[message]} 
       * @return {[void]}
       */

   }, {
      key: 'notify',
      value: function notify(type, message) {
         var title = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;

         console.log(type, message);
         if (title == null) {
            title = Helper.capitalize(this.notifyTypes[type]) || Helper.capitalize(this.notifyTypes['default']);
         }

         this.vue.$notify({
            title: title,
            message: message,
            type: this.notifyTypes[type] || this.notifyTypes['default']
         });
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 132:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(5);

Vue.component('image-display', __webpack_require__(176));
Vue.component('image-uploader', __webpack_require__(177));
Vue.component('cropper', __webpack_require__(175));

new Vue({
    el: '#app'
});

/***/ }),

/***/ 163:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    props: {
        route: "",
        aspectheight: "",
        aspectwidth: "",
        dir: ""
    },
    data: function data() {
        return {
            image: null,
            croppedImage: null,
            cropper: null,
            photo: null
        };
    },
    created: function created() {
        var _this = this;

        this.photo = null;
        Event.listen('imageCropped' + this.getId(), function (croppedImage) {
            _this.croppedImage = croppedImage;
        });

        Event.listen('croppingImage' + this.getId(), function () {
            _this.croppedImage = null;
        });

        Event.listen('setCropper', function (photo) {

            _this.photo = null;
            setTimeout(function () {
                _this.photo = photo;
            }, 200);
            setTimeout(function () {
                _this.setCropper();
            }, 300);
        });
    },


    methods: {
        getImage: function getImage() {
            return '/images/' + this.photo.type + '/' + this.photo.model_id + '/' + this.photo.filename + '?' + new Date().getTime();
        },
        getId: function getId() {
            return this.route + this.aspectwidth + this.aspectheight;
        },
        getCroppedImage: function getCroppedImage() {
            return '/' + this.croppedImage + '?' + new Date().getTime();
        },
        setCropper: function setCropper() {
            var image = document.getElementById(this.getId());
            console.log(image);

            this.cropper = new Cropper(image, {
                aspectRatio: this.aspectwidth / this.aspectheight
            });
        },
        storePhoto: function storePhoto() {
            var _this2 = this;

            Event.fire('croppingImage' + this.getId());

            var containerData = this.cropper.getContainerData();
            var cropBoxData = this.cropper.getCropBoxData();

            var imageWidth = containerData.width;
            var imageHeight = containerData.height;

            var cropWidth = cropBoxData.width;
            var cropHeight = cropBoxData.height;

            var cropCoordinateLeft = cropBoxData.left;
            var cropCoordinateTop = cropBoxData.top;

            // calculate percentages
            var yPercentage = Math.round(100 / imageHeight * cropCoordinateTop) / 100;
            var xPercentage = Math.round(100 / imageWidth * cropCoordinateLeft) / 100;
            var cropHeightPercentage = Math.round(100 / imageHeight * cropHeight) / 100;
            var cropWidthPercentage = Math.round(100 / imageWidth * cropWidth) / 100;

            axios.get('/' + this.route + '?width=' + cropWidthPercentage + '&height=' + cropHeightPercentage + '&x=' + xPercentage + '&y=' + yPercentage + '&dir=' + this.aspectwidth + 'x' + this.aspectheight + '&photo=' + JSON.stringify(this.photo), {}).then(function (response) {
                setTimeout(function () {
                    Event.fire('imageCropped' + _this2.getId(), response.data.croppedImage);
                });
            });
        }
    }

};

/***/ }),

/***/ 164:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    props: {
        id: "",
        model_id: "",
        type: "",
        filename: ""
    },
    mounted: function mounted() {

        var photo = {
            id: this.id,
            model_id: this.model_id,
            type: this.type,
            filename: this.filename
        };

        Event.fire('setCropper', photo);
    }
};

/***/ }),

/***/ 165:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    props: {
        route: "",
        model_id: "",
        type: ""
    },
    data: function data() {
        var _ref;

        return _ref = {
            image: null,
            fileInput: null
        }, _defineProperty(_ref, "image", null), _defineProperty(_ref, "croppedImage", null), _defineProperty(_ref, "cropper", null), _defineProperty(_ref, "displayCrop", false), _defineProperty(_ref, "photo", null), _ref;
    },
    created: function created() {},
    mounted: function mounted() {
        var _this = this;

        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 20, // MB
            headers: { "X-CSRF-TOKEN": Laravel.csrfToken },
            accept: function accept(file, done) {
                done();
            },
            success: function success(file, response) {
                _this.photo = null;

                setTimeout(function () {
                    _this.croppedImage = null;
                    _this.photo = {
                        id: response.id,
                        filename: response.filename,
                        type: response.type,
                        model_id: response.model_id
                    };
                    setTimeout(function () {
                        Event.fire('setCropper', _this.photo);
                    }, 50);
                }, 10);
            }
        };
    },


    methods: {}

};

/***/ }),

/***/ 168:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(169)();
// imports


// module
exports.push([module.i, "\nimg {\n    max-width: 100%;\n}\n", ""]);

// exports


/***/ }),

/***/ 169:
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function() {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		var result = [];
		for(var i = 0; i < this.length; i++) {
			var item = this[i];
			if(item[2]) {
				result.push("@media " + item[2] + "{" + item[1] + "}");
			} else {
				result.push(item[1]);
			}
		}
		return result.join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};


/***/ }),

/***/ 175:
/***/ (function(module, exports, __webpack_require__) {

var __vue_exports__, __vue_options__
var __vue_styles__ = {}

/* script */
__vue_exports__ = __webpack_require__(163)

/* template */
var __vue_template__ = __webpack_require__(180)
__vue_options__ = __vue_exports__ = __vue_exports__ || {}
if (
  typeof __vue_exports__.default === "object" ||
  typeof __vue_exports__.default === "function"
) {
if (Object.keys(__vue_exports__).some(function (key) { return key !== "default" && key !== "__esModule" })) {console.error("named exports are not supported in *.vue files.")}
__vue_options__ = __vue_exports__ = __vue_exports__.default
}
if (typeof __vue_options__ === "function") {
  __vue_options__ = __vue_options__.options
}
__vue_options__.__file = "C:\\xampp\\htdocs\\MEN\\laravel 5.3 projecten\\hmvactis\\resources\\assets\\js\\components\\Cropper.vue"
if(typeof __vue_options__.name === "undefined") {
  __vue_options__.name = "Cropper"
}__vue_options__.render = __vue_template__.render
__vue_options__.staticRenderFns = __vue_template__.staticRenderFns

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e1805334", __vue_options__)
  } else {
    hotAPI.reload("data-v-e1805334", __vue_options__)
  }
})()}
if (__vue_options__.functional && typeof __vue_template__ !== "undefined") {console.error("[vue-loader] Cropper.vue: functional components are not supported with templates, they should use render functions.")}

module.exports = __vue_exports__


/***/ }),

/***/ 176:
/***/ (function(module, exports, __webpack_require__) {

var __vue_exports__, __vue_options__
var __vue_styles__ = {}

/* script */
__vue_exports__ = __webpack_require__(164)

/* template */
var __vue_template__ = __webpack_require__(178)
__vue_options__ = __vue_exports__ = __vue_exports__ || {}
if (
  typeof __vue_exports__.default === "object" ||
  typeof __vue_exports__.default === "function"
) {
if (Object.keys(__vue_exports__).some(function (key) { return key !== "default" && key !== "__esModule" })) {console.error("named exports are not supported in *.vue files.")}
__vue_options__ = __vue_exports__ = __vue_exports__.default
}
if (typeof __vue_options__ === "function") {
  __vue_options__ = __vue_options__.options
}
__vue_options__.__file = "C:\\xampp\\htdocs\\MEN\\laravel 5.3 projecten\\hmvactis\\resources\\assets\\js\\components\\ImageDisplay.vue"
if(typeof __vue_options__.name === "undefined") {
  __vue_options__.name = "ImageDisplay"
}__vue_options__.render = __vue_template__.render
__vue_options__.staticRenderFns = __vue_template__.staticRenderFns

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-54f72cde", __vue_options__)
  } else {
    hotAPI.reload("data-v-54f72cde", __vue_options__)
  }
})()}
if (__vue_options__.functional && typeof __vue_template__ !== "undefined") {console.error("[vue-loader] ImageDisplay.vue: functional components are not supported with templates, they should use render functions.")}

module.exports = __vue_exports__


/***/ }),

/***/ 177:
/***/ (function(module, exports, __webpack_require__) {

var __vue_exports__, __vue_options__
var __vue_styles__ = {}

/* styles */
__webpack_require__(182)

/* script */
__vue_exports__ = __webpack_require__(165)

/* template */
var __vue_template__ = __webpack_require__(179)
__vue_options__ = __vue_exports__ = __vue_exports__ || {}
if (
  typeof __vue_exports__.default === "object" ||
  typeof __vue_exports__.default === "function"
) {
if (Object.keys(__vue_exports__).some(function (key) { return key !== "default" && key !== "__esModule" })) {console.error("named exports are not supported in *.vue files.")}
__vue_options__ = __vue_exports__ = __vue_exports__.default
}
if (typeof __vue_options__ === "function") {
  __vue_options__ = __vue_options__.options
}
__vue_options__.__file = "C:\\xampp\\htdocs\\MEN\\laravel 5.3 projecten\\hmvactis\\resources\\assets\\js\\components\\ImageUploader.vue"
if(typeof __vue_options__.name === "undefined") {
  __vue_options__.name = "ImageUploader"
}__vue_options__.render = __vue_template__.render
__vue_options__.staticRenderFns = __vue_template__.staticRenderFns

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b391affc", __vue_options__)
  } else {
    hotAPI.reload("data-v-b391affc", __vue_options__)
  }
})()}
if (__vue_options__.functional && typeof __vue_template__ !== "undefined") {console.error("[vue-loader] ImageUploader.vue: functional components are not supported with templates, they should use render functions.")}

module.exports = __vue_exports__


/***/ }),

/***/ 178:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div')
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-54f72cde", module.exports)
  }
}

/***/ }),

/***/ 179:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "container"
  }, [_c('div', {
    staticClass: "row"
  }, [_vm._t("default"), _vm._v(" "), _c('div', {
    staticClass: "col-lg-12"
  }, [_c('form', {
    staticClass: "dropzone",
    attrs: {
      "action": '/' + _vm.route,
      "id": "my-awesome-dropzone"
    }
  }, [_c('input', {
    attrs: {
      "type": "hidden",
      "name": "model_id"
    },
    domProps: {
      "value": _vm.model_id
    }
  }), _vm._v(" "), _c('input', {
    attrs: {
      "type": "hidden",
      "name": "model_type"
    },
    domProps: {
      "value": _vm.type
    }
  })])])], 2)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-b391affc", module.exports)
  }
}

/***/ }),

/***/ 180:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('div', {
    staticClass: "col-lg-10"
  }, [_c('div', {
    staticClass: "col-lg-6",
    staticStyle: {
      "text-align": "center"
    }
  }, [(_vm.photo != null) ? _c('div', [_c('img', {
    attrs: {
      "id": _vm.getId(),
      "src": _vm.getImage()
    }
  })]) : _vm._e()]), _vm._v(" "), _c('div', {
    staticClass: "col-lg-6",
    staticStyle: {
      "text-align": "center"
    }
  }, [(_vm.croppedImage != null) ? _c('div', {
    staticStyle: {
      "height": "200px",
      "width": "200px",
      "overflow": "hidden"
    }
  }, [_c('img', {
    staticStyle: {
      "max-height": "100%"
    },
    attrs: {
      "src": _vm.getCroppedImage()
    }
  })]) : _vm._e()]), _vm._v(" "), _c('div', {
    staticClass: "col-lg-12",
    staticStyle: {
      "text-align": "center",
      "margin-bottom": "20px",
      "margin-top": "20px"
    }
  }, [_c('button', {
    staticClass: "btn btn-primary",
    on: {
      "click": _vm.storePhoto
    }
  }, [_vm._v("Crop Photo")])])])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-e1805334", module.exports)
  }
}

/***/ }),

/***/ 181:
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
var stylesInDom = {},
	memoize = function(fn) {
		var memo;
		return function () {
			if (typeof memo === "undefined") memo = fn.apply(this, arguments);
			return memo;
		};
	},
	isOldIE = memoize(function() {
		return /msie [6-9]\b/.test(window.navigator.userAgent.toLowerCase());
	}),
	getHeadElement = memoize(function () {
		return document.head || document.getElementsByTagName("head")[0];
	}),
	singletonElement = null,
	singletonCounter = 0,
	styleElementsInsertedAtTop = [];

module.exports = function(list, options) {
	if(typeof DEBUG !== "undefined" && DEBUG) {
		if(typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};
	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (typeof options.singleton === "undefined") options.singleton = isOldIE();

	// By default, add <style> tags to the bottom of <head>.
	if (typeof options.insertAt === "undefined") options.insertAt = "bottom";

	var styles = listToStyles(list);
	addStylesToDom(styles, options);

	return function update(newList) {
		var mayRemove = [];
		for(var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];
			domStyle.refs--;
			mayRemove.push(domStyle);
		}
		if(newList) {
			var newStyles = listToStyles(newList);
			addStylesToDom(newStyles, options);
		}
		for(var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];
			if(domStyle.refs === 0) {
				for(var j = 0; j < domStyle.parts.length; j++)
					domStyle.parts[j]();
				delete stylesInDom[domStyle.id];
			}
		}
	};
}

function addStylesToDom(styles, options) {
	for(var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];
		if(domStyle) {
			domStyle.refs++;
			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}
			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];
			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}
			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles(list) {
	var styles = [];
	var newStyles = {};
	for(var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};
		if(!newStyles[id])
			styles.push(newStyles[id] = {id: id, parts: [part]});
		else
			newStyles[id].parts.push(part);
	}
	return styles;
}

function insertStyleElement(options, styleElement) {
	var head = getHeadElement();
	var lastStyleElementInsertedAtTop = styleElementsInsertedAtTop[styleElementsInsertedAtTop.length - 1];
	if (options.insertAt === "top") {
		if(!lastStyleElementInsertedAtTop) {
			head.insertBefore(styleElement, head.firstChild);
		} else if(lastStyleElementInsertedAtTop.nextSibling) {
			head.insertBefore(styleElement, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			head.appendChild(styleElement);
		}
		styleElementsInsertedAtTop.push(styleElement);
	} else if (options.insertAt === "bottom") {
		head.appendChild(styleElement);
	} else {
		throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
	}
}

function removeStyleElement(styleElement) {
	styleElement.parentNode.removeChild(styleElement);
	var idx = styleElementsInsertedAtTop.indexOf(styleElement);
	if(idx >= 0) {
		styleElementsInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement(options) {
	var styleElement = document.createElement("style");
	styleElement.type = "text/css";
	insertStyleElement(options, styleElement);
	return styleElement;
}

function addStyle(obj, options) {
	var styleElement, update, remove;

	if (options.singleton) {
		var styleIndex = singletonCounter++;
		styleElement = singletonElement || (singletonElement = createStyleElement(options));
		update = applyToSingletonTag.bind(null, styleElement, styleIndex, false);
		remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true);
	} else {
		styleElement = createStyleElement(options);
		update = applyToTag.bind(null, styleElement);
		remove = function() {
			removeStyleElement(styleElement);
		};
	}

	update(obj);

	return function updateStyle(newObj) {
		if(newObj) {
			if(newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap)
				return;
			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;
		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag(styleElement, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (styleElement.styleSheet) {
		styleElement.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = styleElement.childNodes;
		if (childNodes[index]) styleElement.removeChild(childNodes[index]);
		if (childNodes.length) {
			styleElement.insertBefore(cssNode, childNodes[index]);
		} else {
			styleElement.appendChild(cssNode);
		}
	}
}

function applyToTag(styleElement, obj) {
	var css = obj.css;
	var media = obj.media;
	var sourceMap = obj.sourceMap;

	if (media) {
		styleElement.setAttribute("media", media);
	}

	if (sourceMap) {
		// https://developer.chrome.com/devtools/docs/javascript-debugging
		// this makes source maps inside style tags work properly in Chrome
		css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */';
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	if (styleElement.styleSheet) {
		styleElement.styleSheet.cssText = css;
	} else {
		while(styleElement.firstChild) {
			styleElement.removeChild(styleElement.firstChild);
		}
		styleElement.appendChild(document.createTextNode(css));
	}
}


/***/ }),

/***/ 182:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(168);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(181)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../node_modules/css-loader/index.js!./../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-b391affc!./../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./ImageUploader.vue", function() {
			var newContent = require("!!./../../../../node_modules/css-loader/index.js!./../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-b391affc!./../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./ImageUploader.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 185:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(132);


/***/ }),

/***/ 4:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * Use this class if you want to make call to the API
 * @type {API}
 */
window.API = new (function () {
   function _class() {
      _classCallCheck(this, _class);

      this.vue = new Vue();
      this.vue.data = {
         data: null
      };
   }

   _createClass(_class, [{
      key: 'version',
      value: function version() {
         return '/api/v1/';
      }
   }, {
      key: 'headers',
      value: function headers() {
         var headers = {
            'Authorization': 'Bearer ' + Laravel.user.api_token,
            'X-CSRF-TOKEN': Laravel.csrfToken
         };
         return headers;
      }
   }, {
      key: 'removeFile',
      value: function removeFile(id) {
         console.log('removeFile', id);
         this.delete('upload', id);
      }
   }, {
      key: 'uploadURL',
      value: function uploadURL() {
         return 'upload';
      }
      /**
       * Simple wrapper for vue upload
       */

   }, {
      key: 'uploadImage',
      value: function uploadImage(base, $parameters) {
         return this.vue.$http.post(this.uploadURL, $parameters).then(function (response) {});
      }
   }, {
      key: 'put',
      value: function put(base, data, success) {
         var failure = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;

         return this.vue.$http.put(this.version() + base, data).then(function (response) {
            success(response);
         }, failure);
      }
      /**
       * Simple wrapper for vue delete request
       * @param  {[base]} api route
       * @param  {[id]} object id
       * @return {[void]}
       */

   }, {
      key: 'delete',
      value: function _delete(base, id) {
         this.vue.$http.delete(this.version() + base + '/' + id, {}).then(function () {
            Notifier.notify('success', 'Gelukt!', 'Verwijderd');
         }, function () {
            Notifier.notify('failed', 'Mislukt', 'Verwijderd');
         });
      }
      /**
       * Deletes an object from an array, if the object exists in the database
       * a call to the api is made to delete that object in the database
       * @param  {[type]}  object  [ The object to delete ]
       * @param  {[type]}  array   [ The target array ]
       * @param  {String}  apiCall [ The call to the api (/users, /customers, /projects)]
       * @param  {Boolean} confirm [ Ask the user for confirmation ]
       * @return {[boolean]}          [Return a boolean if succeeded or not]
       */

   }, {
      key: 'deleteObjectFrom',
      value: function deleteObjectFrom(object, array) {
         var apiCall = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
         var confirm = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;

         if (!Helper.hasProperty(object, 'id')) {
            Helper.removeFromArray(array, object);
            return false;
         }
         if (confirm == true) {
            this.vue.$confirm('Weet u zeker dat u dit wilt verwijderen?', 'Warning', {
               confirmButtonText: 'OK',
               cancelButtonText: 'Cancel',
               type: 'warning'
            }).then(function () {
               Helper.removeFromArray(array, object);
               API.delete(apiCall, object.id);
            }).catch(function () {});
         } else {
            Helper.removeFromArray(array, object);
            API.delete(apiCall, object.id);
         }
      }
      /**
       * Simple wrapper for vue get request.
       * @param  {[base]}
       * @return {[vue http request]}
       */

   }, {
      key: 'post',
      value: function post(base, success) {
         var failure = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
         var parameters = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};

         return this.vue.$http.post(this.version() + base, parameters).then(function (response) {
            var data = JSON.parse(response.body);
            success(data);
         }, failure);
      }
      /**
       * Simple wrapper for vue get request.
       * @param  {[base]}
       * @return {[vue http request]}
       */

   }, {
      key: 'get',
      value: function get(base, success) {
         var failure = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
         var $parameters = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : {};

         return this.vue.$http.get(this.version() + base, $parameters).then(function (response) {
            var data = JSON.parse(response.body);
            if (success.constructor === Array) {
               success.forEach(function (callback) {
                  callback(data);
               });
            } else {
               success(data);
            }
         }, failure);
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 5:
/***/ (function(module, exports, __webpack_require__) {

/**
 * Load this file in your app.js to get access to Core classes
 */
// Global Exception helper class
__webpack_require__(9);
// Helper class 
__webpack_require__(11);
// Global Api Helper class
__webpack_require__(4);
// Global Event dispatcher class
__webpack_require__(8);
// Global Notifier class
__webpack_require__(13);
// Global message class
__webpack_require__(12);
// Global datehelper class
__webpack_require__(6);
// Global formhelper class
__webpack_require__(10);
// Global date-picker class
__webpack_require__(7);

/***/ }),

/***/ 6:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

window.DateHelper = new (function () {
	function _class() {
		_classCallCheck(this, _class);
	}

	_createClass(_class, [{
		key: 'findMondayOfWeekAndYear',
		value: function findMondayOfWeekAndYear(week, year) {
			return moment().day("Monday").week(week).year(year);
		}
	}, {
		key: 'setDate',
		value: function setDate(date) {
			this.date = moment(date);
			return this;
		}
	}, {
		key: 'getMonday',
		value: function getMonday() {
			this.date.startOf('isoweek').subtract(1, 'days');
			return this;
		}
	}, {
		key: 'getTuesday',
		value: function getTuesday() {
			this.getMonday().date.add(1, 'd');
			return this;
		}
	}, {
		key: 'getWednesday',
		value: function getWednesday() {
			this.getMonday().date.add(2, 'd');
			return this;
		}
	}, {
		key: 'getThursday',
		value: function getThursday() {
			this.getMonday().date.add(3, 'd');
			return this;
		}
	}, {
		key: 'getFriday',
		value: function getFriday() {
			this.getMonday().date.add(4, 'd');
			return this;
		}
	}, {
		key: 'getSaturday',
		value: function getSaturday() {
			this.getMonday().date.add(5, 'd');
			return this;
		}
	}, {
		key: 'getSunday',
		value: function getSunday() {
			this.getMonday().date.add(6, 'd');
			return this;
		}
	}, {
		key: 'getDate',
		value: function getDate() {
			return this.date;
		}
	}, {
		key: 'format',
		value: function format() {
			var day = this.date;
			var dag = day.get('date');
			var month = day.get('month');
			var year = day.get('year');

			month = this.normalizeMonth(month);
			dag = this.normalizeDay(dag);
			return year + '-' + month + '-' + dag;
		}
	}, {
		key: 'normalizeMonth',
		value: function normalizeMonth(month) {
			month += 1;
			return month >= 10 ? month : '0' + month;
		}
	}, {
		key: 'normalizeDay',
		value: function normalizeDay(day) {
			day += 1;
			return day >= 10 ? day : '0' + day;
		}
	}]);

	return _class;
}())();

/***/ }),

/***/ 7:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * Use this class if you want to make call to the API
 * @type {API}
 */
window.DatePicker = new (function () {
   function _class() {
      _classCallCheck(this, _class);

      this.vue = new Vue();
      this.options = this.getPickerOptions();
   }
   /***
    *  Set the picker from Elements to a certain day periode ( between dates )
    */


   _createClass(_class, [{
      key: 'setPickerPeriod',
      value: function setPickerPeriod(picker, days) {
         var end = new Date();
         var start = new Date();
         start.setTime(start.getTime() - 3600 * 1000 * 24 * days);
         picker.$emit('pick', [start, end]);
      }
   }, {
      key: 'getPickerOptions',
      value: function getPickerOptions() {
         return {
            shortcuts: [{
               text: 'Afgelopen week',
               onClick: function onClick(picker) {
                  DatePicker.setPickerPeriod(picker, 7);
               }
            }, {
               text: 'Afgelopen maand',
               onClick: function onClick(picker) {
                  DatePicker.setPickerPeriod(picker, 30);
               }
            }, {
               text: 'Afgelopen 3 maanden',
               onClick: function onClick(picker) {
                  DatePicker.setPickerPeriod(picker, 90);
               }
            }, {
               text: 'Afgelopen half jaar',
               onClick: function onClick(picker) {
                  DatePicker.setPickerPeriod(picker, 180);
               }
            }, {
               text: 'Afgelopen jaar',
               onClick: function onClick(picker) {
                  DatePicker.setPickerPeriod(picker, 365);
               }
            }]
         };
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 8:
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * Event dispatcher class, for emitting and listening for events.
 * By using this class you can emit an event to any component in vue regardless of it being a child, parent or sibling.
 * @type {Event}
 */

window.Event = new (function () {
   function _class() {
      _classCallCheck(this, _class);

      this.vue = new Vue();
   }

   /**
    * Method which can be used to fire events.
    * @param  {[event]} the name of the event
    * @param  {[data]} data to send with the event
    * @return {[void]}
    */


   _createClass(_class, [{
      key: 'fire',
      value: function fire(event) {
         var data = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

         this.vue.$emit(event, data);
      }

      /**
       * Method which can be used to listen to events.
       * @param  {[event]} the name of the event
       * @param  {callback} the callback function to execute
       * @return {[void]}
       */

   }, {
      key: 'listen',
      value: function listen(event, callback) {
         this.vue.$on(event, callback);
      }

      /**
       * Method to start the loading screen
       * @return {[void]}
       */

   }, {
      key: 'startLoading',
      value: function startLoading() {
         Event.fire('loading_start');
      }

      /**
       * Method to stop the loading screen
       * @return {[void]}
       */

   }, {
      key: 'stopLoading',
      value: function stopLoading() {
         setTimeout(function () {
            Event.fire('loading_done');
         }, 500);
      }
   }]);

   return _class;
}())();

/***/ }),

/***/ 9:
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

window.Exception = new (function () {
	function _class() {
		_classCallCheck(this, _class);
	}

	_createClass(_class, [{
		key: 'isType',
		value: function isType(prop, type) {
			if ((typeof prop === 'undefined' ? 'undefined' : _typeof(prop)) !== type) {
				console.log('Helper::hasProperty expects second argument to be of type .' + type + ' ' + (typeof prop === 'undefined' ? 'undefined' : _typeof(prop)) + ' found');
				return false;
			}
			return true;
		}
	}]);

	return _class;
}())();

/***/ })

/******/ });