<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta  -->
    <?php echo $this->getMeta(); ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">



    <link rel="stylesheet" href="<?= PATH ?>/css/style.css">
    <link rel="stylesheet" href="<?= PATH ?>/css/main.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]
    -->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <!-- Header Area Start -->
    <header class="header-area" id="navmenu">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-3">
                        <div class="top-header-content">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                г. Ростов-на-Дону, ул. Согласия, 8
                            </p>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="top-header-content text-center">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Часы работы: 9:00 - 20:00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Телефон: +7 (863) 123-45-76</p>
                        </div>
                    </div>
                    <div class="col-3  ">
                        <ul class="nav  text-white float-right">

                            <?php if (!empty($_SESSION['user'])) : ?>

                                <li class="dropdown">
                                    <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" role="button">
                                        <i class="fa  fa-user"></i>
                                        <?php
                                        echo hsc($_SESSION['user']['login']); ?>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?= PATH ?>/user/personal" class=" " role="button">
                                                <i class="fas fa-sign-out-alt mr-1"></i> Личный кабинет

                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= PATH ?>/user/booking" class=" " role="button">
                                                <i class="fas fa-sign-out-alt mr-1"></i>Заказы

                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= PATH ?>/user/logout" class=" " role="button">
                                                <i class="fas fa-sign-out-alt mr-1"></i> Выйти

                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            <?php else : ?>
                                <li class="">
                                    <a href="<?= PATH ?>/user/login" class="text-white" role="button">
                                        <i class="fa  fa-user"></i>
                                        Войти </a> /
                                </li>
                                <li class="">
                                    <a href="<?= PATH ?>/user/singup" class="text-white" role="button">

                                        Регистрация
                                    </a>
                                </li>
                            <?php endif  ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">
                        <!-- Logo -->
                        <a class="nav-brand" href="index.html">Екатерина</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="<?= PATH ?>/about" onclick="scrollPage('wrapperAbout')">О Нас</a></li>
                                    <!--
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">- Home</a></li>
                                            <li><a href="./about.html">- About Us</a></li>
                                            <li><a href="./service.html">- Services</a></li>
                                            <li><a href="./portfolio.html">- Portfolio</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Blog Details</a></li>
                                            <li><a href="./contact.html">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
-->
                                    <li><a href="<?= PATH ?>/serv" onclick="scrollPage('wrapperTours')">Услуги</a></li>
                                    <li><a href="<?= PATH ?>/price" onclick="scrollPage('wrapperPrice')">Прайс</a></li>
                                    <li><a href="<?= PATH ?>/person" onclick="scrollPage('wrapperPers')">Мастера</a></li>
                                    <!-- class="active" -->
                                    <li><a href="<?= PATH ?>/contact" onclick="scrollPage('wrapperContact')">Контакты</a></li>

                                </ul>


                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="<?= PATH ?>/bronorder" id="ctaBooking" class="btn akame-btn active">Записаться</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <!-- Welcome Area Start -->
    <main>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger alert-close">
                <?= $_SESSION['error'];
                unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success alert-close">
                <?= $_SESSION['success'];
                unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>
        <?= $content; ?>
    </main>
    <!-- Welcome Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-12   col-md-3">
                    <div class="single-footer-widget  ">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo">
                            «Екатерина» </a>
                    </div>
                </div>
                <div class="col-12   col-md-3">
                    <div class="single-footer-widget  ">
                        <div class=" ">
                            <div class="h4 smt-header smt-header-underline-left">Компания</div>
                            <ul class="smt-list smt-list_arrow smt-list_footer">
                                <li><a class="smt-list__link" href="/company/documents/">Документы</a></li>
                                <li><a class="smt-list__link" href="/company/promo/">Акции</a></li>
                                <li><a class="smt-list__link" href="/company/reviews/">Отзывы</a></li>

                                <li><a class="smt-list__link" href="/company/agreement/">Политика конфиденциальности</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12   col-md-3 ">
                    <div class="single-footer-widget  ">
                        <div class=" ">
                            <div class="h4 smt-header smt-header-underline-left">Информация</div>

                            <ul class="smt-list smt-list_arrow smt-list_footer">
                                <li><a class="smt-list__link" href="/company/documents/">Услуги</a></li>
                                <li><a class="smt-list__link" href="/company/promo/">Цены</a></li>
                                <li><a class="smt-list__link" href="/company/reviews/">Наши работы</a></li>

                            </ul>
                        </div>


                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-3 ">
                    <div class="single-footer-widget  ">

                        <!-- Widget Title -->

                        <div class="h4 smt-header smt-header-underline-left">Контакты</div>

                        <div class="smt-footer-contact">
                            <ul class="list-unstyled">
                                <li> г. Ростов-на-Дону, ул. Согласия, 8</li>
                                <li><a href="tel:+73832214922">+7 (863) 123-45-76</a></li>
                                <li>Время работы: Пн-Вс, с 9.00 до 21.00</li>
                            </ul>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="fa fa-vk"></i></a>
                                <a href="#"><i class="fa fa-telegram"></i></a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text text-small mt-40 mb-40">
                        <p>

                            2022г &copy; Косметический салон «Екатерина». Информация не является публичной офертой, определяемой положениями Статьи 437 (2)
                            Гражданского кодекса РФ. <br>Лицензия на медицинскую деятельность №ЛО-54-01-003338 от 11 июня 2015 года. </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <script>
        path = '<?= PATH ?>';
    </script>
    <script src="<?= PATH ?>/assets/js/jquery.min.js"></script>

    <script src="<?= PATH ?>/assets/js/popper.min.js"></script>

    <script src="<?= PATH ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?= PATH ?>/assets/js/akame.bundle.js"></script>

    <script src="<?= PATH ?>/assets/js/default-assets/active.js"></script>

    <script src="<?= PATH ?>/script/main.js"></script>
    <script src="<?= PATH ?>/script/order.js"></script>
    <?php
    foreach ($scripts as $script) {
        echo $script;
    }
    ?>
</body>

</html>