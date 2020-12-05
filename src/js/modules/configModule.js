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

    bindAutosaveEvents();
}

function bindAutosaveEvents() {
    $('input[name="embedMusic"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.embedMusic = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="rearrangeLayout"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.rearrangeLayout = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="crispyZoom"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.crispyZoom = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="recolorCountries"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.recolorCountries = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="useAlternatePortraits"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.useAlternatePortraits = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="arrangePlayerOverviewAsRows"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.arrangePlayerOverviewAsRows = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="disableCoBarAnimation"]').on('click', function () {
        userConfig = configRepository.getConfig();
        userConfig.disableCoBarAnimation = $(this).prop('checked');
        configRepository.saveConfig(userConfig);
    });
    $('input[name="spritesheetUrl"]').on('change', function () {
        userConfig = configRepository.getConfig();
        userConfig.spritesheetUrl = $(this).val();
        configRepository.saveConfig(userConfig);
    });
}

function loadConfig() {
    userConfig = configRepository.getConfig();

    $('input[name="embedMusic"]').prop('checked', userConfig.embedMusic);
    $('input[name="rearrangeLayout"]').prop('checked', userConfig.rearrangeLayout);
    $('input[name="crispyZoom"]').prop('checked', userConfig.crispyZoom);
    $('input[name="recolorCountries"]').prop('checked', userConfig.recolorCountries);
    $('input[name="useAlternatePortraits"]').prop('checked', userConfig.useAlternatePortraits);
    $('input[name="arrangePlayerOverviewAsRows"]').prop('checked', userConfig.arrangePlayerOverviewAsRows);
    $('input[name="disableCoBarAnimation"]').prop('checked', userConfig.disableCoBarAnimation);

    $('input[name="spritesheetUrl"]').val(userConfig.spritesheetUrl);

    populateCoConfig();
}

function saveConfig() {
    userConfig = configRepository.getConfig();

    userConfig.embedMusic = $('input[name="embedMusic"]').prop('checked');
    userConfig.rearrangeLayout = $('input[name="rearrangeLayout"]').prop('checked');
    userConfig.crispyZoom = $('input[name="crispyZoom"]').prop('checked');
    userConfig.recolorCountries = $('input[name="recolorCountries"]').prop('checked');
    userConfig.useAlternatePortraits = $('input[name="useAlternatePortraits"]').prop('checked');
    userConfig.arrangePlayerOverviewAsRows = $('input[name="arrangePlayerOverviewAsRows"]').prop('checked');
    userConfig.disableCoBarAnimation = $('input[name="disableCoBarAnimation"]').prop('checked');

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

        row.find('.cs-config-co__youtube-url input')
            .val(coData.youtubeUrl)
            .data('portraitIndex', i)
            .on('change', function () {
                userConfig = configRepository.getConfig();
                userConfig.coData.find(x => x.portraitIndex == Number($(this).data('portraitIndex'))).youtubeUrl = $(this).val();
                configRepository.saveConfig(userConfig);
            });

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
    let yesImSure = confirm('Restoring default settings. Are you sure?');
    if (yesImSure) {
        let defaultConfig = configRepository.getDefaultConfig();
        configRepository.saveConfig(defaultConfig);
    }
}