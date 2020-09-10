<?php
    require '../inc/base.php';

    global $header_style;
    $file_name = str_replace( [ '/fr/', '/', '.php'], '', $_SERVER['PHP_SELF']);
    $target = isset( $_GET['target'] ) ? $_GET['target'] : '';

    $alt_url = $file_name . '.php';

    if ( $alt_url == 'index.php' ) {
        $alt_url = '';
    }

    $classes = array(
        'body' => [ 'fr' ],
    );

    if ( $header_style == 'transparent' ) {
        $classes['body'][] = 'has-header-transparent';
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta property="og:image" content="/assets/images/fb-embed.jpg" />

    <title>Himark Island Office Pods - your in-office getaway</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

    <link rel="alternate" hreflang="en-us" href="<?php echo BASE_URL . $alt_url; ?>" />
    <link rel="alternate" hreflang="fr-fr" href="<?php echo BASE_URL; ?>fr/<?php echo $alt_url; ?>" />

    <style>
        .sr-element:not(.accordion-item),
        .sr-element.fade-up:not(.accordion-item) {
            visibility: hidden;
            overflow: hidden;
        }

        @media screen and (max-width: 1023px) {
            .sr-element.sr-no-mobile {
                visibility: visible;
            }
        }

        img:not([src]) {
            visibility: hidden;
        }

        /* Fixes Firefox anomaly during image load */
        @-moz-document url-prefix() {
            img:-moz-loading {
                visibility: hidden;
            }
        }
    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700|Nunito+Sans:300,400,600,700|Lato:300,400,700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="<?php echo BASE_URL; ?>assets/css/theme.css?ver=1.1.0" rel="stylesheet">

    <?php require '../partials/head-snippets.php'; ?>
    <?php require '../partials/paths.php'; ?>
</head>

<body class="<?php echo implode(' ', $classes['body'] ); ?>">
    <div class="preloader">
        <video preload="auto" playsinline autoplay muted loop>
            <source src="../assets/anim/island-logo-animation.mp4" type="video/mp4">
        </video>
    </div>

    <script>
        // handle preloader
        if (!localStorage.getItem('isFirstVisit')) {
            localStorage.setItem('isFirstVisit', false);

            setTimeout(function () {
                let $preloader = $('.preloader');
                $preloader.fadeOut(400, function () {
                    $preloader.remove();
                });
            }, 6000);
        } else {
            document.querySelector('.preloader').style.display = 'none';
        }
    </script>

    <div class="page-wrapper">
        <!-- Header -->
        <header>
            <div class="container">
                <div class="header flex v_center space-between">
                    <div class="hamburger hidden-desktop">
                        <a href="#menu-open" class="menu-open">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 12H14V10.4H0V12ZM0 6.8H14V5.2H0V6.8ZM0 0V1.6H14V0H0Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="header__left">
                        <div class="flex v_center">
                            <div class="header__logo">
                                <a href="./">
                                    <svg width="101" height="55" viewBox="0 0 101 55" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.9734 11.2518H22.4037V25.3944H25.9734V11.2518Z" fill="currentColor" />
                                        <path d="M66.8373 22.4643V11.2518H63.2676V25.3938H80.444V22.4643H66.8373Z"
                                            fill="currentColor" />
                                        <path
                                            d="M27.0864 38.7515L30.1516 33.1765L33.259 38.7515H27.0864ZM28.1362 29.7813L20.5548 43.9239H24.3133L25.573 41.5595H34.7922L36.0933 43.9239H39.8945L32.0841 29.7813H28.1362Z"
                                            fill="currentColor" />
                                        <path
                                            d="M56.2111 39.3179L46.5524 29.7813H42.9827V43.9239H46.5524V34.3891L56.2111 43.9239H59.7808V29.7813H56.2111V39.3179Z"
                                            fill="currentColor" />
                                        <path
                                            d="M71.3306 41.0152H66.8373V32.6911H71.3306C75.5929 32.6911 76.7269 34.0651 76.7269 36.8535C76.7269 39.6419 75.5929 41.0152 71.3306 41.0152ZM71.9601 29.7813H63.2676V43.9239H71.9601C77.9234 43.9239 80.444 41.1569 80.444 36.8535C80.444 32.4083 77.9866 29.7813 71.9601 29.7813Z"
                                            fill="currentColor" />
                                        <path
                                            d="M52.1369 22.7198H37.4427C34.2345 22.7198 33.3376 22.3696 33.1457 21.1791H29.5203C29.7078 24.0592 31.2528 25.4611 36.4325 25.4611H53.1477C59.3933 25.4611 59.6768 22.8943 59.7177 21.0856C59.818 17.0019 57.1501 17.0209 45.3664 16.9054C36.3304 16.8071 33.4601 16.6326 33.4601 15.3099C33.4601 14.2397 34.0674 13.9092 37.4625 13.9092H52.3003C54.7231 13.9092 55.6819 14.3713 55.9468 15.351H59.5995C59.3135 12.7699 57.3959 11.1476 53.3105 11.1476H36.4523C31.1556 11.1476 29.8619 12.6448 29.8619 15.5422C29.8619 19.374 34.2481 19.4514 43.77 19.5687C54.0991 19.686 56.1399 19.8808 56.1399 21.2613C56.1399 22.4268 55.4516 22.7198 52.1369 22.7198Z"
                                            fill="currentColor" />
                                        <path
                                            d="M91.3654 50.2308V4.76979L97.4984 8.55573L97.5429 46.3651L91.3654 50.2308ZM3.45582 8.63613L9.63272 4.78468V50.232L3.50163 46.4461L3.45582 8.63613ZM13.1344 3.36905L87.8638 3.35476V51.6315L13.1344 51.647V3.36905ZM99.4476 5.81022L90.9823 0.531234C90.4301 0.184026 89.7889 0 89.1272 0H11.871C11.213 0 10.5736 0.182835 10.0208 0.528256L1.54933 5.81022C0.579994 6.41709 0 7.44383 0 8.55573V46.4461C0 47.558 0.579994 48.5847 1.55057 49.1916L10.0264 54.4771C10.5785 54.8195 11.2161 55 11.871 55H89.1272C89.7858 55 90.4252 54.8195 90.9773 54.4735L99.4457 49.1933C100.419 48.5859 101 47.5597 101 46.4461V8.55573C101 7.44204 100.419 6.41531 99.4476 5.81022Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>

                            <div class="header__menu">
                                <div class="mobile-btn hidden-desktop flex space-between">
                                    <a href="#menu-close" class="menu-close">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 1.2L10.8 0L6 4.8L1.2 0L0 1.2L4.8 6L0 10.8L1.2 12L6 7.2L10.8 12L12 10.8L7.2 6L12 1.2Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                    <ul>
                                        <li><a href="/" class="language-switcher switcher-en">EN</a></li>
                                        <li><a href="/fr" class="language-switcher switcher-fr active">FR</a></li>
                                    </ul>

                                </div>
                                <ul class="flex">
                                    <li><a class="nav-item-homage <?php echo ($file_name == 'index') ? 'active' : ''; ?>" href="./">ACCUEIL</a></li>
                                    <li><a class="nav-item-explore-islands <?php echo ($file_name == 'explore-islands' && $target != 'downloads') ? 'active' : ''; ?>" href="./explore-islands.php">Explorer</a></li>
                                    <li><a class="nav-item-design-center <?php echo ($file_name == 'design-center') ? 'active' : ''; ?>" href="./design-center.php">CENTRE DE CONCEPTION</a></li>
                                    <li><a class="nav-item-downloads <?php echo ($file_name == 'explore-islands' && $target == 'downloads') ? 'active' : ''; ?>" href="./explore-islands.php?target=downloads#downloads" class="">TÉLÉCHARGEMENTS</a></li>
                                    <li><a class="nav-item-custom-order <?php echo ($file_name == 'custom-order') ? 'active' : ''; ?>" href="./custom-order.php">Commande</a></li>
                                    <li><a class="nav-item-contact <?php echo ($file_name == 'contact') ? 'active' : ''; ?>" href="./contact.php">CONTACTER</a></li>
                                </ul>

                                <div class="mobile-cta hidden-desktop">
                                    <a href="tel:5144461416" class="btn">514-446-1416</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__right flex v_center hidden-mobile">
                        <div class="language-selector flex">
                            <a href="/" class="language-switcher switcher-en">EN</a>
                            <a href="/fr" class="language-switcher switcher-fr active">FR</a>
                        </div>
                        <div class="cta">
                            <a href="tel:5144461416">514-446-1416</a>
                        </div>
                    </div>
                    <div class="mobile-cta hidden-desktop">
                        <a href="./contact.php">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.2159 10.5989C13.2422 10.8011 13.1807 10.9768 13.0314 11.1262L11.2793 12.8663C11.2002 12.9541 11.097 13.0289 10.9697 13.0904C10.8423 13.1519 10.7172 13.1915 10.5943 13.209C10.5855 13.209 10.5591 13.2113 10.5152 13.2157C10.4713 13.22 10.4142 13.2223 10.344 13.2223C10.1771 13.2223 9.90697 13.1937 9.5337 13.1366C9.16044 13.0794 8.70376 12.9388 8.16367 12.7147C7.62344 12.4906 7.01087 12.1544 6.32584 11.7062C5.64081 11.2581 4.91183 10.6429 4.13895 9.86068C3.52416 9.25428 3.01476 8.67424 2.61076 8.12059C2.20675 7.5669 1.88179 7.05497 1.63588 6.58479C1.38994 6.11461 1.2055 5.68837 1.08254 5.30607C0.959585 4.92378 0.876149 4.59421 0.832236 4.31737C0.788322 4.04054 0.770757 3.82302 0.779539 3.66483C0.788322 3.50664 0.792713 3.41876 0.792713 3.40118C0.810279 3.27814 0.849801 3.15291 0.91128 3.02547C0.972759 2.89804 1.04741 2.79478 1.13524 2.71568L2.88739 0.962389C3.01035 0.839351 3.15087 0.777832 3.30896 0.777832C3.42313 0.777832 3.52414 0.810789 3.61196 0.876702C3.69979 0.942615 3.77444 1.02391 3.83592 1.12058L5.24555 3.79666C5.32459 3.93727 5.34655 4.09107 5.31142 4.25805C5.27629 4.42503 5.20163 4.56565 5.08746 4.6799L4.44193 5.32585C4.42436 5.34342 4.40899 5.37199 4.39582 5.41153C4.38265 5.45108 4.37606 5.48404 4.37606 5.5104C4.41119 5.69496 4.49023 5.90588 4.61319 6.14317C4.71858 6.35409 4.88106 6.61116 5.10063 6.91436C5.3202 7.21756 5.63199 7.56688 6.03599 7.96236C6.43121 8.36667 6.78252 8.68081 7.08992 8.90496C7.39725 9.12898 7.65423 9.29382 7.86062 9.39929C8.06701 9.50475 8.2251 9.56846 8.33487 9.59037L8.4995 9.62335C8.51706 9.62335 8.54567 9.61674 8.58515 9.60357C8.62467 9.59037 8.65322 9.57501 8.6708 9.55741L9.4217 8.79282C9.57988 8.65223 9.76423 8.58192 9.97504 8.58192C10.1244 8.58192 10.2429 8.60826 10.3307 8.66101H10.3439L12.8864 10.1638C13.0709 10.2782 13.1807 10.4231 13.2159 10.5989Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>