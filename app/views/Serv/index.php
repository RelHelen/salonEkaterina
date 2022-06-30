<!-- service   -->
<section id="service" class="akame-service-area  ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Наши услуги</h2>

                </div>
            </div>
        </div>
        <!--
        <div class="row">
             
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <img src="img/core-img/s1.png" alt="">
                    <h5>Coloring</h5>
                    <p>Ut enim ad minim veniam, quis trud exercitation...</p>
                </div>
            </div>

             
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                    <img src="img/core-img/s3.png" alt="">
                    <h5>Haircut</h5>
                    <p>Consectetur adipisicing elit, sed doe eiusmod.</p>
                </div>
            </div>

             
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                    <img src="img/core-img/s4.png" alt="">
                    <h5>Hairstyle</h5>
                    <p>Nemo enim ipsam voluptatem quia voluptas</p>
                </div>
            </div>

            
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="800ms">
                    <img src="img/core-img/s3.png" alt="">
                    <h5>Coloring</h5>
                    <p>Ut enim ad minim veniam, quis trud exercitation...</p>
                </div>
            </div>

        </div>
-->
    </div>
    <article id=" " class=" single--service--item d-flex flex-wrap align-items-center ">
        <div class="container">

            <?php if (!empty($services)) : ?>
                <?php foreach ($services as $service) :    ?>
                    <div class="services-card__single">
                        <div class="services-card__h2">
                            <h2><?= $service['VID_U'] ?></h2>
                        </div>

                        <div class="row">
                            <?php if (!empty($service['GRUP'])) :  ?>
                                <?php foreach ($service['GRUP'] as $grup) : ?>
                                    <div class="col-12 col-md-3 services-card-s">
                                        <div class="services-card__table-s">
                                            <div class="services-card__img-s">
                                                <img src="img/services/<?php
                                                                        if (!empty($grup['FOTO'])) {
                                                                            echo $grup['FOTO'];
                                                                        }; ?>" alt="">
                                            </div>
                                            <div class="services-card__text-s">

                                                <div class="services-card__h4">
                                                    <h4>
                                                        <?php
                                                        if (!empty($grup['NAME_GR'])) {
                                                            echo $grup['NAME_GR'];
                                                        }; ?>

                                                    </h4>
                                                </div>
                                                <div class="services-card__decs">
                                                    <p>
                                                        <?php
                                                        if (!empty($grup['DESC'])) {
                                                            echo $grup['DESC'];
                                                        }; ?>

                                                    </p>
                                                </div>
                                                <div class="services-card__pr">
                                                    <p><a href="">Цена услуги от
                                                            <?php
                                                            if (!empty($grup['CENA_GR'])) {
                                                                echo $grup['CENA_GR'];
                                                            }; ?>
                                                            <i class="arrow_carrot-right">
                                                            </i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </article>
</section>
<!-- /service  -->

<section id="bron" class="akame-service-area section-padding-80-0 bron-section">
    <div class="container h-100">
        <div class="row">
            <div class="col-12 ">
                <div class="bron__section-heading h-100">
                    <h3>Быстрая запись на консультации и процедуры</h3>
                    <p>Позвоните или напишите нам.<br>
                        Наши операторы проведут первичную консультацию по услугам и запишут вас к специалистам</p>
                    <div class="bron__section-btn">
                        <a href="#" class="btn akame-btn" data-animation="fadeInUp" data-delay="200ms">Позвонить</a>
                        <a href="#" class="btn akame-btn active" data-animation="fadeInUp" data-delay="200ms">Записаться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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