const configRepository = require('../dataAccess/configRepository');
const gameDataHelper = require('../helpers/gameDataHelper');

const userConfig = configRepository.getConfig();

/**
 * @description Embed youtube music link for active CO's theme
 */
exports.init = function () {
    // Deprecated - works poorly when the page refreshes after every action!
    if (userConfig.embedMusicVideo) {
        addActiveCoMusicVideoToPage();
    }
    
    if (userConfig.embedMusicLink) {
        addActiveCoMusicLinkToPage();
    }
};

function getYoutubeEmbedUrl(coName) {
    let coData = getCoData().find(data => data.name === coName);
    return coData.youtubeUrl.replace(/watch\?v=/i, 'embed/');
}

function getYoutubeIframeHtml(embedUrl) {
    return '<iframe width="540" height="100" src="' + embedUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

function addActiveCoMusicVideoToPage() {
    if (!gameDataHelper.currentlyOnGamePage()) return;
    let currentGameInfo = gameDataHelper.getCurrentGameInfo();
    
    if (!currentGameInfo.activeCoName) return;
    
    let embedUrl = getYoutubeEmbedUrl(currentGameInfo.activeCoName);
    let iframeHtml = getYoutubeIframeHtml(embedUrl);

    if (userConfig.rearrangeLayout) {
        $('<div class="youtube-embed__wrapper" style="position:fixed;">' + iframeHtml + '</div>').appendTo('#left-side-menu-fixed-wrapper');
        repositionYoutubeEmbed();
    } else {
        if (gameDataHelper.currentlyOnRefreshlessGamePage()) {
            $('<div class="youtube-embed__wrapper" style="">' + iframeHtml + '</div>').insertAfter('.game-player-info, .replay-player-info');
        } else {
            $('<div class="youtube-embed__wrapper" style="">' + iframeHtml + '</div>').insertAfter('#game-player-info, #replay-player-info');
        }
    }
}

function repositionYoutubeEmbed() {
    let newTop;

    if (gameDataHelper.currentlyOnRefreshlessGamePage()) {
        newTop = $('.game-player-info, .replay-player-info').height() + $('#left-side-profile-menu').height() + 170;
    } else {
        newTop = $('#game-player-info, #replay-player-info').height() + $('#left-side-profile-menu').height() + 170;
    }

    
    $('.youtube-embed__wrapper').css('top', newTop + 'px');
}

function getYoutubeLinkUrl(coName) {
    let coData = getCoData().find(data => data.name === coName);
    return coData.youtubeUrl;
}

function getYoutubeLinkHtml(linkUrl) {
    const linkText = '&#119136; PLAY CO MUSIC IN NEW TAB &#119136;';
    if (userConfig.rearrangeLayout) {
        return '<div class="youtube-link__wrapper youtube-link__wrapper--fixed"><a target="_blank" href="' + linkUrl + '">' + linkText + '</a></div>';
    } else {
        return '<div class="youtube-link__wrapper"><a target="_blank" href="' + linkUrl + '">' + linkText + '</a></div>';
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
        if (gameDataHelper.currentlyOnRefreshlessGamePage()) {
            $(linkHtml).insertAfter('.game-player-info, .replay-player-info');
        } else {
            $(linkHtml).insertAfter('#game-player-info, #replay-player-info');
        }
    }
}

function repositionYoutubeLink() {
    let newTop;
    
    if (gameDataHelper.currentlyOnRefreshlessGamePage()) {
        newTop = $('.game-player-info, .replay-player-info').height() + $('#left-side-profile-menu').height() + 170;
    } else {
        newTop = $('#game-player-info, #replay-player-info').height() + $('#left-side-profile-menu').height() + 170;
    }
    
    $('.youtube-link__wrapper').css('top', newTop + 'px');
}

function getCoData() {
    return userConfig.coData;
}

exports.repositionYoutubeEmbed = repositionYoutubeEmbed;
exports.repositionYoutubeLink = repositionYoutubeLink;