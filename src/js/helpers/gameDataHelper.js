function getCurrentGameInfo() {
    return {
        activeCoName: getActiveCo(),
        players: getPlayers()
    };
}

function getActiveCo() {
    // Example: https://awbw.amarriner.com/terrain/aw2/dskindle.png
    let activeCoImage = $('#showplayers').find('td.borderblue a[href^="co.php"] img');
    
    if (!activeCoImage || activeCoImage.length < 1) {
        return null;
    }
    
    let filePath = activeCoImage.attr('src').split('/');
    let fileName = filePath[filePath.length - 1];
    let coName = (fileName.split('.')[0]).substr(2);

    return coName;
}

function currentlyOnGamePage() {
    return window.location.href.indexOf('game.php') > -1 
        || window.location.href.indexOf('replay.php') > -1 
        || window.location.href.indexOf('moveplanner.php') > -1;
}

function currentlyOnGamesCompletedPage() {
    return window.location.href.indexOf('gamescompleted.php') > -1;
}

function getPlayers() {
    let players = [];

    // TODO: Add support on replay.php maybe
    if (playersInfo) {
        // Global variable on game.php and moveplanner.php
        for (let prop in playersInfo) {
            players.push({
                userName: playersInfo[prop].users_username,
                countryCode: playersInfo[prop].countries_code,
            })
        }
    }

    return players;
}

exports.getCurrentGameInfo = getCurrentGameInfo;
exports.getActiveCo = getActiveCo;
exports.currentlyOnGamePage = currentlyOnGamePage;
exports.currentlyOnGamesCompletedPage = currentlyOnGamesCompletedPage;