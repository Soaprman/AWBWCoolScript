const package = require('../../package.json');

module.exports = function (content, file) {
    let userscriptHeader = 
`// ==UserScript==
// @name         ${package.userscriptHeader.name}
// @namespace    ${package.userscriptHeader.namespace}
// @version      ${package.version}
// @description  ${package.userscriptHeader.description}
// @author       ${package.author}
// @match        ${package.userscriptHeader.match}
// @icon         ${package.userscriptHeader.icon}
// @require		 ${package.userscriptHeader.requireJquery}
// @grant        ${package.userscriptHeader.grant}
// ==/UserScript==

`;

    return userscriptHeader + content;
};