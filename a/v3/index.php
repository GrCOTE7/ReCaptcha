<!DOCTYPE html>
<html lang="fr">

<head>
    <meta description="Simple exemple de v3 + Ajax">
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReCaptcha v3</title>
    <link rel="shortcut icon" href="/a/src/icons/favicon.ico" />
    <style>
        body {
            font-family: arial;
        }
    </style>
</head>

<body>
    <div class="linksgc7">
        <a href="http://bl/t">Retour Test</a>
    </div>

    <h1>Google Recaptcha V3</h1>
    <p><a href="https://www.guptatreepoint.com/google-recaptcha-v3-php-example-google-recaptcha-version-3-%E0%A4%95%E0%A5%8B-php-%E0%A4%AE%E0%A5%87%E0%A4%82-%E0%A4%95%E0%A5%88%E0%A4%B8%E0%A5%87-integrate-%E0%A4%95%E0%A4%B0%E0%A5%87%E0%A4%82/"
            target="_blank">Exemple complet en Ajax (2 fichiers)</a>
    </p>

    <div id="result"></div><br>

    <form id="google_recaptcha_v3">
        <label>Name : </label>
        <input type="text" name="name" id="name" value="Lionel">
        <input type="submit" name="submit">
    </form>

    <script src="https://www.google.com/recaptcha/api.js?render=SITE_KEY"></script>

    <script src="/a/src/js/jquery360.min.js"></script>

    <script type="text/javascript">
        $(document).on('submit', '#google_recaptcha_v3', function(e) {
            e.preventDefault();

            grecaptcha.ready(function() {
                grecaptcha.execute('SITE_KEY', {
                    action: 'application_form'
                }).then(function(token) {

                    let formData = {
                        name: $('#name').val(),
                        token: token,
                        action: 'application_form'
                    };

                    $.post('recaptchaVerify.php', formData, function(result) {
                        console.log(result);
                        $('#result').html(result);
                    });



                });
            });
        });
    </script>
</body>

</html>