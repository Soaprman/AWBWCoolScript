const configRepository = require('../dataAccess/configRepository');

exports.restoreDefaultConfig = function () {
    let defaultConfig = configRepository.getDefaultConfig();
    configRepository.saveConfig(defaultConfig);
};