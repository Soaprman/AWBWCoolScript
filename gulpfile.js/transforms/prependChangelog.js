const fs = require('fs');

module.exports = function (content, file) {
    let changelog = fs.readFileSync('changelog.txt');

    let formattedChangelog = 
`/* ================================================================================
Changelog
-----------------------------------------------------------------------------------
${changelog}
================================================================================ */

`;

    return formattedChangelog + content;
};