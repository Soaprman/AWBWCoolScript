const configRepository = require('../dataAccess/configRepository');
const gameDataHelper = require('../helpers/gameDataHelper');
const twentythirtyPage = require('../pages/twentythirtyPage');

/**
 * @description Make changes to the page's layout
 */
exports.init = function () {
    const userConfig = configRepository.getConfig();

    if (twentythirtyPage.youAreHere() && userConfig.rearrangeLayout) {
        twentythirtyPage.widenOuterWrapper();
        twentythirtyPage.overrideUpdatePlayersTablePosition();
        twentythirtyPage.overrideApplyScale();

        // To trigger all the updated functions that affect page layout
		// The delay is a hack to account for built-in loading delays, like when loading fog maps
		window.setTimeout(function () {
            twentythirtyPage.applyScale(0);
            twentythirtyPage.updatePlayersTablePosition();
		}, 500);
    }

    if (twentythirtyPage.youAreHere() && userConfig.arrangePlayerOverviewAsRows && !userConfig.rearrangeLayout) {
        // Don't do if userConfig.rearrangeLayout because it actually looks good as a single column
        twentythirtyPage.arrangePlayerOverviewAsRows();
    }

    if (twentythirtyPage.youAreHere()) {
        twentythirtyPage.recolorCoBars();
        
        if (userConfig.disableCoBarAnimation) {
            twentythirtyPage.disableCoBarAnimation();
        } else {
            twentythirtyPage.disableCoBarAnimationForDeadPlayers();
        }
    }

    if (userConfig.crispyZoom) {
        applyCrispyZoom();
    }
};

function applyCrispyZoom() {
    $('#gamemap').css('image-rendering', 'pixelated');
}