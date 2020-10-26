const fs = require('fs');

module.exports = function (content, file) {
    let injectThisContent = fs.readFileSync('output/index.html');

    // //!INJECT_HTML
    return content.replace(/\/\/!INJECT_HTML/i, injectThisContent);
};