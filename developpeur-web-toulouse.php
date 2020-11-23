<!-- Bienvenue sur mon site de développeur web freelance. Je vous souhaite une agréable visite :) -->

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-NTF3D410HS"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-NTF3D410HS');
        </script>
        <title>Développeur Web freelance à Toulouse - Yohan VERDALLE</title>
        <link rel="icon" href="/favicon.ico" type="image/x-icon" /> <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" /> <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <link rel="stylesheet" href="src/css/main.css">
        <!-- CSS -->

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/58345609c6.js" crossorigin="anonymous"></script>

        <!-- font -->

        <!-- meta SEO -->
        <meta name="description" content="Développeur Web Freelance, crée des sites internet vitrines ou sites web marchands. Réalisation devis, réalisation site, optimisation référencement SEO, formation à l'administration du site. Je créerai votre site internet sur mesure.">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <!-- end meta SEO -->

        <!-- verif form -->
        <script src="src/js/contact.js"></script>
        <script>
          document.addEventListener('DOMContentLoaded', function(){
            form_verifTxt('profil',['Nom', 'Prénom', 'Email', 'Objet', 'Message', 'textarea']);
          });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- verif form -->
        <!-- BounceIn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <!--BounceIn> -->
    </head>
        <!-- body -->
        <?php
        $date = date("Y");
        ?>
    <body>
      <script src="src/js/main.js"></script>

          <!-- header -->
          <nav role="navigation" class="navtel">
            <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
      <input type="checkbox" />

    <!--
    Some spans to act as a hamburger.

    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>

    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      <a href="https://www.yohan-verdalle.fr/#accueil"><li>Accueil</li></a>
      <a href="https://www.yohan-verdalle.fr/#mes_competences"><li>Compétences</li></a>
      <a href="https://www.yohan-verdalle.fr/#mes_travaux"><li>Portfolio</li></a>
      <a href="https://www.yohan-verdalle.fr/#about"><li>A propos</li></a>
      <a href="https://www.yohan-verdalle.fr/faq"><li>FAQ</li></a>
      <a href="https://www.yohan-verdalle.fr/#open_modal"><li>Contact</li></a>
    </ul>
  </div>
</nav>
<a href="#accueil" class="a-logo">Yohan VERDALLE</a>

          <div class="block">

            <header class="header2">
                <a href="#accueil" class="header2-logo">Yohan VERDALLE</a>
                <nav class="header2-menu">

                <a href="https://www.yohan-verdalle.fr/#accueil">Accueil</a>
                <a href="https://www.yohan-verdalle.fr/#mes_competences">Compétences</a>
                <a href="https://www.yohan-verdalle.fr/#mes_travaux">Portfolio</a>
                <a href="https://www.yohan-verdalle.fr/#about">A propos</a>
                <a href="https://www.yohan-verdalle.fr/faq">FAQ</a>
                <a href="https://www.yohan-verdalle.fr/#open_modal">Contact</a>

              </nav>
            </header>
          </div>
          <!-- end Header -->

          <!-- banner-->

          <section id="accueil">
            <div class="block">
              <div class="banniere">
                <div class="banniere-content">

                  <h1 class="title is-1 animate__animated animate__bounceInDown">Développeur web Freelance à Toulouse, réalise vos sites internets.</h1>
                  <h2 class="subtitle animate__animated animate__bounceInLeft">Découvrez sur ce site mes différents travaux de développeur web
                    freelance. Réalisation de vos sites webs en natif ou avec WordPress / Prestashop / Shopify. Je peux réaliser aussi bien des sites internet vitrines que des sites internets marchands</h2>
                </div>
              </div>
            </div>
          </section>
          <!-- End Banner-->


          <!-- Compétences -->

          <section id="mes_competences">
            <h2 class="subtitle heading-site">Mes compétences de <strong class="strongclass">développeur web</strong></h2>

            <div class="container">

              <div class="together_2">
                <img src="src/img/creationsite.png" alt="Logo développement de site web">
                <h4>Création de site webs (<strong>site vitrine, site e-commerce (ou site marchand)</strong>)</h4>
              </div>
              <div class="together_2">
                <img src="src/img/respo.png" alt="Logo de développeur web Responsive Design">
                <h4><strong>Responsive</strong> Design, compatible tous supports : adapté <strong>ordinateur, tablette, smartphone</strong></h4>
              </div>
              <div class="together_2">
                <img src="src/img/maintenance.png" alt="Logo Maintenance du site">
                <h4><strong>Maintenance</strong> du site</h4>
              </div>
            </div>
            <div class="container">
              <div class="together_2">
                <img src="src/img/cms.png" alt="Logo Gestion de CMS">
                <h4>Mise en place / gestion de Système de gestion de contenu ou CMS (<strong>Wordpress</strong>, <strong>prestashop</strong>, <strong>shopify</strong>)</h4>
              </div>
              <div class="together_2">
                <img src="src/img/formation.png" alt="Logo Formation à l'administration de site web">
                <h4><strong>Formation</strong> à l’administration du site web</h4>
              </div>
              <div class="together_2">
                <img src="src/img/hebergement.png" alt="Logo hebergement web">
                <h4><strong>Hébergement</strong>, choix du nom de domaine (conseil)</h4>
              </div>
            </div>
            <div class="container">

            <div class="together_2">
              <img src="src/img/seo.png" alt="Logo Référencement SEO">
              <h4>Mise en place des bonnes pratiques <strong>SEO</strong> (Optimisation pour les moteurs de recherche) afin d’assurer un <strong>référencement de qualité</strong></h4>
            </div>
            <div class="together_2">
              <img src="src/img/cahier.png" alt="Logo Cahier des Charges">
              <h4>Aide à la réalisation du <strong>cahier des charges</strong></h4>
            </div>
          </div>
          <div class="competences_explain">
            <h3 class="subtitle">Selon la complexité des projets que vous me demandez, je peux utiliser les technologies <strong>HTML</strong>, <strong>CSS</strong>, <strong>Javascript</strong>, <strong>PHP</strong> en natives, ou utiliser des CMS tels que <strong>Prestashop</strong> , <strong>Shopify</strong> ou <strong>WordPress</strong></h3>
          </div>
          <div class="container">

            <div class="together">
            <img src="src/img/html5.png" alt="Logo de développeur web HTML5">
            </div>
            <div class="together">
            <img src="src/img/css3.png" alt="Logo de développeur web CSS3">
            </div>
            <div class="together">
            <img src="src/img/js.png" alt="Logo de développeur web JS">
            </div>
            <div class="together">
            <img src="src/img/php.png" alt="Logo de développeur web PHP">
            </div>

            <div class="together">
            <img src="src/img/presta.png" alt="Logo de développeur web Prestashop">
            </div>
            <div class="together">
            <img src="src/img/shop.png" alt="Logo de développeur web Shopify">
            </div>
            <div class="together">
            <img src="src/img/wp.png" alt="Logo de développeur web WordPress">
            </div>
          </div>
        </section>

          <!-- portfolio -->
          <section id="mes_travaux">
            <h2 class="subtitle heading-site">Mon portfolio</h2>
              <div class="container">
                <div class="together">
                <article class="portfolio">
                  <a href="http://interclubstucbad.fr/" title="Clickez moi!" target="_blank"><img class="firstsite" src="src/img/Capture2.PNG" alt="Site interclubs/tucbad développé par Yohan VERDALLE"></A>
                </article>
                </div>
                <div class="together">
                  <article class="portfolio">
                    <a href="http://itctucbad.epizy.com/accueil.php" title="Clickez moi!" target="_blank"><img class= "secondsite" src="src/img/Capture.PNG" alt="Site itctucbad développé par Yohan VERDALLE"></A>
                  </article>
                </div>
              </div>
          </section>

          <!-- end portfolio -->

          <!-- section : à propos -->
          <section id="about">
            <div class="block">
              <h2 class="subtitle heading-site">A propos</h2>
              <div class="container about">
                <div class="columns">
                  <div class="column about-single-element">
                    <i class="fas fa-code"></i>
                    <p>Passionné depuis tout petit par les technologies, je me suis naturellement tourné vers le <strong>développement web</strong>. D'abord en autodidacte avec <strong>OpenClassRooms</strong>, puis avec <strong>l'école ARIES de Toulouse</strong> devenue BRASSART. Depuis, je continue à développer mon savoir-faire et mes connaissances en maintenant une veille informatique pour optimiser mes travaux dans la <strong>création de site internets</strong>.</p>
                   </div>
                  <!-- <div class="column about-single-element">
                     <i class="fas fa-search"></i>
                     <p>Si mes créations vous plaisent, je vous propose de développer votre propre site web (devis gratuit). N'hésitez pas à me <strong>contacter</strong>. Je peux vous aider dans vos <strong>réalisations de site web</strong>. Je maîtrise les <strong>langages HTML/CSS/Javascript/PHP/MySQL</strong>. Je peux aussi utiliser des CMS (gestionnaires de contenus) tels que Wordpress ou SPIP si vous le souhaitez. N'hésitez pas à parcourir mes créations dans la section ci-dessus qu'est une liste de mes réalisations.</p>
                   </div> -->
                  <div class="column about-single-element">
                    <i class="fas fa-running"></i>
                    <p>En parallèle  de ma passion pour le <strong>développement web</strong>, j'entretiens une autre passion, pour le sport et plus précisément pour le <strong>badminton</strong>. Vous pourrez retrouver dans mon portfolio deux applications webs que j'ai créées, en lien avec cette passion. Je suis par ailleurs <strong>Président</strong> de mon club, le <strong>Toulouse Université Club Badminton</strong> </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end section : à propos -->

          <!-- contact -->
          <section id="contact">
            <div class="container contact">
              <h3> Si vous voulez un devis pour réaliser votre site, ou même prendre contact avec moi, n'hésitez plus ...</h3>
              <button class="button is-link" id="open_modal">Contactez-moi !</button>
            </div>
          </section>
          <!-- end contact -->

          <!-- Modal -->
          <div class="modal own-modal" id="modal_to_open">
            <div class="modal-background"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                <p class="modal-card-title">Formulaire de contact</p>
                <button class="delete" aria-label="close" id="close_modal"></button>
                </header>
                <section class="modal-card-body">
                <!-- Contact -->
                  <div class="block">
                    <h2 class="heading-site">Contactez-moi</h2>
                    <div class="contact-form">
                      <form id="profil" action="index.php" name="profil" method="post">
                        <div class="field">
                        <label class="label">Votre nom</label>
                          <div class="control">
                            <input id ="Nom" class="input" type="text" name="Nom">
                          </div>
                        </div>
                        <div class="field">
                          <label class="label">Votre prénom</label>
                          <div class="control">
                              <input id= "Prénom" class="input" type="text" name="Prénom">
                          </div>
                        </div>
                        <div class="field">
                          <label class="label">Votre email</label>
                          <div class="control">
                            <input id="Email" class="input" type="text" name="Email" >
                          </div>
                          <div class="field">
                            <label class="label">Objet</label>
                            <div class="control">
                              <input id="Objet" class="input" type="text" name="Objet" >
                            </div>
                          </div>
                          <div class="field">
                            <label class="label">Votre message</label>
                            <div class="control">
                              <textarea id="Message" class="textarea" placeholder="Entrez votre message" name="Message"></textarea>
                            </div>
                          </div>
                        <button class="button is-link" id="send_email">Envoyer !</button>
                      </div>
                    </form>

                          <!-- End Contact -->
                        </section>
                      </div>
                    </div>
                    <!-- POPUP FORM -->
                    <div id="popup">
                      <section></section>
                    </div>
                    <!-- end POPUP FORM-->
                    <!-- End Modal -->


                          <!-- FORM ENVOYE? -->

                          <?php

                          if($_POST) {
                            $firstname = $_POST['Prénom'];
                            $name= $_POST['Nom'];
                            $email= $_POST['Email'];
                            $objet = $_POST['Objet'];
                            $message = $_POST['Message'];

                            $header="MIME-Version: 1.0\r\n";
                            $header.='From:'.$name.'<'.$email.'>'."\n";
                            $header.='Content-Type:text/html; charset="utf-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';
                            $subject=$objet;
                            $destinataire="yohan.verdalle.pro@gmail.com";
                            $body=$message;
                            if(mail($destinataire, $subject, $body, $header)) {
                              $reponse['status']= 'success';
                              $reponse['msg']= 'Votre mail a bien été envoyé.';
                            echo "<script src='src/js/formenvoye.js'></script>";
                            } else {
                              $reponse['status']='error';
                              $reponse['msg']='Quelque chose n\'a pas fonctionné.';
                            }
                          }
                          ?>
                              <!-- FORM ENVOYE? -->

          <!-- FOOTER -->
            <footer>
              <div class="footers">
                <article>
                  <a class="twitter" href="https://twitter.com/VerdalleYohan" target="_blank">
                  <i class="fab fa-twitter"></i>
                  </a>
                  <a class="linkedin" href="https://www.linkedin.com/in/yohan-verdalle-b004aa129/?originalSubdomain=fr"  target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  Yohan VERDALLE - Tous droits réservés <?= $date ?>
                  <a class="linkedin" href="https://www.linkedin.com/in/yohan-verdalle-b004aa129/?originalSubdomain=fr" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a class="twitter" href="https://twitter.com/VerdalleYohan" target="_blank">
                  <i class="fab fa-twitter"></i>
                  </a>
                </article>
            </div>
            </footer>

            <!-- FOOTER -->


    </body>
      <!-- body -->

</html>
