;

///////////////
// Main menu //
///////////////
var menuButton = $('.menu-button');
var mainMenuList = $('.main-menu__list');
menuButton.click(function(){
    mainMenuList.toggle();
});



//////////////
// Features //
//////////////
var featureButtons = $('.features__link');
var featureTexts = $('.features__text');
var featureTitles = $('.features__title');

featureButtons.click(function(event) {
    event.preventDefault();
    var btnIndex = featureButtons.index($(this));

    for (var i = 0; i < featureButtons.length; i++) {
        if (btnIndex == i) {
            $(featureTexts[i]).addClass('features__text--active');
            $(featureButtons[i]).addClass('features__link--active');
            $(featureTitles[i]).addClass('features__title--active');
            // featureTexts[i].show();
        } else {
            $(featureTexts[i]).removeClass('features__text--active');
            $(featureButtons[i]).removeClass('features__link--active');
            $(featureTitles[i]).removeClass('features__title--active');
        }
    }
});

//TODO: проверять на обновление размеров, например при повороте планшета