<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <title>Coffee website - Jupyter</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <div class="header__border"></div>

        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                CoffeeShop
            </a>

            <div class="nav__menu">
                <ul class="nav__list">

                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="ri-home-5-fill"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="ri-award-fill"></i>
                            <span>About</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#steps" class="nav__link">
                            <i class="ri-compass-3-fill"></i>
                            <span>Steps</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#testimonial" class="nav__link">
                            <i class="ri-message-3-fill"></i>
                            <span>Testimonial</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">
                        EXCEPTIONAL QUALITY
                    </h3>

                    <h1 class="home__title">
                        It's time for a <br>
                        good coffee

                        <img src="{{ asset('assets/images/home-coffee-title.png') }}" alt="home image">
                    </h1>

                    <p class="home__description">
                        Each select coffee bean reflects our comitment
                        to Peruvian coffee growers, who bring the best
                        select coffee to your table.
                    </p>

                    <a href="" class="button">
                        Get Started <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>

                <img src="{{ asset('assets/images/home-coffee.png') }}" alt="home image" class="home__img">
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="products">
            <div class="product__bg section">
                <div class="product__container container grid">
                    <div class="product__data">
                        <a href="#about" class="product__button">
                            Scroll Down <i class="ri-arrow-down-s-line"></i>
                        </a>

                        <p class="product__description">
                            We strive to form deep partnerships with farmers
                            from all over the world to create perspective
                            together and form healthy working relationships
                            built on trust and respect.
                        </p>
                    </div>

                    <div class="product__content">
                        <article class="product__card">
                            <img src="{{ asset('assets/images/product-coffee-1.png') }}" alt="Classic Coffee"
                                class="product__img">
                            <h3 class="product__name">Classic Coffee</h3>
                            <span class="product__price">$17.90</span>
                        </article>

                        <article class="product__card">
                            <img src="{{ asset('assets/images/product-coffee-2.png') }}" alt="Black coffee"
                                class="product__img">
                            <h3 class="product__name">Black coffee</h3>
                            <span class="product__price">$24.90</span>
                        </article>

                        <article class="product__card">
                            <img src="{{ asset('assets/images/product-coffee-3.png') }}" alt="Strong coffee"
                                class="product__img">
                            <h3 class="product__name">Strong coffee</h3>
                            <span class="product__price">$32.90</span>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about" id="about">
            <div class="about__bg section">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title">
                            Our History
                        </h2>

                        <p class="about__description">
                            We make and grow the best coffee in Peru, accompanying
                            families since 1930, with professional workers who
                            harvest, collect and select the coffee with quality
                            work, thus providing exquisite coffee to enjoy together
                            as a family.
                        </p>
                    </div>

                    <img src="{{ asset('assets/images/about-coffee.png') }}" alt="about coffee" class="about__img">
                </div>
            </div>
        </section>

        <!--==================== STEPS ====================-->
        <section class="steps" id="steps">
            <div class="steps__bg section">
                <h2 class="section__title">
                    Steps of manufacturing our products
                </h2>

                <div class="steps__container container">
                    <img src="{{ asset('assets/images/coffee-beans-bg.png') }}" alt="Steps image" class="steps__bg-img">

                    <div class="steps__content">
                        <img src="{{ asset('assets/images/steps-curve-line.svg') }}" alt="Steps image"
                            class="steps__border">

                        <div class="steps__card">
                            <div class="steps__circle">
                                <div class="steps__subcircle">
                                    01
                                </div>

                                <img src="{{ asset('assets/images/steps-green-coffee.png') }}" alt="Steps image"
                                    class="steps__img">
                            </div>

                            <p class="steps__description">
                                Harvest occurs annually when the coffee
                                beans reach maturity and are collected
                                for processing.
                            </p>
                        </div>

                        <div class="steps__card steps__card-move">
                            <div class="steps__circle">
                                <div class="steps__subcircle">
                                    02
                                </div>

                                <img src="{{ asset('assets/images/steps-coffee-beans.png') }}" alt="Steps image"
                                    class="steps__img">
                            </div>

                            <p class="steps__description">
                                The beans are dried using a wet or dry
                                technique, depending on the taste we want
                                to obtain.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__circle">
                                <div class="steps__subcircle">
                                    03
                                </div>

                                <img src="{{ asset('assets/images/steps-ground-coffee.png') }}" alt="Steps image"
                                    class="steps__img">
                            </div>

                            <p class="steps__description">
                                The coffee is roasted and acquires
                                its flavor by processing the grain
                                in ovens.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial" id="testimonial">
            <div class="testimonial__bg section">
                <div class="testimonial__container container grid">
                    <div class="testimonial__data">
                        <h2 class="section__title">
                            Coffee is the best drink in the
                            morning, it keeps you focused.
                        </h2>

                        <span class="testimonial__name">John Doe</span>
                    </div>

                    <img src="{{ asset('assets/images/testimonial-coffee.png') }}" alt="Testimonial Coffee"
                        class="testimonial__img">
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <img src="{{ asset('assets/images/coffee-beans-bg.png') }}" alt="footer image" class="footer__bg-img">

            <div class="footer__container container grid">
                <div class="footer__data grid">
                    <div>
                        <a href="#" class="footer__logo">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                            CoffeeShop
                        </a>

                        <h3 class="footer__title">
                            Sign up for our newsletter
                        </h3>
                    </div>

                    <form action="" class="footer__form grid">
                        <input type="email" placeholder="Enter e-mail address" class="footer__input">

                        <button class="button footer__button" type="submit">
                            Subscribe <i class="ri-arrow-right-s-line"></i>
                        </button>

                        <p class="footer__description">
                            We care about your data. Read our
                            <a href="#" class="footer__privacy">Privacy Policy</a>
                        </p>
                    </form>
                </div>

                <div class="footer__content grid">
                    <div class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-x-fill"></i>
                        </a>
                    </div>

                    <span class="footer__copy">
                        &#169; Copyright Jupyter. All rights reserved
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src=""></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
