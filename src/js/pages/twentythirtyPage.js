const configRepository = require('../dataAccess/configRepository');

const userConfig = configRepository.getConfig();

function youAreHere() {
    return window.location.href.indexOf('2030.php') > -1;
}

function overrideApplyScale() {
    window.applyScale = applyScale;
}

// Edit of AWBW's function from game.js
function applyScale(n) {
    if (scale < 0.5 && n < 0) {
        return;
    } //do not allow to get too small
    else if (scale > userConfig.maxZoom && n > 0) {
        return;
    } //do not allow to get too big
    else {
        scale += n; //increase scale
    }

    zoomLevel.textContent = scale.toFixed(1) + "x";
    var containerRight = gameContainer.getBoundingClientRect().right;
    var mapWidth = maxX * 16 * scale; //Map is smaller than container, no scrollbars

    if (mapWidth <= containerRight) {
        applyCSS(gamemapContainer, {
            height: maxY * 16 * scale + "px",
            overflow: "visible",
            width: mapWidth + "px"
        });
    } //Map goes out of the container, add scrollbars
    else {
        applyCSS(gamemapContainer, {
            overflow: "scroll",
            width: "100%"
        });
    }

    gamemap.style.transform = "scale(" + scale + ")";
    localStorage.setItem("scale", scale);
    var mapRight = gamemapContainer.getBoundingClientRect().right;
    updatePlayersTablePosition(containerRight, mapRight);
}

function overrideUpdatePlayersTablePosition() {
    window.updatePlayersTablePosition = updatePlayersTablePosition;
}

// Edit of AWBW's function from game.js
function updatePlayersTablePosition(containerRight, mapRight) {
    containerRight = containerRight || gameContainer.getBoundingClientRect().right;
    mapRight = mapRight || gamemapContainer.getBoundingClientRect().right;

    //The 10px added is the margin of the table + scrollbar
    var playersTableW = playersTable.children[0].offsetWidth + 18;
    var playerBoxH = playersTable.children[0].getBoundingClientRect().height;

    if (!userConfig.rearrangeLayout && mapRight + playersTableW >= containerRight) {
        //Table is moved under the map
        gameContainer.appendChild(playersTable);
        var tableH = playerCount > 4 ? 4 * playerBoxH : playerCount * playerBoxH;
        var tableW = Math.ceil(playerCount / 4) * playersTableW;
        applyCSS(playersTable, {
            height: tableH + "px",
            flexWrap: "wrap",
            left: "0",
            position: "relative",
            overflowY: "visible",
            width: tableW + "px"
        });
    } else {
        //Table is moved beside the map
        gamemapContainer.appendChild(playersTable);
        var mapH = maxY * 16 * scale;
        var playersTableH = playerBoxH * playerCount;
        applyCSS(playersTable, {
            height: (playersTableH >= mapH ? mapH : playersTableH) + "px",
            flexWrap: "nowrap",
            left: "100%",
            position: "absolute",
            overflowY: playersTableH >= mapH ? "scroll" : "visible",
            width: "auto"
        });
    }

    if (viewerPId) {
        updateViewerBoxPosition();
    }
}

function arrangePlayerOverviewAsRows() {
    $('.game-player-info').css({
        'flex-direction': 'row'
    });
}

function disableCoBarAnimation() {
    let $deadPlayers = $('.player-overview-container');
    $deadPlayers.find('.power-star').removeClass('anim-power-bar');
}

function disableCoBarAnimationForDeadPlayers() {
    let $deadPlayers = $('.player-overview-container:has(.player-overview-eliminated-bg)');
    $deadPlayers.find('.power-star').removeClass('anim-power-bar');
}

function widenOuterWrapper() {
    $('#outer').css({
        'width': 'calc(100% - 310px)'
    });
}

function appendToPlayerInfoSection(el) {
    $('.game-player-info').append(el);
}

function recolorCoBars() {
    let playerContainers = $('.player-overview-container');

    for (let i = 0; i < playerContainers.length; i++) {
        let $playerContainer = $(playerContainers[i]);
        let playerId = $playerContainer.attr('id').substring(6); // Example: player867245
        let coPowerStatus = getCoPowerStatus(playerId);

        if (coPowerStatus.scopActive) {
            $playerContainer.find('.power-star-percent').addClass('blue');
        } else if (coPowerStatus.copActive) {
            $playerContainer.find('.power-star-percent').addClass('red');
        }
    }
}

function getCoPowerStatus(playerId) {
    let playerInfo = playersInfo[playerId]; // Global object on 2030.php

    return {
        copActive: playerInfo.players_co_power >= playerInfo.players_co_max_power,
        scopActive: playerInfo.players_co_power >= playerInfo.players_co_max_spower
    }
}

exports.youAreHere = youAreHere;
exports.overrideApplyScale = overrideApplyScale;
exports.applyScale = applyScale;
exports.overrideUpdatePlayersTablePosition = overrideUpdatePlayersTablePosition;
exports.updatePlayersTablePosition = updatePlayersTablePosition;
exports.arrangePlayerOverviewAsRows = arrangePlayerOverviewAsRows;
exports.disableCoBarAnimation = disableCoBarAnimation;
exports.disableCoBarAnimationForDeadPlayers = disableCoBarAnimationForDeadPlayers;
exports.widenOuterWrapper = widenOuterWrapper;
exports.appendToPlayerInfoSection = appendToPlayerInfoSection;
exports.recolorCoBars = recolorCoBars;