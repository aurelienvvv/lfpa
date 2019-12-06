<?php
  // la liste des films 
  $scheduled_films = array(
    "JOKER" => array(
      "href"          => "./film-joker.html",
      "cover"         => "../img/...",
      "ratio"         => "900/505",
      "schedule_time" => "19h00"
    ),
    // ...
  );
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FILMS | LES FILMS DE PLEIN AIR</title>
    <link rel="stylesheet" href="./assets/css/main.min.css" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon" />
  </head>
  <body class="films">
    <!-- //////// -->
    <!-- HEADER -->
    <!-- //////// -->
    <header>
      <div class="wrapper-header">
        <a href="./index.html" class="logo-wrapper">
          <img src="./assets/img/logo.svg" alt="les films de plein air" />
        </a>
        <button type="button" aria-label="Accès au menu" class="mob-burger no-styled-button">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </button>
        <nav>
          <ul class="nav-list">
            <li>
              <a href="./films.html">
                <span class="text-nav">Films</span>
              </a>
            </li>
            <li>
              <a href="./actualites.html">
                <span class="text-nav">Actualités</span>
              </a>
            </li>
            <li>
              <a href="./infos.html">
                <span class="text-nav">Infos</span>
              </a>
            </li>
            <li>
              <a href="./tickets.html" class="btn"> <span class="icon-ticket"></span> tickets </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- //////// -->
    <!-- / HEADER -->
    <!-- //////// -->

    <div class="bk-heading-title -pop">
      <h1 class="title-wrapper uppercase like-h2 dark-blue-color">
        <span class="stroke-text-title">films</span>
      </h1>
      <div class="wrapper-descr dark-blue-color">
        <p class="descr">
          Sur 4 jours, 12 films d’auteur, pour tous les ages et tous les goûts.<br />
          <span class="bold">Faites votre choix et prenez vos tickets !</span>
        </p>
      </div>
    </div>

    <div class="loading">
      <main class="main-js-effect">
        <div data-scroll>
          <div class="frame-films"></div>
          <div class="content">
            <span class="title-similar-movie stroke-text-title day-films-title">Vendredi</span>

            <!-- boucle php  -->
            <?php
            // exemple php 
            foreach($scheduled_films as $film) {
              echo '<a href="' . $film['href'] . '" class="item -left">';
              // ...
              echo '    <div class="item__img item__img--t1" data-cover="' . $film['cover'] . '" data-ratio="' . $film['ratio'] . '"></div>';
              // ...
            }
            ?>
            <a href="./film-joker.html" class="item -left">
              <div class="item__img-wrap">
                <!-- exemple d'use case  -->
                <div class="item__img item__img--t1" data-cover="" data-ratio="" style="background-image: url(...);"></div>
              </div>
              <div class="item__caption">
                <h2 class="item__caption-title">19h</h2>
                <p class="item__caption-copy">
                  Joker
                </p>
              </div>
            </a>
            <!-- fin de boucle -->

            <a href="./film-no-country.html" class="item -right">
              <div class="item__img-wrap">
                <div class="item__img item__img--t1"></div>
              </div>
              <div class="item__caption">
                <h2 class="item__caption-title">21h</h2>
                <p class="item__caption-copy">
                  no country for old men
                </p>
              </div>
            </a>
            <span class="title-similar-movie stroke-text-title day-films-title">Samedi</span>
            <a href="./film-am-psycho.html" class="item -left">
              <div class="item__img-wrap">
                <div class="item__img item__img--t3"></div>
              </div>
              <div class="item__caption">
                <h2 class="item__caption-title">19h</h2>
                <p class="item__caption-copy">
                  american psycho
                </p>
              </div>
            </a>
            <a href="./film-only-lovers.html" class="item -right">
              <div class="item__img-wrap">
                <div class="item__img item__img--t1"></div>
              </div>
              <div class="item__caption">
                <h2 class="item__caption-title">22h</h2>
                <p class="item__caption-copy">
                  only lovers left alive
                </p>
              </div>
            </a>
            <span class="title-similar-movie stroke-text-title day-films-title">Dimanche</span>
            <a href="./film-swiss-army.html" class="item -left">
              <div class="item__img-wrap">
                <div class="item__img item__img--t2"></div>
              </div>
              <div class="item__caption">
                <h2 class="item__caption-title">19h</h2>
                <p class="item__caption-copy">
                  swiss army man
                </p>
              </div>
            </a>
            <a href="./film-tombeau.html" class="item -right">
              <div class="item__img-wrap">
                <div class="item__img item__img--t3"></div>
              </div>
              <div class="item__caption">
                <h2 class="item__caption-title">21h</h2>
                <p class="item__caption-copy">
                  le tombeau des lucioles
                </p>
              </div>
            </a>
          </div>
        </div>
      </main>
    </div>

    <!-- ////// -->
    <!-- FOOTER -->
    <!-- ////// -->

    <footer>
      <div class="bk-newsletter">
        <div class="svg-wrapper">
          <div class="cloud-nl">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="171.831" height="85.688" viewBox="0 0 171.831 85.688">
              <defs>
                <linearGradient id="linear-gradient-1" x1="-0.005" y1="0.919" x2="3.245" y2="-1.028" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0bf7d0" />
                  <stop offset="1" stop-color="#067c68" />
                </linearGradient>
              </defs>
              <path id="Tracé_46" data-name="Tracé 46" d="M1096.194,4206.654c-.982-5,9.524-8.885,22.119-11.267s13.1-9.017,28.428-11.219,23.6-33.271,46.9-33.17,31.61,16.48,47.216,14.948,20.648,3.658,19.463,10.536-23.019,15.538-41.288,18.276-38.1,3.236-49.789,7.886-24.578-2.145-32.037,4.009-20.786-3.854-26.988,1.817S1097.177,4211.66,1096.194,4206.654Z" transform="translate(-423.776 -4271.366) rotate(9)" fill="url(#linear-gradient-1)" />
            </svg>
          </div>
          <div class="three-nl">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="149.823" height="262.368" viewBox="0 0 149.823 262.368">
              <defs>
                <linearGradient id="linear-gradient-2" x1="0.472" y1="0.341" x2="0.652" y2="1.503" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0bf7d0" />
                  <stop offset="1" stop-color="#067c68" />
                </linearGradient>
              </defs>
              <g id="Groupe_4" data-name="Groupe 4" transform="translate(0 0.271)">
                <path
                  id="Tracé_31"
                  data-name="Tracé 31"
                  d="M431.12,281.985s-12.48-6.893-17.446-5.736-5.041,11.458,5.988,22.942,13.08,20.046,8.272,22.322-37.039.58-39.359,6.622-4.582,17.524,15.657,20.572,29.511.192,27.833,5.753-32.144,5.853-31.656,14.1,40.98,12.63,48.342,20.147-8.733,14.546-25.328,16.045-17.143,20.134,7.637,26.408,30.183,11.721,25.684,15.146-16.213,10.262,8.984,22.467,32.279,41.341,32.279,41.341,7.76-35.336,16.177-52.621,10.13-28.335,2.738-32.017,21.66-15.666,19.927-25.793-36.665-14.546-29.419-26.1,11.556-19.359-6.346-30.072,3.15-4.787-2.232-15.658-28.005-14.407-35.8-21.429S431.12,281.985,431.12,281.985Z"
                  transform="translate(-387.101 -276.118)"
                  fill="url(#linear-gradient-2)"
                />
                <path id="Tracé_32" data-name="Tracé 32" d="M510.234,425.473c-7.393-3.682,21.66-15.666,19.927-25.793s-36.665-14.546-29.419-26.1,11.556-19.359-6.346-30.072,3.15-4.787-2.232-15.658-28.005-14.407-35.8-21.429-31.93-24.438-31.93-24.438-12.48-6.893-17.446-5.736c40.416,29.972,62.231,76.235,77.074,120.53,9.332,27.851,9.466,76.57,8.278,108.909,2.369-10.021,8.562-34.651,15.159-48.2C515.912,440.206,517.625,429.155,510.234,425.473Z" transform="translate(-380.412 -276.118)" fill="#03ddd4" />
                <path id="Tracé_33" data-name="Tracé 33" d="M490.474,538.139s8.429-97.1-6.415-141.393-36.658-90.558-77.074-120.53" transform="translate(-380.412 -276.085)" fill="none" stroke="#07b296" stroke-miterlimit="10" stroke-width="1" />
              </g>
            </svg>
          </div>
          <div class="right-corner-nl">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="289.16" height="130.143" viewBox="0 0 289.16 130.143">
              <defs>
                <linearGradient id="linear-gradient-3" x1="0.056" y1="0.857" x2="1.212" y2="0.5" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0bf7d0" />
                  <stop offset="1" stop-color="#067c68" />
                </linearGradient>
              </defs>
              <path id="Tracé_45" data-name="Tracé 45" d="M491.026,4323.823c-5.826,2.109,289.075,0,289.075,0V4194.738s-51.4-3.944-89.453,33.159-57.393-12.563-84.181,26.216c-6.246,12.723-10.192,33.294-37.016,21.438S496.852,4321.714,491.026,4323.823Z" transform="translate(-490.941 -4194.617)" fill="url(#linear-gradient-3)" />
            </svg>
          </div>
          <div class="left-corner-nl">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="292.07" height="131.453" viewBox="0 0 292.07 131.453">
              <defs>
                <linearGradient id="linear-gradient-4" x1="0.944" y1="0.857" x2="-0.212" y2="0.5" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#0bf7d0" />
                  <stop offset="1" stop-color="#067c68" />
                </linearGradient>
              </defs>
              <path id="Tracé_44" data-name="Tracé 44" d="M782.925,4325.123c5.884,2.13-291.984,0-291.984,0V4194.74s51.92-3.983,90.353,33.493,57.971-12.69,85.028,26.48c6.309,12.852,10.295,33.63,37.388,21.654S777.041,4322.994,782.925,4325.123Z" transform="translate(-490.941 -4194.617)" fill="url(#linear-gradient-4)" />
            </svg>
          </div>

          <div class="top-left-nl">
            <svg xmlns="http://www.w3.org/2000/svg" width="162.297" height="200.402" viewBox="0 0 162.297 200.402">
              <path id="Tracé_43" data-name="Tracé 43" d="M3,18.6s17.057,2.78,21.9,37.342,26.7,6.722,41.763,51.707,44.486-2.619,57.656,60.747c3.395,12.721,12.769,12.621,23.806,21.992s5.934,8.132,11.609,14.051,7.246,6.915,3.6,12.764-9.632-4-27.753-9c-9.148-3.523-22.423,10.465-38.961,0s-16.053-6.554-56.1-6.639C12.213,200.791,3,178.194,3,178.194Z" transform="translate(-3 -18.598)" fill="#2fffb3" />
            </svg>
          </div>
        </div>
        <ul class="wrapper-icons no-styled-list">
          <li>
            <a href="#">
              <span class="icon-facebook"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon-instagram"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon-twitter"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon-youtube"></span>
            </a>
          </li>
        </ul>
        <p class="uppercase z-i1 like-h2">newsletter</p>
        <form class="wrapper-input">
          <input placeholder="e-mail" aria-label="Entrez votre adresse email pour la newsletter" id="nl" type="text" />
          <label class="sr-only sr-only-focusable" for="nl">Entrez votre adresse mail pour recevoir la newsletter</label>
          <input type="submit" value="OK" />
        </form>
      </div>
      <div class="nav-footer">
        <a href="./index.html" class="logo-wrapper">
          <img src="./assets/img/logo.svg" alt="les films de plein air" />
        </a>
        <a href="./tickets.html" class="btn"> <span class="icon-ticket"></span>tickets </a>
        <nav>
          <ul class="list-nav">
            <li>
              <a href="./films.html">
                <span>Films</span>
              </a>
            </li>
            <li>
              <a href="./actualites.html"><span>Actualités</span></a>
            </li>
            <li>
              <a href="./infos.html"><span>Infos</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="bottom-footer">
        <a href="#"><span>Charte de confidentialité</span></a>
      </div>
    </footer>
    <!-- //////// -->
    <!-- / FOOTER -->
    <!-- //////// -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="./assets/js/TweenMax.min.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/bk-films-wrapper.js"></script>
    <script src="./assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/films-effect.js"></script>
  </body>
</html>
