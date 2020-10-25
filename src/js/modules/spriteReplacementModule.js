const configRepository = require('../dataAccess/configRepository');
const gameDataHelper = require('../helpers/gameDataHelper');

const userConfig = configRepository.getConfig();

const countries = [
    { countryCode: 'os', name: 'orangestar' },
    { countryCode: 'bm', name: 'bluemoon' },
    { countryCode: 'ge', name: 'greenearth' },
    { countryCode: 'yc', name: 'yellowcomet' },
    { countryCode: 'bh', name: 'blackhole' },
    { countryCode: 'rf', name: 'redfire' },
    { countryCode: 'gs', name: 'greysky' },
    { countryCode: 'bd', name: 'browndesert' },
    { countryCode: 'ab', name: 'amberblaze' },
    { countryCode: 'js', name: 'jadesun' },
    { countryCode: 'ci', name: 'cobaltice' },
    { countryCode: 'pc', name: 'pinkcosmos' },
    { countryCode: 'tg', name: 'tealgalaxy' },
    { countryCode: 'pl', name: 'purplelightning' },
    { countryCode: 'ar', name: 'acidrain' },
    { countryCode: 'wn', name: 'whitenova' },
];

exports.init = function () {
    if (!userConfig.recolorCountries) {
        return;
    }

    recolorUnitSprites();
    recolorPropertySprites();
};

function recolorUnitSprites() {
    // Example URLs:
    // https://awbw.amarriner.com/terrain/aw2/plinfantry.gif
    // https://awbw.amarriner.com/terrain/ani/bmartillery.gif
    // https://awbw.amarriner.com/terrain/ani/gs_geinfantry.gif (Unit has moved already)

    let swapMatrix = getSwapMatrix();
    let sprites = $('span[id^="unit_"] > img');

    $(sprites).each(function () {
        let $this = $(this);
        let src = $this.attr('src');
        let srcArray = src.split('/');
        let fileName = srcArray[srcArray.length - 1];
        let grayedOut = fileName.substr(0, 3) === 'gs_';
        let countryPrefix = grayedOut ? fileName.substr(0, 5) : fileName.substr(0, 2);
        let countryCode = grayedOut ? fileName.substr(3, 2) : fileName.substr(0, 2);

        let playerIndex = swapMatrix.find(x => x.fromCountryCode === countryCode).playerIndex;
        $this.attr('src', src.replace('/' + countryPrefix, '/' + (grayedOut ? 'gs_' : '') + 'playerIndex' + playerIndex));
    });

    $(sprites).each(function () {
        let $this = $(this);
        let src = $this.attr('src');
        let playerIndex = Number(src.match(/playerIndex(\d+)/i)[1]);
        let countryCode = swapMatrix.find(x => x.playerIndex === playerIndex).toCountryCode;

        $this.attr('src', src.replace('playerIndex' + playerIndex, countryCode));
    });
}

function recolorPropertySprites() {
    // Example URLs:
    // https://awbw.amarriner.com/terrain/ani/greyskybase.gif
    // https://awbw.amarriner.com/terrain/ani/greyskycity.gif
    // https://awbw.amarriner.com/terrain/ani/gs_greyskyhq.gif (i think gs is for fog of war)
    // https://awbw.amarriner.com/terrain/aw2/neutralcity.gif

    let swapMatrix = getSwapMatrix();
    let sprites = $('span.s > img');

    let countryNamesRegex = new RegExp(countries.map(x => x.name).join('|'), 'g');

    $(sprites).each(function () {
        let $this = $(this);
        let src = $this.attr('src');
        let srcArray = src.split('/');
        let fileName = srcArray[srcArray.length - 1];
        let match = fileName.match(countryNamesRegex);
        let countryName = match && match[0];

        if (!countryName) return; // Neutral properties

        let countryCode = countries.find(x => x.name === countryName).countryCode;
        let playerIndex = swapMatrix.find(x => x.fromCountryCode === countryCode).playerIndex;

        $this.attr('src', src.replace(countryName, 'playerIndex' + playerIndex));
    });

    $(sprites).each(function () {
        let $this = $(this);
        let src = $this.attr('src');
        let match = src.match(/playerIndex(\d+)/i);
        let playerIndex = match && Number(match[1]);

        if (playerIndex !== 0 && !playerIndex) return; // Neutral properties

        let countryCode = swapMatrix.find(x => x.playerIndex === playerIndex).toCountryCode;
        let countryName = countries.find(x => x.countryCode === countryCode).name;

        $this.attr('src', src.replace('playerIndex' + playerIndex, countryName));
    });
}

function getSwapMatrix() {
    let players = gameDataHelper.getCurrentGameInfo().players;
    let swapMatrix = [];

    for (let i = 0; i < players.length; i++) {
        let player = players[i];

        swapMatrix.push({
            playerIndex: i,
            fromCountryCode: player.countryCode,
            toCountryCode: countries[i].countryCode
        });
    }

    return swapMatrix;
}