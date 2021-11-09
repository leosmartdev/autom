$( document ).ready(function() {
    // Handler for .ready() called.
    initAlerts();
    console.log("11111111111111111")
});

var initAlerts = function() {
    // init bootstrap popover
    $('.alert-close').on('click', function() {
       $('.alert-box').hide();
    });
}
