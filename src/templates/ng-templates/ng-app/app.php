'use strict';
angular.module("myApp", [
    'CustomDirectives',
    'xeditable',
    'toaster'
]).run(function (editableOptions) {
    editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
});
// @codekit-append "MainController.js"