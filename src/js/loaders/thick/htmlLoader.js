const configRepository = require('../../dataAccess/configRepository');

exports.addHtmlToPage = function () {
    let userConfig = configRepository.getConfig();

    // Hook for transform: injectHtml.js
    $(`//!INJECT_HTML`).appendTo('body');
};