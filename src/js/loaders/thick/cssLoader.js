const configRepository = require('../../dataAccess/configRepository');

exports.addStylesToPage = function () {
    let userConfig = configRepository.getConfig();

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
    
.co-icon {
    width: 48px;
    height: 48px;
    display: inline-block;
    border: 1px black solid;
    margin: 2px 2px 2px 0;
    background-image: url("${userConfig.spritesheetUrl}");
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
};