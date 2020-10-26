const LocalStorageConfigKey = 'awbwUserscriptConfig';

function getConfig() {
    let defaultConfig = getDefaultConfig();
    let config = readConfigFromStorage() || {};

    // Merge saved config into default config, to ensure new functionality gets added if not already present
    let mergedConfig = Object.assign(defaultConfig, config);

    // In case I need to test save/load before the panel is done
    // writeConfigToStorage(mergedConfig);

    return mergedConfig;
}

function saveConfig(userConfig) {
	writeConfigToStorage(userConfig);
}

// Change costumeIndex if you want to.
// 0 = Default
// 1 = Japanese default (Olaf, Grit, Sonja only)
// 2 = Alternate (everyone but Sturm)
// 3 = Japanese alternate (Olaf, Sonja only)
// Spritesheet is at https://soaprman.net/r/awbw/awportraits.png if you want to see them
function getDefaultConfig() {
    return {
        embedMusicLink: true,
        embedMusicVideo: false,
        rearrangeLayout: true,
        rearrange1080pFriendly: true,
        crispyZoom: true,
        useAlternatePortraits: true,
        spritesheetUrl: 'https://soaprman.net/r/awbw/awportraits.png',
		maxZoom: 3.0,
		recolorCountries: false,
        coData: [
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
		]
    };
}

function writeConfigToStorage(userConfig) {
    window.localStorage.setItem(LocalStorageConfigKey, JSON.stringify(userConfig));
}

function readConfigFromStorage() {
    return JSON.parse(window.localStorage.getItem(LocalStorageConfigKey));
}

exports.getConfig = getConfig;
exports.saveConfig = saveConfig;