<?php
    $header_style = 'transparent';
?>
<!-- Header -->
<?php include 'partials/header.php'; ?>

<!-- Hero -->
<section class="hero hero--inner-page hero--design-center">
    <div class="hero__inner">
        <div class="container">
            <div class="hero-content">
                <div class="hero-content__inner">
                    <div class="content-wrapper">
                        <div class="visible-mobile img-wrapper">
                            <img src="assets/images/design-center-hero-fg.jpg" alt="">
                        </div>

                        <h1 class="h1 sr-element fade-up" data-delay="150">Countless ways<br>to customize</h1>

                        <div class="content-box sr-element fade-up" data-delay="300">
                            <p class="copy copy--has-dot">Clients want their interior design to match their organization’s brand — why should privacy booths be an exception?</p>
                            <p class="copy copy--has-dot visible-mobile">With Island, three standard frame colours are offered with a textured fine flat finish, that remains finger-print proof. Get exceptionally creative with interior fabrics, with our 24 standard panel colours.</p>
                            <p class="copy copy--has-dot visible-mobile">Want to customize even further? A limitless array of personalized options are available, from frame colours, panels colours and fabrics, to carpets. Book a call with your representative to begin building your ideal Island today.</p>
                        </div>

                        <div class="btn-wrap sr-element fade-up" data-delay="350">
                            <a href="#design-center" class="btn-scroll btn-scroll--orange scroll-bottom">
                                <svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 2.5L20.4545 5V0L25 2.5Z" fill="currentColor" />
                                    <path d="M0 1.77831H20.4545V3.22169H0V1.77831Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Ends Here -->

<!-- Content Blocks -->
<section class="content-blocks" id="content-blocks">
    <div class="container">
        <div class="flex content-wrapper">
            <div class="content-block sr-element fade-up" data-delay="250">
                <p class="copy copy--black">With Island, three standard frame colours are offered with a textured fine flat finish, that remains finger-print proof. Get exceptionally creative with interior fabrics, with our 24 standard panel colours.</p>
            </div>

            <div class="content-block sr-element fade-up" data-delay="350">
                <p class="copy copy--black">Want to customize even further? A limitless array of personalized options are available, from frame colours, panels colours and fabrics, to carpets. Book a call with your representative to begin building your ideal Island today.</p>
            </div>
        </div>
    </div>
</section>

<!-- Separator -->
<div class="separator m-0">
    <div class="icon">
        <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                d="M25.6954 0.251056L30.6702 3.08073C31.1611 3.3612 31.4419 3.82684 31.4419 4.31841V24.683C31.4419 25.1734 31.1607 25.6382 30.6692 25.9188L25.6837 28.7572C25.4074 28.9154 25.0842 29 24.7488 29H7.13548C6.80165 29 6.47757 28.9158 6.19989 28.7591L1.21156 25.917C0.72211 25.6369 0.441895 25.1731 0.441895 24.683V4.31841C0.441895 3.82713 0.721968 3.36239 1.20905 3.08294L6.19866 0.244122C6.47543 0.085023 6.79915 0 7.13548 0H24.7488C25.0885 0 25.4135 0.0862396 25.6954 0.251056ZM1.91408 24.8133L6.11131 27.2045V1.7969L1.91408 4.18711V24.8133ZM7.58296 27.75H24.2992V1.24957H7.58296V27.75ZM25.7709 27.2045L29.9702 24.8134V4.18661L25.7709 1.79698V27.2045Z"
                fill="#5F5F5F"></path>
        </svg>
    </div>
</div>

<?php
    $customizer = array(
        'frames' => array(
            'black' => array(
                'label' => 'Black Onyx',
                'color' => '#000000',
            ),
            'silver' => array(
                'label' => 'Slate Grey',
                'color' => '#cccccc',
            ),
            'white' => array(
                'label' => 'Arctic White',
                'color' => '#ffffff',
            ),
        ),
        'panels' => array(
            'ambience' => array(
                'label' => 'Ambience',
                'color' => '#d2c6a7',
            ),
            'baffle' => array(
                'label' => 'Baffle',
                'color' => '#53724c',
            ),
            'chant' => array(
                'label' => 'Chant',
                'color' => '#8f0e28',
            ),
            'cloud' => array(
                'label' => 'Cloud',
                'color' => '#4e5761',
            ),
            'dim' => array(
                'label' => 'Dim',
                'color' => '#dcdac5',
            ),
            'hush' => array(
                'label' => 'Hush',
                'color' => '#c3b99c',
            ),
            'lull' => array(
                'label' => 'Lull',
                'color' => '#4f595c',
            ),
            'mellow' => array(
                'label' => 'Mellow',
                'color' => '#df5726',
            ),
            'muffle' => array(
                'label' => 'Muffle',
                'color' => '#4d3b27',
            ),
            'mum' => array(
                'label' => 'Mum',
                'color' => '#6b265d',
            ),
            'mute' => array(
                'label' => 'Mute',
                'color' => '#898272',
            ),
            'mystery' => array(
                'label' => 'Mystery',
                'color' => '#4c2471',
            ),
            'peep' => array(
                'label' => 'Peep',
                'color' => '#edc013',
            ),
            'placid' => array(
                'label' => 'Placid',
                'color' => '#02779b',
            ),
            'quiet' => array(
                'label' => 'Quiet',
                'color' => '#89908b',
            ),
            'reserve' => array(
                'label' => 'Reserve',
                'color' => '#999e3e',
            ),
            'secret' => array(
                'label' => 'Secret',
                'color' => '#0b4f97',
            ),
            'serenity' => array(
                'label' => 'Serenity',
                'color' => '#5d5f5f',
            ),
            'shadow' => array(
                'label' => 'Shadow',
                'color' => '#020203',
            ),
            'silence' => array(
                'label' => 'Silence',
                'color' => '#d0d2bf',
            ),
            'spirit' => array(
                'label' => 'Spirit',
                'color' => '#e9e9e3',
            ),
            'stillness' => array(
                'label' => 'Stillness',
                'color' => '#9fa8a6',
            ),
            'tranquility' => array(
                'label' => 'Tranquility',
                'color' => '#c9cbc8',
            ),
            'zen' => array(
                'label' => 'Zen',
                'color' => '#a09d90',
            ),
        )
    )
?>

<!-- Design Center -->
<section id="design-center" class="design-center">
    <div class="container">
        <div class="top-text">
            <h2 class="section-title section-title--black sr-element fade-up" data-delay="150">Design center</h2>
        </div>

        <div class="design-center__inner">
            <div class="showcase">
                <div class="img-wrapper sr-element fade-up" data-delay="250">
                    <img src="assets/images/renders/private-island/black/black-ambience.png" alt="Showcase Image" class="js-customizer-image">
                </div>

                <div class="btn-wrapper hidden-mobile sr-element fade-up" data-delay="250">
                    <a href="" class="btn--cta btn--cta--grey btn--cta--has-border js-download-configuration" download>
                        Download Configuration
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.37651 10.6849V13.5889H8.76751C9.04751 13.5889 9.28351 13.5599 9.47551 13.4999C10.0355 13.3309 10.3075 12.9029 10.3075 12.1299C10.3075 11.4009 10.0355 10.9499 9.48251 10.7739C9.30551 10.7149 9.08451 10.6859 8.82651 10.6859L8.37651 10.6849Z" fill="#F48D6C"/>
                            <path d="M17.6415 8.05688H17.4915V4.73588C17.4915 4.63588 17.4505 4.53988 17.3775 4.46988L12.7525 0.0988779C12.6855 0.0358779 12.5955 -0.00012207 12.5025 -0.00012207H2.98051C2.10751 -0.00012207 1.39751 0.709878 1.39751 1.58288V8.05688H0.907512C0.405512 8.05688 -0.000488281 8.46388 -0.000488281 8.96488V15.2069C-0.000488281 15.7079 0.405512 16.1149 0.907512 16.1149H1.39751V19.1879C1.39751 20.0609 2.10751 20.7709 2.98051 20.7709H15.9085C16.7815 20.7709 17.4915 20.0609 17.4915 19.1879V16.1149H17.6415C18.1425 16.1149 18.5495 15.7089 18.5495 15.2069V8.96488C18.5495 8.46388 18.1435 8.05688 17.6415 8.05688ZM12.8675 1.21188L16.2085 4.36888H13.7205C13.2505 4.36888 12.8675 3.98588 12.8675 3.51588V1.21188ZM2.12751 1.58288C2.12751 1.11288 2.51051 0.729878 2.98051 0.729878H12.1375V3.51688C12.1375 4.38988 12.8475 5.09988 13.7205 5.09988H16.7615V8.05588H2.12751V1.58288ZM11.8845 12.1219C11.8845 13.0509 11.4495 13.9419 10.8165 14.3409C10.1905 14.7089 9.51251 14.7759 8.54651 14.7759H6.85151V9.50588H8.55351C8.79651 9.50588 9.06251 9.50588 9.32051 9.51288C10.8825 9.57288 11.8845 10.5089 11.8845 12.1219ZM1.29051 14.7759V9.50588H3.13251C3.33951 9.50588 3.52351 9.50588 3.69951 9.51288C4.88651 9.54988 5.55651 10.2349 5.55651 11.2739C5.55651 11.8409 5.33551 12.3499 4.93051 12.6449C4.51051 12.9689 3.95751 13.0279 3.19151 13.0279H2.83051V14.7749H1.29051V14.7759ZM16.7615 19.1889C16.7615 19.6589 16.3785 20.0419 15.9085 20.0419H2.98051C2.51051 20.0419 2.12751 19.6589 2.12751 19.1889V16.1159H16.7615V19.1889ZM16.9375 10.6999H14.7635V11.5179H16.7685V12.7119H14.7635V14.7749H13.2445V9.50488H16.9365L16.9375 10.6999Z" fill="#F48D6C"/>
                            <path d="M4.06851 11.2599C4.06851 10.8469 3.82551 10.6709 3.24351 10.6709H2.83051V11.8569H3.26551C3.77351 11.8569 4.06851 11.6949 4.06851 11.2599Z" fill="#F48D6C"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="design-cta js-customizer-options sr-element fade-up" data-delay="250">
                <div class="product-choice">
                    <div class="choice-group">
                        <input type="radio" name="type" value="private-island" id="private_island" data-label="Private Island" checked>
                        <label for="private_island">
                            <span class="icon-wrap">
                                <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 29.3597H23.2642V0H0V29.3597ZM1.88642 1.82812H21.3778V27.5327H1.88642V1.82812Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span>
                                <b>Private Island</b>
                                Capacity: 1
                            </span>
                        </label>
                    </div>

                    <div class="choice-group">
                        <input type="radio" name="type" value="island-4" id="island_4" data-label="Island 4">
                        <label for="island_4">
                            <span class="icon-wrap">
                                <svg width="33" height="29" viewBox="0 0 33 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M26.8827 0.251056L32.1785 3.08073C32.7011 3.3612 33 3.82684 33 4.31841V24.683C33 25.1734 32.7007 25.6382 32.1774 25.9188L26.8703 28.7572C26.5762 28.9154 26.2321 29 25.8751 29H7.12543C6.77006 29 6.42508 28.9158 6.12948 28.7591L0.819324 25.917C0.298294 25.6369 0 25.1731 0 24.683V4.31841C0 3.82713 0.298143 3.36239 0.816648 3.08294L6.12816 0.244122C6.4228 0.085023 6.7674 0 7.12543 0H25.8751C26.2367 0 26.5827 0.0862396 26.8827 0.251056ZM1.56716 24.8133L6.03518 27.2045V1.7969L1.56716 4.18711V24.8133ZM7.60178 27.75H25.3965V1.24957H7.60178V27.75ZM26.9631 27.2045L31.4334 24.8134V4.18661L26.9631 1.79698V27.2045Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span>
                                <b>Island 4</b>
                                Capacity: up to 4
                            </span>
                        </label>
                    </div>
                </div>

                <div class="color-swatches">
                    <div class="standard-frame">
                        <p class="copy copy--black">Standard frame colours:</p>

                        <ul class="color-swatches-list">
                            <?php
                                $count = 0;

                                foreach( $customizer['frames'] as $name => $frame ) :
                                    $count++;
                            ?>
                                <li>
                                    <input type="radio" name="frame" id="frame-<?php echo $count; ?>" value="<?php echo $name; ?>" class="swatch-input"<?php echo ($count == 1) ? ' checked="checked"' : ''; ?> data-label="<?php echo $frame['label']; ?>">
                                    <label for="frame-<?php echo $count; ?>" class="swatch-label" style="color: <?php echo $frame['color']; ?>;">
                                        <span style="background-image: url(assets/images/swatches/<?php echo $name; ?>.jpg);" data-tippy="<?php echo $frame['label']; ?>"></span>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="standard-interior">
                        <p class="copy copy--black">Standard interior panel colours:</p>

                        <ul class="color-swatches-list">
                            <?php
                                $count = 0;

                                foreach( $customizer['panels'] as $name => $panel ) :
                                    $count++;
                            ?>
                                <li>
                                    <input type="radio" name="panel" id="panel-<?php echo $count; ?>" value="<?php echo $name; ?>" class="swatch-input"<?php echo ($count == 1) ? ' checked="checked"' : ''; ?> data-label="<?php echo $panel['label']; ?>">
                                    <label for="panel-<?php echo $count; ?>" class="swatch-label" style="color: <?php echo $panel['color']; ?>;">
                                        <span style="background-image: url(assets/images/swatches/<?php echo $name; ?>.jpg);" data-tippy="<?php echo $panel['label']; ?>"></span>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="btn-wrapper visible-mobile">
                    <a href="" class="btn--cta btn--cta--grey btn--cta--has-border js-download-configuration" download>
                        Download Configuration
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.37651 10.6849V13.5889H8.76751C9.04751 13.5889 9.28351 13.5599 9.47551 13.4999C10.0355 13.3309 10.3075 12.9029 10.3075 12.1299C10.3075 11.4009 10.0355 10.9499 9.48251 10.7739C9.30551 10.7149 9.08451 10.6859 8.82651 10.6859L8.37651 10.6849Z" fill="#F48D6C"/>
                            <path d="M17.6415 8.05688H17.4915V4.73588C17.4915 4.63588 17.4505 4.53988 17.3775 4.46988L12.7525 0.0988779C12.6855 0.0358779 12.5955 -0.00012207 12.5025 -0.00012207H2.98051C2.10751 -0.00012207 1.39751 0.709878 1.39751 1.58288V8.05688H0.907512C0.405512 8.05688 -0.000488281 8.46388 -0.000488281 8.96488V15.2069C-0.000488281 15.7079 0.405512 16.1149 0.907512 16.1149H1.39751V19.1879C1.39751 20.0609 2.10751 20.7709 2.98051 20.7709H15.9085C16.7815 20.7709 17.4915 20.0609 17.4915 19.1879V16.1149H17.6415C18.1425 16.1149 18.5495 15.7089 18.5495 15.2069V8.96488C18.5495 8.46388 18.1435 8.05688 17.6415 8.05688ZM12.8675 1.21188L16.2085 4.36888H13.7205C13.2505 4.36888 12.8675 3.98588 12.8675 3.51588V1.21188ZM2.12751 1.58288C2.12751 1.11288 2.51051 0.729878 2.98051 0.729878H12.1375V3.51688C12.1375 4.38988 12.8475 5.09988 13.7205 5.09988H16.7615V8.05588H2.12751V1.58288ZM11.8845 12.1219C11.8845 13.0509 11.4495 13.9419 10.8165 14.3409C10.1905 14.7089 9.51251 14.7759 8.54651 14.7759H6.85151V9.50588H8.55351C8.79651 9.50588 9.06251 9.50588 9.32051 9.51288C10.8825 9.57288 11.8845 10.5089 11.8845 12.1219ZM1.29051 14.7759V9.50588H3.13251C3.33951 9.50588 3.52351 9.50588 3.69951 9.51288C4.88651 9.54988 5.55651 10.2349 5.55651 11.2739C5.55651 11.8409 5.33551 12.3499 4.93051 12.6449C4.51051 12.9689 3.95751 13.0279 3.19151 13.0279H2.83051V14.7749H1.29051V14.7759ZM16.7615 19.1889C16.7615 19.6589 16.3785 20.0419 15.9085 20.0419H2.98051C2.51051 20.0419 2.12751 19.6589 2.12751 19.1889V16.1159H16.7615V19.1889ZM16.9375 10.6999H14.7635V11.5179H16.7685V12.7119H14.7635V14.7749H13.2445V9.50488H16.9365L16.9375 10.6999Z" fill="#F48D6C"/>
                            <path d="M4.06851 11.2599C4.06851 10.8469 3.82551 10.6709 3.24351 10.6709H2.83051V11.8569H3.26551C3.77351 11.8569 4.06851 11.6949 4.06851 11.2599Z" fill="#F48D6C"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Separator -->
<div class="separator m-0">
    <div class="icon">
        <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                d="M25.6954 0.251056L30.6702 3.08073C31.1611 3.3612 31.4419 3.82684 31.4419 4.31841V24.683C31.4419 25.1734 31.1607 25.6382 30.6692 25.9188L25.6837 28.7572C25.4074 28.9154 25.0842 29 24.7488 29H7.13548C6.80165 29 6.47757 28.9158 6.19989 28.7591L1.21156 25.917C0.72211 25.6369 0.441895 25.1731 0.441895 24.683V4.31841C0.441895 3.82713 0.721968 3.36239 1.20905 3.08294L6.19866 0.244122C6.47543 0.085023 6.79915 0 7.13548 0H24.7488C25.0885 0 25.4135 0.0862396 25.6954 0.251056ZM1.91408 24.8133L6.11131 27.2045V1.7969L1.91408 4.18711V24.8133ZM7.58296 27.75H24.2992V1.24957H7.58296V27.75ZM25.7709 27.2045L29.9702 24.8134V4.18661L25.7709 1.79698V27.2045Z"
                fill="#5F5F5F"></path>
        </svg>
    </div>
</div>

<!-- Architect and Designers  -->
<section class="sustainability architect-designers" id="architect-designers">
    <div class="container">
        <div class="top-text">
            <h2 class="section-title section-title--black sr-element fade-up" data-delay="150">Architects & Designers
            </h2>
        </div>
        <div class="row">
            <div class="col-60">
                <div class="showcase sr-element fade-up" data-delay="350">
                    <img src="assets/images/architect.jpg" alt="Showcase image">
                </div>
            </div>
            <div class="col-40 content-box">
                <h3 class="sr-element fade-up" data-delay="250">Island is a one-way ticket to wowing clients.</h3>
                <p class="copy copy--black sr-element fade-up" data-delay="300">
                    We know interior designers and architects do their best work with creative freedom – that's why we designed Island with flexible options.
                    <br><br>
                    Our <span class="underline-text">Private Island</span> is perfect for one
                    individual,
                    while <span class="underline-text">Island</span> seats up to four. The
                    <span class="underline-text">Island</span> can be expanded and customized with ease, depending on
                    your aesthetic or technical requirements.
            </div>
        </div>

        <div class="row col-sm">
            <div class="col-60 content-box content-box--lg">
                <p class="copy copy--black sr-element fade-up hidden-mobile" data-delay="300">We can double its structure, add extenders, pick exterior
                    colours and interior fabrics – you choose.</p>
                <p class="copy copy--black sr-element fade-up hidden-mobile" data-delay="350">Call your Island representative for more
                    information
                    on the different configurations available.</p>
                <p class="copy copy--black sr-element fade-up visible-mobile" data-delay="350">We know interior designers and architects
                    do their best work with creative freedom – that's why we designed Island with flexible options.</p>

                <div class="showcase showcase--image-only visible-mobile sr-element fade-up" data-delay="400">
                    <img src="assets/images/architect-2.jpg" alt="Showcase image">
                </div>

                <p class="copy copy--black sr-element fade-up visible-mobile" data-delay="300">Call your Island representative
                    for more information on the different configurations available.</p>
                <div class="btn-wrap sr-element fade-up" data-delay="300">
                    <a href="./contact.php" class="btn--cta btn--cta--orange">get in touch <svg width="18" height="18"
                            viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.6212 6.20613C17.598 6.12534 17.5597 6.0474 17.506 5.97635C17.4662 5.92375 17.4205 5.87833 17.3704 5.84033C17.2351 5.67277 17.0802 5.5202 16.9077 5.38681L10.5439 0.467972C10.525 0.453348 10.5054 0.439742 10.4851 0.427121C9.56903 -0.142374 8.43086 -0.142374 7.51482 0.427121C7.49456 0.439707 7.47494 0.453348 7.45606 0.467972L1.09232 5.38681C0.40834 5.91549 0 6.74715 0 7.61153V15.188C3.51623e-05 16.7385 1.26169 18 2.81253 18H11.4609C11.8493 18 12.1641 17.6852 12.1641 17.2969C12.1641 16.9086 11.8493 16.5939 11.4609 16.5939H2.81253C2.03713 16.5939 1.40628 15.9632 1.40628 15.1879V7.61153C1.40628 7.17936 1.61047 6.76353 1.95242 6.49915L8.28505 1.60436C8.72894 1.34192 9.27107 1.34192 9.71496 1.60436L15.8506 6.34689L9.7178 10.9856C9.27198 11.2505 8.72644 11.2503 8.28079 10.9848L4.11279 7.86462C3.80196 7.63189 3.36127 7.69524 3.12853 8.00602C2.89579 8.3168 2.95912 8.75737 3.26995 8.99011L7.46464 12.1302C7.48085 12.1423 7.49759 12.1537 7.51475 12.1645C7.97281 12.4493 8.48635 12.5916 8.99993 12.5916C9.51348 12.5916 10.0271 12.4492 10.4851 12.1645C10.5033 12.1531 10.5209 12.141 10.538 12.1281L16.5922 7.54892C16.5932 7.56973 16.5937 7.59058 16.5937 7.6115V9.07185C16.5937 9.46011 16.9085 9.77486 17.2968 9.77486C17.6852 9.77486 17.9999 9.46015 17.9999 9.07185V7.6115C18 7.1152 17.8653 6.62969 17.6212 6.20613Z"
                                fill="white" />
                            <path
                                d="M17.7936 13.4712L15.7174 11.3991C15.3089 10.9907 14.6442 10.9907 14.2361 11.3987L12.1595 13.4712C11.8846 13.7455 11.8842 14.1906 12.1586 14.4654C12.433 14.7402 12.8781 14.7406 13.153 14.4663L14.2734 13.348V17.297C14.2734 17.6852 14.5882 18 14.9765 18C15.3649 18 15.6797 17.6853 15.6797 17.297V13.348L16.8001 14.4663C16.9374 14.6032 17.1171 14.6717 17.2969 14.6717C17.477 14.6717 17.6572 14.6029 17.7945 14.4654C18.0689 14.1906 18.0684 13.7455 17.7936 13.4712Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-40 hidden-mobile">
                <div class="showcase showcase--image-only hidden-mobile sr-element fade-up" data-delay="400">
                    <img src="assets/images/architect-2.jpg" alt="Showcase image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'partials/footer.php'; ?>