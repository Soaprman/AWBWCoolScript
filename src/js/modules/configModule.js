const configRepository = require('../dataAccess/configRepository');
const gameDataHelper = require('../helpers/gameDataHelper');

// const userConfig = configRepository.getConfig();

/**
 * @description Add a configuration UI and a button to access it
 */
exports.init = function () {
    bindEvents();
    extractAndShowConfigButton();
    extractConfigPanel();
};

function bindEvents() {
    $('.cs-configbutton-button').on('click', showConfigPanel);
}

function extractAndShowConfigButton() {
    $('.cs-configbutton-wrapper').appendTo('#game-menu-controls').show();
}

function extractConfigPanel() {
    $('.cs-config-wrapper').appendTo('body');
}

function showConfigPanel() {
    // TODO: Reposition
    $('.cs-config-wrapper').show();
}

function hideConfigPanel() {
    $('.cs-config-wrapper').hide();
}