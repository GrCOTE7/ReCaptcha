console.log('Ok - init reCaptcha6');
var sitekey = document.getElementById("sitekey").value;
console.log('Site key: ' + sitekey);
$('#submit').css('display', 'none');

grecaptcha.ready(function () {
    grecaptcha.execute(sitekey).then(function (token) {
        console.log('Get GGle response : ' + token);
        $('#token').val(token);
        $.post('recaptcha/tr6', { "token": token });
        $('#submit').css('display', 'block');
    });
});
