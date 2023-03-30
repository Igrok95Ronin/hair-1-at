<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Haartransplantation'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <h1 class="header__title">Haartransplantation</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
         <section class="mainFon">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="mainFon__box">
                            <div class="mainFon__left">
                                <div class="mainFon__wrapper">
                                    <h2 class="mainFon__title">Haartransplantationen</h2>
                                    <ul class="mainFon__ul">
                                        <li>✓ Flughafentransfers</li>
                                        <li>✓ 2 Übernachtungen</li>
                                        <li>✓ Persönliche Beratung</li>
                                        <li>✓ Schriftliche Garantie</li>
                                    </ul>
                                </div>
                                <div class="header___gifWrapper">
                                    <img src="./assets/img/00.gif" alt="" class="header___gif">
                                </div>
                            </div>
                            <div class="mainFon__right">
                                <img class="mainFon__img" src="assets/img/mainFon.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='consultation'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='consultation__box'>
                            <p class="consultation__dscr">Jetzt telefonisch beraten lassen!</p>
                            <div class="consultation__wrapBtn">
                                <a class="consultation__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='thickHair'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='thickHair__box'>
                            <div class="thickHair__left" id="anchor">
                                <div class="thickHair__leftInner">
                                    <h2 class='forms__title'>Jetzt Preis anfragen!</h2>
                                    <form id='jq_form' class='mb-0 mt-3'>
                                        <div class='my-0'>
                                            <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                            <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class='my-4'>
                                            <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                            <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class='my-4'>
                                            <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                                            <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class='my-4'>
                                            <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                                            <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class='my-4'>
                                            <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                            <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div class='my-4'>
                                            <textarea rows='3' class='form-control' name='jq_text' placeholder='Beschreibung'></textarea>
                                            <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                                        </div>
                                        <div>
                                            <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                                        </div>
                                        <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                                    </form>
                                </div>

                            </div>

                            <div class="thickHair__right">
                                <h2 class="thickHair__title">So erhalten Sie wieder volles Haar</h2>
                                <div class="thickHair__imgW">
                                    <img class="thickHair__img" src="assets/img/1.png" alt="" >
                                </div>
                                <p class="thickHair__txt">Wir bieten eine effektive Möglichkeit, volles Haar wiederzuerlangen. Erfahrene Fachkräfte entnehmen gesunde Haarfollikel aus einer Spenderregion und transplantieren sie minimalinvasiv in kahle oder dünn besiedelte Bereiche der Kopfhaut. Moderne Techniken erzielen natürliche und dauerhafte Ergebnisse, die das Selbstbewusstsein und Wohlbefinden verbessern. Kontaktieren Sie uns für eine kostenlose Beratung.</p>
                                <ul class="thickHair__ul">
                                    <li>✓ Haarwiederherstellung</li>
                                    <li>✓ Natürliche Ergebnisse</li>
                                    <li>✓ Kostenlose Beratung</li>
                                    <li>✓ Günstige Preise</li>
                                    <li>✓ Erfahrene Fachkräfte</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='consultation'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='consultation__box'>
                            <p class="consultation__dscr">Jetzt telefonisch beraten lassen!</p>
                            <div class="consultation__wrapBtn">
                                <a class="consultation__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='lowPrices'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='lowPrices__box'>
                            <div class="lowPrices__left">
                                <p class="lowPrices__txt">
                                    <b>Niedrige Preise
                                    von 1990,- € bis 2490,- €</b> All-Inclusive-Pakete</p>
                                <a class="lowPrices__btn" href="#anchor" >PREIS ANFRAGE</a>
                            </div>
                            <div class="lowPrices__right">
                                <ul class="lowPrices__ul">
                                    <li>✓ Flughafentransfers</li>
                                    <li>✓ 2 Übernachtungen in unserem Premium-Apartment</li>
                                    <li>✓ Persönliche Beratung durch den Chirurgen</li>
                                    <li>✓ Implantation mit dem FUE2 SafeSystem</li>
                                    <li>✓ Schriftliche Garantie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='freeOffer'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='freeOffer__box'>
                            <div class="freeOffer__left">
                                <div class="freeOffer__imgW">
                                    <img src="assets/img/2.png" alt="" class="freeOffer__img">
                                </div>
                            </div>
                            <div class="freeOffer__right">
                                <h2 class="freeOffer__title">Kostenloses Angebot einholen</h2>
                                <p class="freeOffer__txt">Unsere Experten im Bereich Haartransplantation stehen bereit, um einen individuellen Behandlungsplan speziell auf Ihre Bedürfnisse zuzuschneiden - und das innerhalb von nur 24 Stunden.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
            </div>
        </section>
        <section class='messageFixed'>

            <div class='messageFixed__box'>
                <div class="freeOffer__message">
                    <a title="Whatsapp" href="whatsapp://send?phone=+43 660 4275976"><img src="assets/icons/WhatsApp.svg" /></a>

                    <a title="Telegram" href="https://t.me/+RlCVamvJxo80N2Zii" target="_blank"><img src="assets/icons/Telegram.svg"/></a>
                </div>
            </div>
       
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>