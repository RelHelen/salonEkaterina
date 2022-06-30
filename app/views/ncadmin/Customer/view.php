<section class="content-header">

    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
        </li>
        <li class="breadcrumb-item"><a href="<?= ADMIN; ?>/customer">Список клиентов</a></li>
        <li class="breadcrumb-item" class="active">Клиент</li>
    </ol>
</section>
<!-- Main content -->
<section class="card">
    <div class="card-header">
        <!-- <?= $this->title; ?> -->
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($customer)) : ?>

                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">

                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Клиент</th>
                                            <th>Телефон</th>
                                            <th>Почта</th>
                                            <th>Логин</th>
                                            <th>Дата регистрации</th>

                                        </tr>
                                        <tr>
                                            <td><?= $customer['ID']; ?></td>
                                            <td><?= $customer['FIO']; ?></td>
                                            <td><?= $customer['PHONE']; ?></td>
                                            <td><?= $customer['mail']; ?></td>
                                            <td><?= $customer['login']; ?></td>
                                            <td><?= $customer['data_reg']; ?></td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>

                    <h3>Заказы</h3>
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Номер</th>
                                            <th>Дата обращения</th>
                                            <th>Дата визита</th>
                                            <th>Стоимость</th>
                                            <th>Комментарии</th>
                                            <th>Статус </th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($contracts as $contract) : $i++ ?>

                                            <tr class="contrcust" data-cust="<?= $customer['ID']; ?>" data-id="<?= $contract['ID_O'] ?>">
                                                <td><?= $i ?></td>
                                                <td><?= $contract['num']; ?></td>
                                                <td><?= $contract['DATA_F']; ?></td>
                                                <td><?= $contract['DATA_VISIT']; ?></td>
                                                <td><?= $contract['COST']; ?></td>
                                                <td><?= $contract['COMMENT']; ?></td>
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

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div id="a1"></div>

                <?php endif; ?>
            </div>
        </div>
</section>
<!-- /.content -->