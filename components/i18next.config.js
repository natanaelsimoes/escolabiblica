require(['jquery', 'i18next'], function ($) {
    $(function () {
        var lngComp = navigator.language.split("-");
        var lngUser = (lngComp[0]);
        console.log("User language: %s", lngUser);
        var option = {
            lng: lngUser,
                        resGetPath: 'http://localhost/EscolaBiblica/src/lang/__lng__/__ns__.json',
            ns: {
                namespaces: ['admin','build','index','mycookie','user']
            },
            useLocalStorage: false,
            localStorageExpirationTime: 86400000 // in ms
        };
        i18n.init(option, function (t) {                
            $("html").i18n();
        });
    });
});      