console.log('Ok - init reCaptcha6');
var sitekey = document.getElementById("sitekey").value;
console.log('Site key: ' + sitekey);

// function onSubmit(token) {
//     console.log('888');
//     // document.getElementById("form-email").submit();
// }

// grecaptcha.execute(sitekey).then(function () {
//     // Add your logic to submit to your backend server here.
//     console.log('ok21');
// });

// grecaptcha.execute();


// $('#recaptcha6-result').on('ajaxUpdate', function () {
//     // document.getElementById("re-form-email").submit();
//     console.log('Form Submitted !');
// });


// $('#submit').on('click', function () {
//     console.log('ok19');
// $('#submit').preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute(sitekey).then(function (token) {
            // Add your logic to submit to your backend server here.
            // console.log('ok21');
            console.log('Get GGle response : ' + token);
            $('#token').value = token;
            // $.post('', { "token": token });
        });
    });
// });


// function onSubmit(token) {
//     document.getElementById("re-form-email").submit();
// }


// $('#recaptcha5-result').on('ajaxUpdate', function(){
//     console.log('Form Submitted !');
// });
