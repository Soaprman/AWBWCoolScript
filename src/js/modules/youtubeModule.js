const configRepository = require('../dataAccess/configRepository');
const gameDataHelper = require('../helpers/gameDataHelper');
const twentythirtyPage = require('../pages/twentythirtyPage');

const userConfig = configRepository.getConfig();

/**
 * @description Embed youtube music link for active CO's theme
 */
exports.init = function () {
    if (userConfig.embedMusic) {
        if (twentythirtyPage.youAreHere()) {
            let embedElement = getActiveCoMusicEmbed();
            twentythirtyPage.appendToPlayerInfoSection(embedElement);
        } else {
            addActiveCoMusicLinkToPage();
        }
    }
};

function getYoutubeEmbedUrl(coName) {
    let coData = getCoData().find(data => data.name === coName);
    return coData.youtubeUrl.replace(/watch\?v=/i, 'embed/');
}

function getYoutubeIframeHtml(embedUrl) {
    // 350 is minimum width to make the volume bar appear
    return '<iframe width="350" height="150" src="' + embedUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

function getActiveCoMusicEmbed() {
    let currentGameInfo = gameDataHelper.getCurrentGameInfo();
    
    if (!currentGameInfo.activeCoName) return;
    
    let embedUrl = getYoutubeEmbedUrl(currentGameInfo.activeCoName);
    let iframeHtml = getYoutubeIframeHtml(embedUrl);
    return $('<div class="youtube-embed-wrapper" style="">' + iframeHtml + '</div>');
}

function getYoutubeLinkUrl(coName) {
    let coData = getCoData().find(data => data.name === coName);
    return coData.youtubeUrl;
}

function getYoutubeLinkHtml(linkUrl) {
    const linkText = '&#119136; PLAY CO MUSIC IN NEW TAB &#119136;';
    if (userConfig.rearrangeLayout) {
        return '<div class="youtube-link-wrapper youtube-link-wrapper--fixed"><a target="_blank" href="' + linkUrl + '">' + linkText + '</a></div>';
    } else {
        return '<div class="youtube-link-wrapper"><a target="_blank" href="' + linkUrl + '">' + linkText + '</a></div>';
    }
}

function addActiveCoMusicLinkToPage() {
    if (!gameDataHelper.currentlyOnGamePage()) return;
    let currentGameInfo = gameDataHelper.getCurrentGameInfo();
    
    if (!currentGameInfo.activeCoName) return;

    let linkUrl = getYoutubeLinkUrl(currentGameInfo.activeCoName);
    let linkHtml = getYoutubeLinkHtml(linkUrl);

    if (userConfig.rearrangeLayout) {
        $(linkHtml).appendTo('#left-side-menu-fixed-wrapper');
        repositionYoutubeLink();
    } else {
        $(linkHtml).insertAfter('#game-player-info, #replay-player-info');
    }
}

function repositionYoutubeLink() {
    let newTop = $('#game-player-info, #replay-player-info').height() + $('#left-side-profile-menu').height() + 170;    
    $('.youtube-link-wrapper').css('top', newTop + 'px');
}

function getCoData() {
    return userConfig.coData;
}

exports.repositionYoutubeLink = repositionYoutubeLink;