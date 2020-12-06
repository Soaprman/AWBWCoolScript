const axios = require('axios').default;
const package = require('../../package.json');

module.exports = async function (content, file) {
    let githubInfo = await getGithubInfo();

    let userscriptHeader = 
`// ==UserScript==
// @name         ${package.userscriptHeader.name}
// @namespace    ${package.userscriptHeader.namespace}
// @version      ${githubInfo.tag_name}
// @description  ${package.userscriptHeader.description}
// @author       ${package.author}
// @match        ${package.userscriptHeader.match}
// @icon         ${package.userscriptHeader.icon}
// @require		 ${package.userscriptHeader.requireJquery}
// @grant        ${package.userscriptHeader.grant}
// ==/UserScript==

`;

    return userscriptHeader + content;
};

async function getGithubInfo() {
    let latestReleaseUrl = package.github.latestReleaseUrl;
    let response = await axios.get(latestReleaseUrl);
    return response.data;
}

