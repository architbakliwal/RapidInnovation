// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a:not(.dropdown > a)').click(function() {
    $('.navbar-toggle:visible').click();
});


/*$("#loginform #qa-login").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // additional error messages or events
    },
    submitSuccess: function($form, event) {
        console.log("submit");
        event.preventDefault(); // prevent default submit behaviour
        // get values from FORM
        var emailhandle = $("input#qa-userid").val();
        var password = $("input#qa-password").val();
        var remember = $("input#qa-rememberme").val();
        var code = $("textarea#qa-code").val();

        $.ajax({
            url: "../qa/qa-include/pages/login-ext.php",
            type: "POST",
            data: {
                emailhandle: name,
                password: phone,
                remember: email,
                code: message,
                to: '/abc'
            },
            cache: false,
            success: function() {
                console.log("success");
            },
            error: function() {
                console.log("error");
            },
        });
    },
    filter: function() {
        return $(this).is(":visible");
    },
});
*/
