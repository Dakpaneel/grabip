console.log("Want to know how this is made? Visit https://github.com/Dakpaneel/grabip.");
$(document).ready(function() {
    let clipboard = $('.clipboard');
    let notification = $('.notification');
    clipboard.click(function() {
        if(notification.css('right') !== '0px'){
            notification.animate({
                right: '0'
            }, 400, function() {
                notification.delay(2200).animate({
                    right: '-400px'
                }, 400, )
            });
        }
    })
})