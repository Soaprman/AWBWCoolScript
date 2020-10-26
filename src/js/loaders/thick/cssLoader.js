const configRepository = require('../../dataAccess/configRepository');

exports.addStylesToPage = function () {
    let userConfig = configRepository.getConfig();

    // Hook for transform: injectCss.js
    $(`<style> 
//!INJECT_CSS
    </style>`).appendTo('body');

    $(`<style> 
.co-icon {
    background-image: url("${userConfig.spritesheetUrl}");
}
</style>`).appendTo('body');
};