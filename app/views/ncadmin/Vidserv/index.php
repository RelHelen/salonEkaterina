<section class="content-header">
    <div class="container">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
            </li>
            <li class="breadcrumb-item" class="active">Список услуг</li>
        </ol>
    </div>
</section>
<!-- Main content -->
<section class="card">
    <div class="container">
        <div class="card-header">
            <h4 class="card-title">Поиск</h4>
        </div>
        <!-- filter -->
        <?php include_once('filter.php'); ?>
        <!-- /filter -->
        <div class="card-header">
            <h3 class="card-title">Список видов услуг</h3>
        </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-hover__row">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <!-- <th>Номер заказа</th> -->
                                        <th>Наименование вида</th>
                                        <th>Фото</th>

                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($services as $item) :   ?>

                                        <tr class="" data-id="<?= $item['ID_U']; ?>">
                                            <td><?= $i; ?></td>
                                            <td><?= $item['VID_U']; ?></td>

                                            <td>

                                                <img style="width: 100px;" src="<?= PATH ?>/img/services/<?= $item['FOTO']; ?>" alt="">
                                                <!-- <?= $item['FOTO']; ?> -->
                                            </td>

                                            <td>
                                                <a href="<?= ADMIN; ?>/vidserv/view?id=<?= $item['ID_U']; ?>"><i class="fa fa-fw fa-eye text-primary mr-2"></i></a>

                                                <a href="<?= ADMIN; ?>/vidserv/change?id=<?= $item['ID_U']; ?>"><i class="fa fa-pencil text-success mr-2"></i></a>

                                                <a class="delete" href="<?= ADMIN; ?>/vidserv/delete?id=<?= $item['ID_U']; ?>"><i class="fa fa-window-close text-danger"></i></a>
                                            </td>
                                        </tr>

                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <p>(<?= count($services); ?> вид(ов) из <?= $count; ?>)</p>
                            <?php if ($pagination->countPages > 1) : ?>
                                <?= $pagination; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->