<?php /* dd($_SESSION);  */?>
<?php require ("./../views/partials/header.php") ?>

<main>
    <section class="hero-section padding-block-600">
        <div class="hero-section__text | container flex flex-direction-clmn flex-ai-center flex-jc-center text-center">
            <p class="text-neutral-100 fs-primary-hero-heading caps">Kontakt</p>
        </div>
    </section>

    <section class="padding-block-500">
        <div class="container flow">
            <div class="grid-even-columns">
                <div class="flow">
                    <div>
                        <h1 class="fs-secondary-heading">Kontaktdaten - Life Coach</h1>
                        <p class="fs-fourth-heading caps">So erreichen sie mich ganz schnell</p>
                    </div>
                    <p>Silvina Regalar <br>
                        Hoppenstraße 8 <br>
                        32457 Porta Westfalica <br>
                        kontakt@coaching-silvina-regalar.de</p>
                    <h3 class="fs-third-heading">Telefonische Erreichbarkeit</h3>
                    <p style="--flow-spacer: 1em">Montag bis Freitag: 16:00 Uhr - 20:00 Uhr <br>
                        0571 7797756</p>
                    <h3 class="fs-third-heading">Coaching Termine</h3>
                    <p style="--flow-spacer: 1em">individuell und nach vorheriger Vereinbarung.</p>
                    <p class="bold">Ich freue mich darauf Sie kennenzulernen!
                    </p>
                </div>
                <div class="flow">
                    <h2>
                        <span class="fs-secondary-heading">Coaching Beratungsanfrage</span><br>
                        <span class="fs-fourth-heading caps">Kontaktformular</span>
                    </h2>
                    <form id="kontakt-formular" class="flow" action="/kontakt" method="POST">
                        <div>
                            <label for="name">Vor- und Nachname</label>
                            <input name="name" id="name" class="display-block" type="text" 
                            <?= isset($_SESSION["_flash"]["old"]["name"]) ? "value='{$_SESSION['_flash']['old']['name']}'" : "value='Aragorn Gondor'" ?>
                            />
                        </div>
                        <div style="--flow-spacer: 1em">
                            <label for="phone">Telefonnummer (optional)</label>
                            <input name="phone" id="phone" class="display-block" type="text" 
                            <?= isset($_SESSION["_flash"]["old"]["phone"]) ? "value='{$_SESSION['_flash']['old']['phone']}'" : "value='01573 355 78 90'" ?>
                            />
                        </div>
                        <div style="--flow-spacer: 1em"><label for="email">E-Mail-Adresse</label>
                            <input name="email" id="email" class="display-block" type="email" 
                            required
                            <?= isset($_SESSION["_flash"]["old"]["email"]) ? "value='{$_SESSION['_flash']['old']['email']}'" : "value='aragorngondor@web.de'" ?>
                            />
                        </div>
                        <div style="--flow-spacer: 1em"><label for="message">Was möchten Sie mir mitteilen?</label>
                            <textarea name="message" id="message" class="display-block" cols="30" rows="4" required><?= isset($_SESSION["_flash"]["old"]["message"]) ? $_SESSION['_flash']['old']['message'] : "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet" ?>
                            </textarea>
                        </div>
                        <div><input id="datenschutz" type="checkbox" required>
                            <label class="datenschutz-label" for="datenschutz">Ja, ich habe die <a href="/impressum"
                                    class="link--red">Datenschutzerklärung</a> zur Kenntnis genommen. Ich stimme zu,
                                dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und
                                gespeichert werden.</label>
                        </div>
                        <p style="--flow-spacer: 4em" class="red-text fs-body-small" >
                            <?= $_SESSION["_flash"]["errors"]["body"] ?? "" ?>
                        </p>
                        <button 
                        id="submit-btn"
                        class="g-recaptcha | btn btn--form"
                        data-sitekey="6LejRNApAAAAAJjOdzuyagpm4VvzrLscDc5dVNNj"
                        data-callback='onSubmit'
                        data-action='submit'
                        >Jetzt abschicken</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
   function onSubmit(token) {
     document.getElementById("kontakt-formular").submit();
   }
 </script>


<?php require ("./../views/partials/footer.php") ?>