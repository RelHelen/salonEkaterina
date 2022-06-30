<!-- service   -->
<section id="service" class="akame-service-area  ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Оформить заказ</h2>
                    <p>Выберите услугу</p>
                </div>
            </div>
        </div>

    </div>
    <article id=" " class=" single--service--item d-flex flex-wrap align-items-center ">
        <div class="container">
            <form action="" id="orderForm" class="orderForm">

                <div class="services-card__single">
                    <div class="services-card__h2">
                        <select class="select-vid">
                            <option value="Выбрать">Выбрать</option>
                            <?php foreach ($vidServices as $vid) : ?>
                                <option data-nomer="<?= $vid['ID_U'] ?>" data-text="<?= $vid['VID_U'] ?>" value="<?= $vid['ID_U'] ?>"><?= $vid['VID_U'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

            </form>
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