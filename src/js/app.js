// ==UserScript==
// @name         AWBW Cool Script
// @namespace    http://tampermonkey.net/
// @version      1.1.4
// @description  Adds a new layout for 4K support, crispy zooming, embedding CO music, and maybe more
// @author       Soaprman
// @match        https://awbw.amarriner.com/*
// @icon         https://thedailypos.org/misc/awtank.png
// @require		 https://code.jquery.com/jquery-3.5.1.min.js
// @grant        none
// ==/UserScript==

const config = require('./config');

(function() {
    'use strict';

	// ================================================================================
	// Configuration
	// --------------------------------------------------------------------------------
	// Edit these values to toggle what features you want.
	// ================================================================================

    // Embed a link to open the active CO's theme in a new tab.
    const EMBED_MUSIC_LINK = true;

	// Embed a youtube containing the CO's theme. Does not autoplay.
    // Is icky with page reloads while taking your turn, so maybe don't use it. I might remove it in the future.
	const EMBED_MUSIC_VIDEO = false;

	// Move player info to the left side of the screen, and expand the overall layout to fit the window better.
	const REARRANGE_LAYOUT = true;

    // For those without gigantic monitors, make some concessions if rearranging the layout.
    const REARRANGE_1080P_FRIENDLY = true;

	// Use nearest neighbor for crispy pixels when zooming. Prevents blurriness.
	const CRISPY_ZOOM = true;

    // Use some alternate character portraits.
    // Has issues on some pages - may be fixed in the future. We'll see!
    const USE_ALTERNATE_PORTRAITS = true;

	// The spritesheet to use for alternate character portraits.
	const SPRITESHEET_URL = 'https://thedailypos.org/misc/awportraits.png';

	// The max zoom factor - AWBW's default is 2.9 for some reason.
	const MAX_ZOOM = 3.0;

	// Change costumeIndex if you want to.
	// 0 = Default
	// 1 = Japanese default (Olaf, Grit, Sonja only)
	// 2 = Alternate (everyone but Sturm)
	// 3 = Japanese alternate (Olaf, Sonja only)
	// Spritesheet is at https://thedailypos.org/misc/awportraits.png if you want to see them
	function getCoData() {
		return [
			{name: 'andy', youtubeUrl: 'https://www.youtube.com/watch?v=JdRuVBhZuGY#t=0', portraitIndex: 4, costumeIndex: 2},
			{name: 'hachi', youtubeUrl: 'https://www.youtube.com/watch?v=Q7jTW7Ks9Yw#t=0', portraitIndex: 3, costumeIndex: 2},
			{name: 'jake', youtubeUrl: 'https://www.youtube.com/watch?v=T8lEWH5WBfY#t=0', portraitIndex: 0, costumeIndex: 2},
			{name: 'max', youtubeUrl: 'https://www.youtube.com/watch?v=qgEr0qD6KGk#t=0', portraitIndex: 5, costumeIndex: 2},
			{name: 'nell', youtubeUrl: 'https://www.youtube.com/watch?v=IjS68u0e88I#t=0', portraitIndex: 2, costumeIndex: 2},
			{name: 'rachel', youtubeUrl: 'https://www.youtube.com/watch?v=y80cfL409Xg#t=0', portraitIndex: 1, costumeIndex: 2},
			{name: 'sami', youtubeUrl: 'https://www.youtube.com/watch?v=xfD4V4C3mY0&t=4', portraitIndex: 6, costumeIndex: 2},
			{name: 'colin', youtubeUrl: 'https://www.youtube.com/watch?v=Eof8PesukfI#t=0', portraitIndex: 9, costumeIndex: 2},
			{name: 'grit', youtubeUrl: 'https://www.youtube.com/watch?v=Y70XddToyqY#t=0', portraitIndex: 8, costumeIndex: 2},
			{name: 'olaf', youtubeUrl: 'https://www.youtube.com/watch?v=st4z_4xXLHs#t=0', portraitIndex: 7, costumeIndex: 2},
			{name: 'sasha', youtubeUrl: 'https://www.youtube.com/watch?v=eJzp-w8Zuak#t=0', portraitIndex: 10, costumeIndex: 2},
			{name: 'drake', youtubeUrl: 'https://www.youtube.com/watch?v=-Jgt_iIyNAc#t=0', portraitIndex: 12, costumeIndex: 2},
			{name: 'eagle', youtubeUrl: 'https://www.youtube.com/watch?v=H01dbjPY7l0&t=5', portraitIndex: 11, costumeIndex: 2},
			{name: 'javier', youtubeUrl: 'https://www.youtube.com/watch?v=4NQRJYAUXKg#t=0', portraitIndex: 14, costumeIndex: 2},
			{name: 'jess', youtubeUrl: 'https://www.youtube.com/watch?v=uhEDNXhIbMY#t=0', portraitIndex: 13, costumeIndex: 2},
			{name: 'grimm', youtubeUrl: 'https://www.youtube.com/watch?v=timyAe6limY#t=0', portraitIndex: 18, costumeIndex: 2},
			{name: 'kanbei', youtubeUrl: 'https://www.youtube.com/watch?v=0Uo_AMfgQCQ&t=2', portraitIndex: 15, costumeIndex: 2},
			{name: 'sensei', youtubeUrl: 'https://www.youtube.com/watch?v=ubDTOR5sbYc&t=4', portraitIndex: 17, costumeIndex: 2},
			{name: 'sonja', youtubeUrl: 'https://www.youtube.com/watch?v=-vsVkNrHcJM&t=7', portraitIndex: 16, costumeIndex: 2},
			{name: 'adder', youtubeUrl: 'https://www.youtube.com/watch?v=QT2l0m7YOEs#t=0', portraitIndex: 21, costumeIndex: 2},
			{name: 'flak', youtubeUrl: 'https://www.youtube.com/watch?v=7u-2cjJpmKA#t=0', portraitIndex: 19, costumeIndex: 2},
			{name: 'hawke', youtubeUrl: 'https://www.youtube.com/watch?v=4SSDJUr7Drw#t=0', portraitIndex: 22, costumeIndex: 2},
			{name: 'jugger', youtubeUrl: 'https://www.youtube.com/watch?v=Y8mErMJNhlU#t=0', portraitIndex: 23, costumeIndex: 2},
			{name: 'kindle', youtubeUrl: 'https://www.youtube.com/watch?v=tW3L4E__QS8#t=0', portraitIndex: 25, costumeIndex: 2},
			{name: 'koal', youtubeUrl: 'https://www.youtube.com/watch?v=PKXuagNH3Yo#t=0', portraitIndex: 24, costumeIndex: 2},
			{name: 'lash', youtubeUrl: 'https://www.youtube.com/watch?v=DW6P9UwWJ8k#t=0', portraitIndex: 20, costumeIndex: 2},
			{name: 'sturm', youtubeUrl: 'https://www.youtube.com/watch?v=JsEnlbZunzE#t=0', portraitIndex: 27, costumeIndex: 0},
			{name: 'vonbolt', youtubeUrl: 'https://www.youtube.com/watch?v=VUU3JAwsxes#t=0', portraitIndex: 26, costumeIndex: 2},
		];
	}
	
	/* ================================================================================
	Changelog
	-----------------------------------------------------------------------------------
	1.1.4 - October 16, 2020
		* Fix layout change not working on game replay pages
		* KNOWN ISSUE 1: Does not and has never worked with move planner - didn't know that's a thing!
		* KNOWN ISSUE 2: Player data has horizontal scrollbar when viewing replay moves. Need to adjust columns or something
	1.1.3 - October 16, 2020
		* Fix error when running script on game replay pages
	1.1.2 - October 7, 2020
		* Updated many CO songs to the AWDS versions
	1.1.1 - September 23, 2020
		* Updated Flak's theme to a better version
	1.1.0 - September 20, 2020
		* Added a changelog to this file :)
		* Changed youtube music from an embed to a link because the embed has issues with page reloads
		* Made spritesheet URL configurable
		* Fixed lots of issues with portrait displays
	================================================================================ */

	// ================================================================================
	// Embed youtube music or link for active CO's theme
	// ================================================================================

    function addYoutubeStylesToPage() {
        $(`<style>
			.youtube-link__wrapper {
				width: 530px;
				height: 40px;
				text-align: center;
				font-size: 24px;
				background-color: white;
				color: #404040;
				box-shadow: 0 5px 10px 5px rgba(0, 0, 0, 0.4);
			}

			.youtube-link__wrapper a {
				color: #0066CC;
			}

			.youtube-link__wrapper--fixed {
				position: fixed;
			}
		</style>`).appendTo('body');
    }

	// Youtube Embed

	function getYoutubeEmbedUrl(coName) {
		let coData = getCoData().find(data => data.name === coName);
		return coData.youtubeUrl.replace(/watch\?v=/i, 'embed/');
	}

	function getYoutubeIframeHtml(embedUrl) {
		return '<iframe width="540" height="100" src="' + embedUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
	}

	function addActiveCoMusicVideoToPage() {
        if (!currentlyOnGamePage()) return;
		let currentGameInfo = getCurrentGameInfo();
		
		if (!currentGameInfo.activeCoName) return;
		
		let embedUrl = getYoutubeEmbedUrl(currentGameInfo.activeCoName);
		let iframeHtml = getYoutubeIframeHtml(embedUrl);

		if (REARRANGE_LAYOUT) {
			$('<div class="youtube-embed__wrapper" style="position:fixed;">' + iframeHtml + '</div>').appendTo('#left-side-menu-fixed-wrapper');
			repositionYoutubeEmbed();
		} else {
			$('<div class="youtube-embed__wrapper" style="">' + iframeHtml + '</div>').insertAfter('#game-player-info, #replay-player-info');
		}
	}

	function repositionYoutubeEmbed() {
		let newTop = $('#game-player-info, #replay-player-info').height() + $('#left-side-profile-menu').height() + 170;
		$('.youtube-embed__wrapper').css('top', newTop + 'px');
	}

	// Youtube Link

    function getYoutubeLinkUrl(coName) {
		let coData = getCoData().find(data => data.name === coName);
		return coData.youtubeUrl;
    }

    function getYoutubeLinkHtml(linkUrl) {
		const linkText = '&#119136; PLAY CO MUSIC IN NEW TAB &#119136;';
		if (REARRANGE_LAYOUT) {
			return '<div class="youtube-link__wrapper youtube-link__wrapper--fixed"><a target="_blank" href="' + linkUrl + '">' + linkText + '</a></div>';
		} else {
			return '<div class="youtube-link__wrapper"><a target="_blank" href="' + linkUrl + '">' + linkText + '</a></div>';
		}
    }

    function addActiveCoMusicLinkToPage() {
        if (!currentlyOnGamePage()) return;
		let currentGameInfo = getCurrentGameInfo();
		
		if (!currentGameInfo.activeCoName) return;

		let linkUrl = getYoutubeLinkUrl(currentGameInfo.activeCoName);
        let linkHtml = getYoutubeLinkHtml(linkUrl);

		if (REARRANGE_LAYOUT) {
			$(linkHtml).appendTo('#left-side-menu-fixed-wrapper');
			repositionYoutubeLink();
		} else {
			$(linkHtml).insertAfter('#game-player-info, #replay-player-info');
		}
    }

	function repositionYoutubeLink() {
		let newTop = $('#game-player-info, #replay-player-info').height() + $('#left-side-profile-menu').height() + 170;
		$('.youtube-link__wrapper').css('top', newTop + 'px');
	}

	if (EMBED_MUSIC_VIDEO) {
		addActiveCoMusicVideoToPage();
	}

	if (EMBED_MUSIC_LINK) {
		addYoutubeStylesToPage();
		addActiveCoMusicLinkToPage();
	}

	// ================================================================================
	// Zoom the map using nearest neighbor instead of... bilinear? Whatever it was before.
	// ================================================================================

	if (CRISPY_ZOOM) {
		$('#gamemap').css('image-rendering', 'pixelated');
	}

	// ================================================================================
	// Rearrange the page layout
	// ================================================================================

	function rearrangeLayout() {
        if (!currentlyOnGamePage()) return;

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

        if (REARRANGE_1080P_FRIENDLY) {
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

		if (EMBED_MUSIC_VIDEO) {
			repositionYoutubeEmbed();
		}
		if (EMBED_MUSIC_LINK) {
			repositionYoutubeLink();
		}
	}

	if (REARRANGE_LAYOUT) {
		rearrangeLayout();
	}

	// ================================================================================
	// Use alternate protraits
	// ================================================================================

    function addPortraitStylesToPage() {
        $(`<style>
			.co-icon {
				width: 48px;
				height: 48px;
				display: inline-block;
				border: 1px black solid;
				margin: 2px 2px 2px 0;
				background-image: url("${SPRITESHEET_URL}");
			}

			.co-icon--small {
				transform: scale(0.5);
				margin: -12px;
			}

			.co-icon--dead {
				filter: brightness(70%) grayscale(50%);
				background-color: #ccc;
			}


		</style>`).appendTo('body');
    }

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

        if (currentlyOnGamesCompletedPage()) {
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

    if (USE_ALTERNATE_PORTRAITS) {
		addPortraitStylesToPage();
        applyAlternatePortraits();
        resizePortraitWrappers();
    }

	// ================================================================================
	// Change the maximum zoom
	// ================================================================================

	if (REARRANGE_LAYOUT && currentlyOnGamePage()) {
		// Overwrite this function to use the new max zoom value.
		// Some variables, like this function itself, are global (i.e. attached to window).
		window.scaleAdd = function(n) {
			document.getElementById('outer').style.maxWidth = '1500px';

			if (scale < 0.5 && n < 0) { return; } //do not allow to get too small
			if (scale > MAX_ZOOM && n > 0) { return; } //do not allow to get too big

			scale += n; //increase scale
			window.overdivScale = Math.min(scale, MAX_ZOOM / 2); // ~Soap

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

			if (REARRANGE_LAYOUT) {
				// Force a rearrange to fix anything this zoom thingy breaks
				rearrangeLayout();
			}
		};
	}

	if (REARRANGE_LAYOUT && currentlyOnGamePage()) {
		// Force the layout changes
		scaleAdd(0);
	}

	// ================================================================================
	// Utility functions
	// ================================================================================
	
	function getCurrentGameInfo() {
		return {
			activeCo: getActiveCo()
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
        return window.location.href.indexOf('game.php') > -1 || window.location.href.indexOf('replay.php') > -1;
    }

    function currentlyOnGamesCompletedPage() {
        return window.location.href.indexOf('gamescompleted.php') > -1;
    }

})();
