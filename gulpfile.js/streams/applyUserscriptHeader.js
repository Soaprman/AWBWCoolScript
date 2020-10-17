const { Transform } = require('stream');

module.exports = function () {
    return new Transform({
        transform(chunk, encoding, callback) {
            let scriptText = chunk.toString();
            let userscriptHeader = '';

            // Hack - for some reason this gets run for each section of the browserify-bundled JS
            // This ensures it only runs once, at the very top
            // Will need to fix this once I understand gulp better
            // Also need to not hardcode it here and instead read it from elsewhere, to separate metadata and code
            if (scriptText.indexOf('(function(){function r(e,n,t)') === 0) {
                userscriptHeader = 
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
            }
               
            callback(null, Buffer.from(userscriptHeader + scriptText));
        }
    });
};