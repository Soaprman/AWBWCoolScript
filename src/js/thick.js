const configRepository = require('./dataAccess/configRepository');
const cssLoader = require('./loaders/thick/cssLoader');
const gameDataHelper = require('./helpers/gameDataHelper');

const youtubeModule = require('./modules/youtubeModule');

(function() {
	'use strict';
	
	let userConfig = configRepository.getConfig();

	cssLoader.addStylesToPage();

	function getCoData() {
		return userConfig.coData;
	}

	// Embed youtube music link for active CO's theme
	youtubeModule.init();

	// ================================================================================
	// Zoom the map using nearest neighbor instead of... bilinear? Whatever it was before.
	// ================================================================================

	if (userConfig.crispyZoom) {
		$('#gamemap').css('image-rendering', 'pixelated');
	}

	// ================================================================================
	// Rearrange the page layout
	// ================================================================================

	function rearrangeLayout() {
        if (!gameDataHelper.currentlyOnGamePage()) return;

		$('#outer').css({
			'margin': '0 auto',
			'width': '100%',
			'min-width': '',
			'max-width': '',
			'display': 'flex',
			'background': 'transparent'
		});
		$('#game-player-info, #replay-player-info').appendTo('#left-side-menu-fixed-wrapper');
		$('#left-side-menu-fixed-wrapper').css({
			'left': '0',
			'margin': '0 20px',
			'position': 'static',
			'width': '550px'
		});
		$('#left-side-profile-menu').css({
			'flex-direction': 'row',
			'flex-wrap': 'wrap'
		});

        $('#left-side-profile-menu li').css({
            'width': '33%',
        });

		$('#main').css({
			'width': 'calc(100% - 580px)',
			'background': '#fafadd'
		});
		$('#left-side-menu-container').css({
			'width': '530px'
		});
		$('#game-player-info, #replay-player-info').css({
			'top': $('#left-side-menu-container').height() + 100 + 'px',
			'position': 'fixed',
			'width': '550px'
		});

        if (userConfig.rearrange1080pFriendly) {
            $('#game-player-info, #replay-player-info').css({
                'max-height': '550px',
                'overflow': 'auto'
            });
        }

        // Removes the arrow column if a team column is present to save some horizontal space. Active player is still highlighted blue.
		let cellsPerRow = $('#showplayers').find('td td tr:first-child td').length;
		if (cellsPerRow > 7) {
			$('#showplayers').find('td td td:first-child').remove();
		}

		$('#game-footer').css('display', 'none');

		if (userConfig.embedMusicVideo) {
			youtubeModule.repositionYoutubeEmbed();
		}
		if (userConfig.embedMusicLink) {
			youtubeModule.repositionYoutubeLink();
		}
	}

	if (userConfig.rearrangeLayout) {
		rearrangeLayout();
	}

	// ================================================================================
	// Use alternate protraits
	// ================================================================================

    function applyAlternatePortraits() {
		const coData = getCoData();

        $('img').each(function () {
			for (let i = 0; i < coData.length; i++) {
				let thisCo = coData[i];
				let src = this.src;

				if (src.indexOf('ds' + thisCo.name + '.png') > -1) {
					let parent = this.parentElement;
					let classes = '';
					if (src.indexOf('smallds') > -1) classes += ' co-icon--small';
					if (src.indexOf('gs_ds') > -1) classes += ' co-icon--dead';
                    let icon = $('<i class="co-icon' + classes + '"></i>').css({
                        'background-position': '-' + (thisCo.portraitIndex * 48) + 'px -' + (thisCo.costumeIndex * 48) + 'px',
                    });
                    $(this).replaceWith(icon);
				}
			}
		});
    }

    function resizePortraitWrappers() {
        $('.do-game-co-image').css({
            'width': '48px',
            'height': '48px',
			'margin-right': '10px'
        });
        $('.do-game-tag-co-image').css({
            'width': 'auto'
        });
        $(document.querySelectorAll('#do-game-row-container')).css({
            'padding-bottom': '5px'
        });
        $(document.querySelectorAll('#do-game-player-row')).css({
            'margin-bottom': '5px'
        });
        $('.do-game-country-logo').css({
            'margin-top': '14px'
        });
        $('.do-game-username').css({
            'top': '18px'
        });
        $('#game-menu-controls').css({
            'height': '32px'
        });
        $('#do-game-row-container .game-tools-btn').css({
            'margin-top': '10px'
        });

        if (gameDataHelper.currentlyOnGamesCompletedPage()) {
            $('.co-icon--dead').css({
                'margin-left': '16px'
            });
            $('.do-game-co-image img').css({
                'margin-bottom': '48px'
            });
        }
    }

    function bindPortraitResizeEventHandlers() {
        $('.calculator-toggle').on('click', applyAlternatePortraits);
    }

    if (userConfig.useAlternatePortraits) {
        applyAlternatePortraits();
        resizePortraitWrappers();
    }

	// ================================================================================
	// Change the maximum zoom
	// ================================================================================

	if (userConfig.rearrangeLayout && gameDataHelper.currentlyOnGamePage()) {
		// Overwrite this function to use the new max zoom value.
		// Some variables, like this function itself, are global (i.e. attached to window).
		window.scaleAdd = function(n) {
			document.getElementById('outer').style.maxWidth = '1500px';

			if (scale < 0.5 && n < 0) { return; } //do not allow to get too small
			if (scale > userConfig.maxZoom && n > 0) { return; } //do not allow to get too big

			scale += n; //increase scale
			window.overdivScale = Math.min(scale, userConfig.maxZoom / 2); // ~Soap

			if (typeof zoomLevel !== 'undefined') { // For replay.php
				zoomLevel.textContent = scale.toFixed(1) + "x";
			}

			new_width = parseInt(map.width) * scale;

			scaled_height = 1500 * (map.height / map.width);

			applyCSS(gamemapContainer, {
				height: (document.documentElement.clientHeight - document.getElementById('fixed-header-wrapper').clientHeight - 170) + "px",
				width: (new_width + 40) + 'px', // +40 accounts for scrollbar
                maxWidth: 'calc(100% - 10px)'
			});

			gamemapContainer.style.overflowY = 'scroll';
			gamemapContainer.style.overflowX = 'scroll';

			gamemap.style.transform = "scale(" + scale + ")";
			gamemap.style.webkitTransform = "scale(" + scale + ")";
			gamemap.style.mozTransform = "scale(" + scale + ")";

			if (typeof overdiv !== 'undefined') { // For replay.php
				overdiv.style.transform = "scale(" + overdivScale + ")";
				overdiv.style.webkitTransform = "scale(" + overdivScale + ")";
				overdiv.style.mozTransform = "scale(" + overdivScale + ")";
			}

			localStorage.setItem("scale", scale);

			if (userConfig.rearrangeLayout) {
				// Force a rearrange to fix anything this zoom thingy breaks
				rearrangeLayout();
			}
		};
	}

	if (userConfig.rearrangeLayout && gameDataHelper.currentlyOnGamePage()) {
		// Force the layout changes
		scaleAdd(0);
	}

})();
