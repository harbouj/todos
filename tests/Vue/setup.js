require("jsdom-global")();

window.Date = Date;

global.expect = require("expect");

global.axios = require("axios");
global.Vue = require("vue");
global.bus = new Vue();
