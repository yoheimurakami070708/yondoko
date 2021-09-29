/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/fav.js":
/*!*****************************!*\
  !*** ./resources/js/fav.js ***!
  \*****************************/
/***/ (() => {

  eval("$(\".fav\").on(\"click\", function () {\n  var scores_id = $(this).val();\n  $.ajax({\n    headers: {\n      //HTTPヘッダ情報をヘッダ名と値のマップで記述\n      'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n    },\n    url: \"/fav\",\n    type: \"POST\",\n    dataType: \"json\",\n    data: {\n      \"scores_id\": scores_id\n    }\n  }).done(function (data) {\n    //成功した時\n    var name = \"data\".concat(data.scores_id);\n\n    if (data.status === 200) {\n      console.log(data.status, name);\n      $(\"[data-id=\".concat(name, \"]\")).toggleClass('text-danger');\n    }\n  }).fail(function (data) {\n    //失敗した時\n    alert(\"通信失敗\");\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZmF2LmpzP2Y2ZDUiXSwibmFtZXMiOlsiJCIsIm9uIiwic2NvcmVzX2lkIiwidmFsIiwiYWpheCIsImhlYWRlcnMiLCJhdHRyIiwidXJsIiwidHlwZSIsImRhdGFUeXBlIiwiZGF0YSIsImRvbmUiLCJuYW1lIiwic3RhdHVzIiwiY29uc29sZSIsImxvZyIsInRvZ2dsZUNsYXNzIiwiZmFpbCIsImFsZXJ0Il0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLE1BQUQsQ0FBRCxDQUFVQyxFQUFWLENBQWEsT0FBYixFQUFxQixZQUFVO0FBQzdCLE1BQU1DLFNBQVMsR0FBR0YsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRRyxHQUFSLEVBQWxCO0FBQ0NILEVBQUFBLENBQUMsQ0FBQ0ksSUFBRixDQUFPO0FBQ0hDLElBQUFBLE9BQU8sRUFBRTtBQUFFO0FBQ1Asc0JBQWlCTCxDQUFDLENBQUMseUJBQUQsQ0FBRCxDQUE2Qk0sSUFBN0IsQ0FBa0MsU0FBbEM7QUFEWixLQUROO0FBSUhDLElBQUFBLEdBQUcsRUFBRSxNQUpGO0FBS0hDLElBQUFBLElBQUksRUFBRSxNQUxIO0FBTUhDLElBQUFBLFFBQVEsRUFBQyxNQU5OO0FBT0hDLElBQUFBLElBQUksRUFBRTtBQUNGLG1CQUFhUjtBQURYO0FBUEgsR0FBUCxFQVdLUyxJQVhMLENBV1UsVUFBQ0QsSUFBRCxFQUFVO0FBQUU7QUFDZCxRQUFNRSxJQUFJLGlCQUFVRixJQUFJLENBQUNSLFNBQWYsQ0FBVjs7QUFDQSxRQUFHUSxJQUFJLENBQUNHLE1BQUwsS0FBZ0IsR0FBbkIsRUFBd0I7QUFDcEJDLE1BQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZTCxJQUFJLENBQUNHLE1BQWpCLEVBQXdCRCxJQUF4QjtBQUNBWixNQUFBQSxDQUFDLG9CQUFhWSxJQUFiLE9BQUQsQ0FBdUJJLFdBQXZCLENBQW1DLGFBQW5DO0FBQ0g7QUFDSixHQWpCTCxFQWtCS0MsSUFsQkwsQ0FrQlUsVUFBQ1AsSUFBRCxFQUFVO0FBQUU7QUFDZFEsSUFBQUEsS0FBSyxDQUFDLE1BQUQsQ0FBTDtBQUNILEdBcEJMO0FBcUJGLENBdkJEIiwic291cmNlc0NvbnRlbnQiOlsiJChcIi5mYXZcIikub24oXCJjbGlja1wiLGZ1bmN0aW9uKCl7XG4gIGNvbnN0IHNjb3Jlc19pZCA9ICQodGhpcykudmFsKClcbiAgICQuYWpheCh7XG4gICAgICAgaGVhZGVyczogeyAvL0hUVFDjg5jjg4Pjg4Dmg4XloLHjgpLjg5jjg4Pjg4DlkI3jgajlgKTjga7jg57jg4Pjg5fjgafoqJjov7BcbiAgICAgICAgICAgJ1gtQ1NSRi1UT0tFTicgOiAkKCdtZXRhW25hbWU9XCJjc3JmLXRva2VuXCJdJykuYXR0cignY29udGVudCcpXG4gICAgICAgfSxcbiAgICAgICB1cmw6IFwiL2ZhdlwiLFxuICAgICAgIHR5cGU6IFwiUE9TVFwiLFxuICAgICAgIGRhdGFUeXBlOlwianNvblwiLFxuICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgXCJzY29yZXNfaWRcIjogc2NvcmVzX2lkXG4gICAgICAgfVxuICAgfSlcbiAgICAgICAuZG9uZSgoZGF0YSkgPT4geyAvL+aIkOWKn+OBl+OBn+aZglxuICAgICAgICAgICBjb25zdCBuYW1lID0gYGRhdGEke2RhdGEuc2NvcmVzX2lkfWBcbiAgICAgICAgICAgaWYoZGF0YS5zdGF0dXMgPT09IDIwMCkge1xuICAgICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YS5zdGF0dXMsbmFtZSlcbiAgICAgICAgICAgICAgICQoYFtkYXRhLWlkPSR7bmFtZX1dYCkudG9nZ2xlQ2xhc3MoJ3RleHQtZGFuZ2VyJylcbiAgICAgICAgICAgfVxuICAgICAgIH0pXG4gICAgICAgLmZhaWwoKGRhdGEpID0+IHsgLy/lpLHmlZfjgZfjgZ/mmYJcbiAgICAgICAgICAgYWxlcnQoXCLpgJrkv6HlpLHmlZdcIik7XG4gICAgICAgfSlcbn0pIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9mYXYuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/fav.js\n");

  /***/ })
  
  /******/ 	});
  /************************************************************************/
  /******/ 	
  /******/ 	// startup
  /******/ 	// Load entry module and return exports
  /******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
  /******/ 	var __webpack_exports__ = {};
  /******/ 	__webpack_modules__["./resources/js/fav.js"]();
  /******/ 	
  /******/ })()
  ;