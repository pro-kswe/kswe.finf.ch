<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>KSWE: Ergänzungsfach Informatik</title>
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $to = "ron@kswe.ch; pro@kswe.ch"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $_POST['message'];
    $headers = "From:" . $from;
    if (mail($to, "Finf Kontakt", $message, $headers)) { ?>
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        E-Mail erfolgreich verschickt.
                    </h1>
                    <h2 class="subtitle">
                        Sie erhalten in Kürze eine Antwort. <a href="/index.html">Zurück zur Hauptseite.</a>
                    </h2>
                </div>
            </div>
        </section>
        <?php
    } else { ?>
        <section class="hero is-danger is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Sorry...
                    </h1>
                    <h2 class="subtitle">
                        Da ging wohl was schief...Versuchen Sie es doch direkt an trn at kswe dot ch oder pro at kswe dot ch.
                    </h2>
                </div>
            </div>
        </section>
        <?php
    }
} else {
    header('Location: index.html');
}
?>
</body>
</html>
