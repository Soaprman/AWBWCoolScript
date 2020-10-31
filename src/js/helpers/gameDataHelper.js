function getCurrentGameInfo() {
    return {
        activeCoName: getActiveCo(),
        players: getPlayers()
    };
}

function getActiveCo() {
    // Example: https://awbw.amarriner.com/terrain/aw2/nell.png
    // Example: https://awbw.amarriner.com/terrain/aw2/aw2nell.png
    // Example: https://awbw.amarriner.com/terrain/aw2/dskindle.png
    let activeCoImage = $('#showplayers').find('td.borderblue a[href^="co.php"] img');
    
    if (!activeCoImage || activeCoImage.length < 1) {
        return null;
    }
    
    let filePath = activeCoImage.attr('src').split('/');
    let fileName = filePath[filePath.length - 1];
    let fileNameWithoutExt = (fileName.split('.')[0]);
    let coName = null;
    
    if (fileNameWithoutExt.substr(0, 3) === 'aw2') {
        coName = fileNameWithoutExt.substr(3);
    } else if (fileNameWithoutExt.substr(0, 2) === 'ds') {
        coName = fileNameWithoutExt.substr(2);
    } else {
        coName = fileNameWithoutExt;
    }

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
    let playerProfileLinks = $('#showplayers a[href^="profile.php"]');

    for (let i = 0; i < playerProfileLinks.length; i++) {
        let $link = $(playerProfileLinks[i]);
        let countryImg = $link.parent().find('img[src*="logo.gif"]');
        let src = $(countryImg).attr('src');
        let srcArray = src.split('/');
        let fileName = srcArray[srcArray.length - 1];
        let grayedOut = fileName.substr(0, 3) === 'gs_';
        let countryCode = grayedOut ? fileName.substr(3, 2) : fileName.substr(0, 2);

        players.push({
            userName: $link.text(),
            countryCode: countryCode,
        });
    }

    return players;
}

exports.getCurrentGameInfo = getCurrentGameInfo;
exports.getActiveCo = getActiveCo;
exports.currentlyOnGamePage = currentlyOnGamePage;
exports.currentlyOnGamesCompletedPage = currentlyOnGamesCompletedPage;