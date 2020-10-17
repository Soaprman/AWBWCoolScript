module.exports = function (content, file) {
    let userscriptHeader = 
`// ==UserScript==
// @name         AWBW Cool Script
// @namespace    http://tampermonkey.net/
// @version      2.0.0
// @description  Adds a bunch of features to Advance Wars By Web. Wow!
// @author       Soaprman
// @match        https://awbw.amarriner.com/*
// @icon         https://thedailypos.org/misc/awtank.png
// @require		 https://code.jquery.com/jquery-3.5.1.min.js
// @grant        none
// ==/UserScript==

`;

    return userscriptHeader + content;
};