console.log('Ok - initCaptcha');
console.log('Site key: ' + sitekey);

function onSubmit(token) {
    document.getElementById("form-email").submit();
}

// $('#submit').on('click', function () {
//     var t = null;
//     console.log('reset');

//     grecaptcha.execute().then(function(token) {
//       t = token;
//       console.log('token : '+ t);
//     });
// });

// $(document).on('submit', '#re-form-email', function (e) {
//     e.preventDefault();
//     grecaptcha.ready(function () {
//         // var token = grecaptcha.execute('SITE_KEY');
//         console.log('Go Ggle for response !');
        // return token;

        // grecaptcha.execute(sitekey).then(function (token) {

            //     // return token;
            //     //     // let formData={
        //     //         //     'name':'Lionel',
        //     //        //     'email':'llll',
        //     //         //     'token':token
        //     //         // };

        //     //         // $.post('', formData, function(token2) {
            //     //             //     console.log(token2);
        //     //             //     $('#result').html(token2);
        //     //             // });
        //     //             console.log('Get GGle response' + token);
        //     $.post('', { "token": token });
        //     console.log('Get GGle response : ' + token);

        //     $("#g-recaptcha-response").val(token);
        //     console.log('Mise à jour : ' + ($('#g-recaptcha-response').val()));
        //     // $('#submit').trigger('click');
        //     //         });
//         });
//     });
// });
// $('#submit').on ("click", function(e) {
//         // e.preventDefault();
//         console.log('Get GGle response');

//         grecaptcha.ready(function() {
//             console.log(123);
//             grecaptcha.execute();
//             console.log(456);
//         });
// });
