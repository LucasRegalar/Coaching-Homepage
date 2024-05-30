<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaching Silvina Regalar</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script type="module" src="../assets/js/main.js"></script>
</head>

<body class="radial-gradient">
    <main class="flow flex flex-direction-clmn flex-ai-center padding-block-600 text-center container">
        <h1 class="fs-primary-heading">Fehler</h1>
        <p>Es tut mir Leid. Scheinbar ist irgendetwas schief gelaufen und ich konnte Ihre Anfrage nicht erhalten.
            <br />Bitte kontaktieren Sie mich direkt über:
        </p>
        <p>Email: kontakt@coaching-silvina-regalar.de
            <br />oder
            <br />Telefon: 0571 779 7756
        </p>
        <a href="/" class="btn btn--thinn">Startseite</a>

        <p style="--flow-spacer: 5em">Kopie ihrer Nachricht:</p>
        <p>
            <?= isset($_SESSION["_flash"]["old"]["message"]) ? $_SESSION["_flash"]["old"]["message"] : "" ?>
        </p>
    </main>
</body>

</html>