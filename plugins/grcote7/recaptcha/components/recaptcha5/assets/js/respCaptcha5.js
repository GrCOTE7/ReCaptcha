
if (trigger == 789) {
    console.log('Ok 888');
}


$(document).on('submit', '#re-form-email', function (e) {
    //e.preventDefault();

    grecaptcha.ready(function () {
        grecaptcha.execute('SITE_KEY', {
            action: 'application_form'
        }).then(function (token) {

            let formData = {
                name: $('#name').val(),
                token: token,
                action: 'application_form'
            };

            $.post('/a/v3/recaptchaVerify.php', formData, function (result) {
                console.log(result);
                $('#result').html(result);
            });

        });
    });
});
// {# < script src = "https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
//            async defer >
  
function onClick(e) {
    e.preventDefault();

    jQuery(function ($) {
        grecaptcha.ready(function () {
            grecaptcha.execute('SITE_KEY', { action: '/tr2' }).then(function (token) {
                console.log('soumis');
                // Add your logic to submit to your backend server here.
            });
        });
        console.log("Envoi GGle");
        //  grecaptcha.execute();
        //$( "#sendButton" ).on('click', function() {
        //    $( this ).slideUp();
        //});
        // $("#subscribe").click();
    });
}

