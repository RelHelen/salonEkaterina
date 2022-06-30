<!-- service   -->
<section id="service" class="akame-service-area  ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Заказать услугу</h2>
                    <p><a href="">
                            Шаг1 : Выбор услуги &nbsp; |
                            &nbsp; &nbsp;</a>
                        Шаг2 : Выберите дату
                    </p>
                </div>
            </div>
        </div>
    </div>

    <article id=" " class=" single--service--item d-flex flex-wrap align-items-center ">
        <form action="" id="order-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7  mb-80 text-center">
                        <!-- calendar -->
                        <h4 class="text-center">Выберите дату</h4>
                        <div class="calendar-wrapper">
                            <button id="btnPrev" type="button">Предыдущий</button>
                            <button id="btnNext" type="button">Следующий</button>
                            <div id="divCal"></div>
                        </div>
                        <!-- modal -->


                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Выберите время </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div id="modaltime"></div>
                                        <table class="time">
                                            <?php $i = 10;

                                            for ($i; $i < 21; $i++) : ?>
                                                <tr>
                                                    <td class="" data-toggle="modal"><a href="#"><?= $i ?>:00 </a></td>
                                                </tr>
                                            <?php endfor; ?>
                                        </table>

                                        </script>
                                        <!-- <input type="time" name="cron" min="00" max="24" step="1"></p> -->
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn akame-btn " data-dismiss="modal">Выбрать</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /modal -->
                    </div>
                    <div class="col-12 col-md-5  ">
                        <!-- order -->
                        <h4>Ваши услуги</h4>
                        <ul class=" mt-40" id="order-det-2">

                        </ul>
                        <p class="prices-order-total-2">
                            <span> Итого:</span>
                            <span id="order-total-2"></span>
                        </p>
                        <!-- <p class="prices-order-total-2">
                            <span> Дата и время:</span>
                            <span id="order-total-2">25.06.2022 17:00</span>
                        </p> -->
                        <a type="submit" href="bronorder/view" class="btn   btn-order" data-animation="fadeInUp" data-delay="200ms">Продолжить</a>
                    </div>

                </div>
            </div>
        </form>
    </article>
</section>
<!-- /service  -->