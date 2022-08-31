<section class="content-header">
    <div class="container">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
            </li>
            <li class="breadcrumb-item"><a href="<?= ADMIN; ?>/main">Список заказов</a></li>
            <li class="breadcrumb-item" class="active">Заказ</li>
        </ol>
    </div>
</section>
<!-- Main content -->
<section class="card">
    <div class="card-header">
        <div class="float-right">
            <a href="<?= ADMIN; ?>/booking/change?id=<?= $contract['ID_O']; ?>&status=2" class="btn btn-success btn-xs">Одобрить</a>
            <a href="<?= ADMIN; ?>/booking/change?id=<?= $contract['ID_O']; ?>&status=2" class="btn btn-grey btn-xs">Отменить</a>
            <a href="<?= ADMIN; ?>/booking/change?id=<?= $contract['ID_O']; ?>&status=1" class="btn btn-grey btn-xs">Изменить</a>
            <a href="<?= ADMIN; ?>/booking/delete?id=<?= $contract['ID_O']; ?>" class="btn btn-grey btn-xs delete">Удалить</a>
        </div>
        <h3>Заказ №
            <?php if (!empty($contract)) :
                echo $contract['num']; ?>

            <?php endif; ?>
        </h3>

    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($contract)) :  ?>
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">

                                    <tbody>
                                        <tr>
                                            <th>Клиент</th>
                                            <td><?= $contract['FIO']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Дата и время визита</th>
                                            <td><?= $contract['DATA_VISIT'];; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Сумма заказа</th>
                                            <td><?= $contract['COST']; ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Дата подачи заявки </th>
                                            <td><?= $contract['DATA_F']; ?></td>
                                        </tr>



                                        <tr>
                                            <th>Телефон</th>
                                            <td><?= $contract['PHONE']; ?> </td>
                                        </tr>

                                        <tr>
                                            <th>Статус</th>
                                            <td><?php
                                                if ($contract['status'] == 1) {
                                                    echo 'Новый';
                                                };
                                                if ($contract['status'] == 2) {
                                                    echo 'Обработан';
                                                };
                                                if ($contract['status'] == 3) {
                                                    echo 'Отменен';
                                                };
                                                if ($contract['status'] == 4) {
                                                    echo 'Исполнен';
                                                }; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Комментарий</th>
                                            <td><?= $contract['COMMENT'] ?></td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="float-right"> <a href="<?= ADMIN; ?>/booking/change?id=<?= $contract['ID_O']; ?>&status=2" class="btn btn-grey btn-xs">Добавить</a>
                        <a href="<?= ADMIN; ?>/booking/change?id=<?= $contract['ID_O']; ?>&status=1" class="btn btn-grey btn-xs">Изменить</a>
                        <a href="<?= ADMIN; ?>/booking/delete?id=<?= $contract['ID_O']; ?>" class="btn btn-grey btn-xs delete">Удалить</a>
                    </div>
                    <h3>Детали заказа</h3>
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>№</th>

                                            <th>Услуга</th>
                                            <th>Стоимость</th>
                                            <th>Комментарии </th>
                                            <th>Мастер </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($lists)) :

                                            $i = 0;

                                            foreach ($lists as $list) :
                                                $i++ ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <!-- <td><?= $list['ID']; ?></td> -->
                                                    <!-- <td><?= $list['ID_O']; ?></td> -->
                                                    <td><?= $list['USLUGA']; ?></td>
                                                    <td><?= $list['PRICE']; ?></td>

                                                    <td><?= $list['COMMENT']; ?></td>
                                                    <td>
                                                        <!-- <a class="btn btn-grey" href="<?= ADMIN; ?>/booking/changeper?id=<?= $list['ID_U']; ?>">Выбрать мастера</a> -->
                                                        <select id="sort" name="sort" class="form-control">


                                                            <option value="">Краснова Елена </option>
                                                            <option value=" "> Север Ольга </option>
                                                            <option value=" "> Казанцева Ирина </option>

                                                        </select>

                                                        <!-- <?php if (!empty($pergroup)) : ?>
                                                            <?php foreach ($pergroup as $per) : ?>

                                                            <?php endforeach; ?>
                                                        <?php endif; ?> -->
                                                    </td>

                                                    <td>
                                                        <a href="<?= ADMIN; ?>/booking/changedev?id=<?= $list['ID_U']; ?>"><i class="fa fa-pencil text-success mr-3"></i></a>

                                                        <a class="delete" href="<?= ADMIN; ?>/booking/deletedev?id=<?= $list['ID_U']; ?>"><i class="fa fa-window-close text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</section>
<!-- /.content -->