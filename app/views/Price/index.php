<!-- service   -->
<section id="service" class="akame-service-area  ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Цены</h2>
                    <p>Информацию по стоимости процедур уточняйте у администраторов по телефону, возможно изменение цен</p>
                </div>
            </div>
        </div>

    </div>
    <article id=" " class=" single--service--item d-flex flex-wrap align-items-center ">
        <div class="container">

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

                                        <div class="services-card__h4 card-header card-header-plus">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne<?= $k ?>">
                                                <h4>
                                                    <?php
                                                    if (!empty($grup['NAME_GR'])) {
                                                        echo $grup['NAME_GR'];
                                                    }; ?>

                                                </h4>
                                            </a>
                                        </div>
                                        <div id="collapseOne<?= $k ?>" class=" collapse " data-parent="#accordion">
                                            <div class="row card-body">
                                                <?php foreach ($services as $serv) :
                                                    //  debug($grup);


                                                    if ($serv['ID_GR'] == $grup['ID_GR']) :
                                                ?>
                                                        <div class=" col-12 col-md-8 services-card__pr">
                                                            <p>
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