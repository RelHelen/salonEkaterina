<!-- service   -->
<section id="service" class="akame-service-area  ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Заказать услугу</h2>
                    <p>Шаг1 : Выберите услугу</p>
                </div>
            </div>
        </div>
    </div>

    <article id=" " class=" single--service--item d-flex flex-wrap align-items-center ">
        <form action="" id="order-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">

                        <?php if (!empty($grServices)) : ?>
                            <?php foreach ($grServices as $service) :    ?>
                                <div class="services-card__single">
                                    <div class="services-card__h2">
                                        <h2> <?= $service['VID_U'] ?></h2>
                                    </div>
                                    <?php if (!empty($service['GRUP'])) :  $k = 1; ?>
                                        <?php foreach ($service['GRUP'] as $grup) : ?>
                                            <div class="" id="accordion">
                                                <div class="card">
                                                    <div class="services-card__h4 card-header ">
                                                        <a class="card-link " data-toggle="collapse" href="#collapseOne<?= $k ?>">
                                                            <h4>
                                                                <?php
                                                                if (!empty($grup['NAME_GR'])) {
                                                                    echo $grup['NAME_GR'];
                                                                }; ?>

                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="collapseOne<?= $k ?>" class=" collapse show" data-parent="#accordion">
                                                        <div class="row card-body">
                                                            <?php foreach ($services as $serv) : if ($serv['ID_GR'] == $grup['ID_GR']) :
                                                            ?><div class=" col-12 col-md-8 services-card__pr">
                                                                        <p>
                                                                            <input class="booking" type="checkbox" data-id="<?= $serv['ID'] ?>" data-text="<?= $serv['USLUGA'] ?>" data-price="<?= $serv['CENA'] ?>" value="<?= $serv['ID'] ?>">
                                                                            <?php
                                                                            if (!empty($serv['USLUGA'])) {
                                                                                echo $serv['USLUGA'];
                                                                            }; ?>

                                                                        </p>
                                                                    </div>
                                                                    <div class="col-12 col-md-4">
                                                                        <?php
                                                                        if (!empty($serv['CENA'])) {
                                                                            echo $serv['CENA'];
                                                                        }; ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php $k++;
                                        endforeach; ?>
                                    <?php endif; ?>

                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                    <div class="col-12 col-md-4 layaut-fixed ">
                        <h4>Ваш заказ</h4>
                        <ul id="order-det">

                        </ul>
                        <p class="prices-order-total">
                            <span> Итого:</span>
                            <span id="order-total"></span>
                        </p>
                        <a type="reset" id="reset_bronorder" href="" class="btn   btn-order" data-animation="fadeInUp" data-delay="200ms">Отменить</a>

                        <a type="submit" id="bronorder" href="bronorder" class="btn   btn-order" data-animation="fadeInUp" data-delay="200ms">Продолжить</a>

                    </div>
                </div>


            </div>
        </form>
    </article>
</section>
<!-- /service  -->