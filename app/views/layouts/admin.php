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
                            <p><a href="<?= ADMIN ?>" class="text-white">
                                    <i class="fa fa-bars"></i>
                                    Панель администратора</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-6 text-center  " style="font-size: 18px;">
                        <!-- Logo -->
                        <a class="nav-brand text-white" href="<?= PATH ?> ">Салон «Екатерина»</a>
                    </div>
                    <div class="col-2">
                        <div class="top-header-content text-right text-white">
                            <i class="fa fa-user"></i>
                            <?php
                            // debug($_SESSION['user']);
                            echo $_SESSION['user']['login']; ?>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="top-header-content text-right text-white">
                            <a href="<?= ADMIN ?>user/logout" class="nav-link" role="button">
                                <p class="text-sm"><i class="fas fa-sign-out-alt mr-1"></i> Выйти</p>
                            </a>

                        </div>
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


                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span><span></span><span></span></span>
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
                                    <li><a href="<?= ADMIN ?>/main">Заказы</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">Просмотреть</a></li>
                                            <li><a href="./index.html">Добавить</a></li>
                                            <li><a href="./about.html">Редактировать</a></li>

                                            <!-- <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul> -->
                                    </li>
                                </ul>
                                </li>
                                <li><a href="<?= ADMIN ?>/customer">Клиенты</a>
                                    <ul class="dropdown">
                                        <li><a href="/customer/index">Просмотреть</a></li>
                                        <li><a href="/customer/view">Добавить</a></li>


                                </li>
                                </ul>
                                </li>

                                <li><a href="vidserv">Виды услуг</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= ADMIN ?>/vidserv/index">Просмотреть</a></li>
                                        <li><a href="<?= ADMIN ?>/vidserv/add">Добавить</a></li>



                                </li>
                                </ul>

                                </li>
                                <li><a href="grserv">Группы услуг</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">Просмотреть</a></li>
                                        <li><a href="./index.html">Добавить</a></li>
                                </li>
                                </ul>

                                </li>
                                <li><a href="serv">Услуги</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">Просмотреть</a></li>
                                        <li><a href="./index.html">Добавить</a></li>
                                </li>
                                </ul>

                                </li>
                                <li><a href="person">Мастера</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">Просмотреть</a></li>
                                        <li><a href="./index.html">Добавить</a></li>
                                </li>
                                </ul>
                                </li>
                                <li><a href="">Страницы</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">Просмотреть</a></li>
                                        <li><a href="./index.html">Добавить</a></li>
                                </li>
                                </ul>
                                </li>
                                </ul>
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
    <main class="main">

        <header class="header">
            <div class="container">
                <h2 class="main-header__h2">
                    <?php
                    echo  $this->title; //вывод заголовка
                    ?>
                </h2>
            </div>
        </header>
        <section>
            <?php
            //$this->getPart('header-section');
            //default_.php$this->getPart('navmain-section');

            ?>
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
        </section>

    </main>
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

                <!--   <div class="col-12   col-md-3">
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

                
                <div class="col-12 col-md-3 ">
                    <div class="single-footer-widget  ">

                         

                        <div class="h4 smt-header smt-header-underline-left">Контакты</div>

                        <div class="smt-footer-contact">
                            <ul class="list-unstyled">
                                <li> г. Ростов-на-Дону, ул. Согласия, 8</li>
                                <li><a href="tel:+73832214922">+7 (863) 123-45-76</a></li>
                                <li>Время работы: Пн-Вс, с 9.00 до 21.00</li>
                            </ul>
                            
                            <div class="social-info">
                                <a href="#"><i class="fa fa-vk"></i></a>
                                <a href="#"><i class="fa fa-telegram"></i></a>

                            </div>
                        </div>

                    </div>
                </div> -->

            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text text-small   mb-40">
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
        adminpath = '<?= ADMIN ?>'
    </script>
    <script src="<?= PATH ?>/assets/js/jquery.min.js"></script>

    <script src="<?= PATH ?>/assets/js/popper.min.js"></script>

    <script src="<?= PATH ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?= PATH ?>/assets/js/akame.bundle.js"></script>

    <script src="<?= PATH ?>/assets/js/default-assets/active.js"></script>

    <script src="<?= PATH ?>/script/main.js"></script>

    <?php
    foreach ($scripts as $script) {
        echo $script;
    }
    ?>
</body>

</html>