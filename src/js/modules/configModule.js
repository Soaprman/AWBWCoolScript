const configRepository = require('../dataAccess/configRepository');
const gameDataHelper = require('../helpers/gameDataHelper');

let userConfig;

/**
 * @description Add a configuration UI and a button to access it
 */
exports.init = function () {
    bindEvents();
    extractAndShowConfigButton();
    extractConfigPanel();
};

function bindEvents() {
    $('.cs-configbutton-button').on('click', function () {
        loadConfig();
        showConfigPanel();
    });
    $('.cs-config-closebutton').on('click', hideConfigPanel);
    $('.cs-config-saveandclosebutton').on('click', function () {
        saveConfig();
        hideConfigPanel();
    });


}

function loadConfig() {
    userConfig = configRepository.getConfig();

    $('input[name="embedMusicLink"]').prop('checked', userConfig.embedMusicLink);
    $('input[name="rearrangeLayout"]').prop('checked', userConfig.rearrangeLayout);
    $('input[name="crispyZoom"]').prop('checked', userConfig.crispyZoom);
    $('input[name="recolorCountries"]').prop('checked', userConfig.recolorCountries);
    $('input[name="useAlternatePortraits"]').prop('checked', userConfig.useAlternatePortraits);
}

function saveConfig() {
    userConfig = configRepository.getConfig();

    userConfig.embedMusicLink = $('input[name="embedMusicLink"]').prop('checked');
    userConfig.rearrangeLayout = $('input[name="rearrangeLayout"]').prop('checked');
    userConfig.crispyZoom = $('input[name="crispyZoom"]').prop('checked');
    userConfig.recolorCountries = $('input[name="recolorCountries"]').prop('checked');
    userConfig.useAlternatePortraits = $('input[name="useAlternatePortraits"]').prop('checked');

    configRepository.saveConfig(userConfig);
}

function extractAndShowConfigButton() {
    $('.cs-configbutton-wrapper').appendTo('#game-menu-controls').show();
}

function extractConfigPanel() {
    $('.cs-config-wrapper').appendTo('body');
}

function showConfigPanel() {
    // TODO: Reposition?
    $('.cs-config-wrapper').addClass('visible');
}

function hideConfigPanel() {
    $('.cs-config-wrapper').removeClass('visible');
}