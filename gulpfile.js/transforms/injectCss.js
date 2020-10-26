const fs = require('fs');

module.exports = function (content, file) {
    let injectThisContent = fs.readFileSync('output/style.css');

    // //!INJECT_CSS
    return content.replace(/\/\/!INJECT_CSS/i, injectThisContent);
};