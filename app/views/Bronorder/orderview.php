<!-- service   -->
<section id="service" class="akame-service-area  ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Заказ услуги</h2>
                    <p><a href="<?=PATH?>/bronorder">
                    &lsaquo;  Шаг1 : Выбор услуги &nbsp; |
                            &nbsp; &nbsp;</a>
                        <a href="<?=PATH?>/bronorder/orderdate"> Шаг2 : Выберите дату &nbsp; |</a>
                        &nbsp; &nbsp;Шаг3 : Подвердите заявку
                    </p>
                </div>
            </div>
        </div>
    </div>

    <article id=" " class=" single--service--item d-flex flex-wrap align-items-center ">
        <form action="" id="order-form">
            <div class="container">
                <h3 class=" mb-80 ">Подвердите заявку: </h3>
                <div class="row">
                    <div class="col-12 col-md-5  mb-80  ">
                        <!-- order -->

                        <h5 class=" ">Ваши услуги</h5>                      
                        
                        <p class="mt-40 prices-order-date-2"> 
                            <strong>
                        <span> Дата и время:</span>
                            <span id="date-time"></span> </strong> 
                        </p>
                        <ul class=" mt-20 mb-40" id="order-det">

                        </ul>
                        <p class="prices-order-total">
                            <span> Стоимость услуг:</span>
                            <span id="order-total"></span>
                        </p>
                        <?php if(isset($_SESSION['user'])) : ?>

                        
                        <button id="ordeready" type="submit" class="btn  btn-order btn-3 mt-15  ">Подверждаю запись</button>
                         
                        <?php endif; ?>      
                      
                    </div>
                    <div class="col-12 col-md-1  "></div>
                    <div class="col-12 col-md-6  mb-80">
                       
                        <?php if(!isset($_SESSION['user'])) : ?>
                
                            <h5>Заполните ваши данные </h5>
                        <!-- Form -->
                        <form action="#" method="post" class="akame-contact-form border-0 p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Ваше имя">
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Ваш телефон">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Дополнительные пожелания"></textarea>
                                    <input type="checkbox" id="politics" onclick="check();" value="" autocomplete="off" /><span style="font-size: 12px">
                                        Нажимая на кнопку "Записаться", я даю <a href="ссылка на страницу согласия">согласие на обработку персональных данных.</a></span>
                                    <br>
                                    <span style="font-size: 14px; color: grey">
                                        У меня нет личного кабинета, <a href="" class="text-primary">Зарегестрироваться</a></span>
                                </div>
                                <div class="col-12 text-center">

                                <button id="ordeready" type="submit" class="btn  btn-order btn-3 mt-15  ">Записаться</button>
                                </div>                          
                        <?php endif; ?>                      
                             
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </form>
    </article>
</section>
<!-- /service  -->