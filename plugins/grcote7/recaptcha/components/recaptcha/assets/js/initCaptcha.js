console.log('Ok - initCaptcha');

$(document).on('submit', '#re-form-email', function (e) {
    e.preventDefault();
    grecaptcha.ready(function () {
        // var token = grecaptcha.execute('SITE_KEY');
        console.log('Go Ggle for response !');
        // return token;

        grecaptcha.execute('SITE_KEY').then(function (token) {

            // console.log('Get GGle response : ' + token);
            // return token;
            //     // let formData={
            //         //     'name':'Lionel',
            //        //     'email':'llll',
            //         //     'token':token
            //         // };

            //         // $.post('', formData, function(token2) {
            //             //     console.log(token2);
            //             //     $('#result').html(token2);
            //             // });
            //             console.log('Get GGle response' + token);
            $.post('', { "token": token });
            console.log('Get GGle response : ' + token);

            $("#g-recaptcha-response").val(token);
            console.log('Mise à jour : ' + ($('#g-recaptcha-response').val()) );
            $('#submit').trigger('click');
            //         });
        });
    });

    // function onClick(e) {
    //   e.preventDefault();
    //   grecaptcha.ready(function() {
    //     grecaptcha.execute('SITE_KEY', {action: 'submit'}).then(function(token) {
    //         // Add your logic to submit to your backend server here.
    //         console.log(123);
    //     });
    //   });
});
