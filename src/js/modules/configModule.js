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
    $('.cs-config-restoredefaultsbutton').on('click', function () {
        restoreDefaultConfig();
        loadConfig();
    });
}

function loadConfig() {
    userConfig = configRepository.getConfig();

    $('input[name="embedMusicLink"]').prop('checked', userConfig.embedMusicLink);
    $('input[name="rearrangeLayout"]').prop('checked', userConfig.rearrangeLayout);
    $('input[name="crispyZoom"]').prop('checked', userConfig.crispyZoom);
    $('input[name="recolorCountries"]').prop('checked', userConfig.recolorCountries);
    $('input[name="useAlternatePortraits"]').prop('checked', userConfig.useAlternatePortraits);

    $('input[name="spritesheetUrl"]').val(userConfig.spritesheetUrl);

    populateCoConfig();
}

function saveConfig() {
    userConfig = configRepository.getConfig();

    userConfig.embedMusicLink = $('input[name="embedMusicLink"]').prop('checked');
    userConfig.rearrangeLayout = $('input[name="rearrangeLayout"]').prop('checked');
    userConfig.crispyZoom = $('input[name="crispyZoom"]').prop('checked');
    userConfig.recolorCountries = $('input[name="recolorCountries"]').prop('checked');
    userConfig.useAlternatePortraits = $('input[name="useAlternatePortraits"]').prop('checked');

    userConfig.spritesheetUrl = $('input[name="spritesheetUrl"]').val();

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

function populateCoConfig() {
    userConfig = configRepository.getConfig();

    $('.cs-config-row__co-config').empty();

    for (let i = 0; i < userConfig.coData.length; i++) {
        let coData = userConfig.coData[i];

        let row = $(document.querySelector('#cs-config-co').content.cloneNode(true));
        
        row.find('.cs-config-co__name').text(coData.name);
        row.find('.cs-config-co__youtube-url input').val(coData.youtubeUrl);

        for (let j = 0; j < 8; j++) {
            row.find('.co-icon')
                .eq(j)
                .addClass(j === coData.costumeIndex ? 'selected' : null)
                .on('click', selectCoPortrait)
                .data('portraitIndex', i)
                .data('costumeIndex', j)
                .css({
                    'background-position': '-' + (coData.portraitIndex * 48) + 'px -' + (j * 48) + 'px',
                });
        }

        $('.cs-config-row__co-config').append(row);
    }
}

function selectCoPortrait(e) {
    userConfig = configRepository.getConfig();

    let portraitIndex = $(this).data('portraitIndex');
    let costumeIndex = $(this).data('costumeIndex');

    let coData = userConfig.coData.find(x => x.portraitIndex === portraitIndex);
    coData.costumeIndex = costumeIndex;

    $(this).closest('.cs-config-co__portraits').find('.co-icon').removeClass('selected');
    $(this).addClass('selected');

    configRepository.saveConfig(userConfig);
}

function restoreDefaultConfig() {
    let defaultConfig = configRepository.getDefaultConfig();
    configRepository.saveConfig(defaultConfig);
}