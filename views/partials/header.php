<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Life Coaching, Lebensberatung und psychologische Beratung in Porta Westfalica - Silvina Regalar' ?></title>
    <meta name="description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : 'Erleben Sie professionelle Lebensberatung und psychologische Beratung mit Silvina Regalar in Porta Westfalica. Entspanntes Erstgespräch bei kostenlosem Erstgespräch. Raum Bielefeld, Herford, Minden, Bad Oeynhausen, Hille, und Lübbecke.'; ?>">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon/apple-touch-icon-180x180.png">
        <!-- Für Browser -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon/favicon-32x32.ico">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/imgs/favicon/favicon-96x96.png">
        <!-- Für Windows -->
        <meta name="msapplication-square310x310logo" content="assets/imgs/favicon/mstile-310x310.png">
        <meta name="msapplication-TileColor" content="[HEXFARBE (z.B. #000000)]">
    <!-- End Favicon -->
    <script type="module" src="assets/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <header class="primary-header">
        <div class="header-container | flex flex-ai-center flex-jc-space-between">
            <a class="logo" href="/">
                <svg viewBox="258.548 254.203 63.56 25.46" xmlns="http://www.w3.org/2000/svg">
                    <text
                        style="fill: #fff; font-family: 'Nanum Myeongjo'; font-size: 11.5px; letter-spacing: -0.8px; white-space: pre;"
                        x="258.548" y="263.657">Silvina Regalar</text>
                    <text
                        style="fill: rgb(202, 11, 0); font-family: 'Nanum Myeongjo'; font-size: 11.5px; letter-spacing: -0.8px; word-spacing: 3.1px; white-space: pre;"
                        x="258.548" y="277.001">Life Coaching</text>
                </svg>
            </a>
            <button id="toggle-nav-btn" class="toggle-nav-btn" aria-controls="primary-nav" aria-expanded="false">
                <span class="screenreader-only">Menu</span>
            </button>
            <nav id="primary-nav" class="primary-nav | fs-body-small" data-visible="false">
                <ul class="primary-nav__main-ul | flex flex-jc-space-between" role="list">
                    <li class="primary-nav__main-ul__item"><a href="/">Home</a></li>
                    <li class="primary-nav__main-ul__item primary-nav__dropwdown">
                        <a class="primary-nav__dropwdown__trigger" href="/">
                            Coaching
                            <i class="fa-solid fa-sort-down"></i>
                        </a>
                        <ul class="primary-nav__dropwdown__menu" role="list">
                            <li class="primary-nav__dropwdown__menu__item"><a href="/einzelcoaching">Einzelcoaching</a>
                            </li>
                            <li class="primary-nav__dropwdown__menu__item"><a
                                    href="/beziehungscoaching">Beziehungscoaching</a></li>
                            <li class="primary-nav__dropwdown__menu__item"><a
                                    href="/businesscoaching">Businesscoaching</a>
                            </li>
                        </ul>
                    </li>
                    <li class="primary-nav__main-ul__item"><a href="/ueber-mich">Über mich</a></li>
                    <li class="primary-nav__main-ul__item"><a href="/kontakt">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>