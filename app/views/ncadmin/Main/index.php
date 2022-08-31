 <section class="content-header">
     <div class="container">
         <ol class="breadcrumb ">
             <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
             </li>
             <li class="breadcrumb-item" class="active"><?php echo $this->titleAdmin; ?></li>
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
             <h3 class="card-title"><?php echo $this->titleAdmin; ?></h3>
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
                                         <th>Клиент</th>
                                         <th>Телефон</th>
                                         <th>Стоимость</th>
                                         <th>Дата и время записи</th>
                                         <th>Статус</th>
                                         <th>Дата заявки</th>
                                         <th>Действие</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $i = 1;
                                        foreach ($contracts as $contract) : ?>
                                         <?php

                                            if ($contract['status'] == 1) {
                                                $class = 'bg-new';
                                            };
                                            if ($contract['status'] == 2) {
                                                $class = 'bg-old ';
                                            };
                                            if ($contract['status'] == 3) {
                                                $class = 'bg-canchel ';
                                            };   ?>

                                         <tr class="<?= $class; ?>" data-id="<?= $contract['ID_O']; ?>">
                                             <td><?= $i; ?></td>
                                             <!-- <td><?= $contract['num']; ?></td> -->
                                             <td><?= $contract['FIO']; ?></td>

                                             <td><?= $contract['PHONE']; ?></td>

                                             <td><?= $contract['COST']; ?> </td>
                                             <td><?= $contract['DATA_VISIT']; ?></td>
                                             <td>

                                                 <?php
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
                                             <td><?= $contract['DATA_F']; ?></td>

                                             <td>
                                                 <a href="<?= ADMIN; ?>/booking/view?id=<?= $contract['ID_O']; ?>"><i class="fa fa-fw fa-eye text-primary mr-2"></i></a>

                                                 <a href="<?= ADMIN; ?>/booking/change?id=<?= $contract['ID_O']; ?>"><i class="fa fa-pencil text-success mr-2"></i></a>

                                                 <a class="delete" href="<?= ADMIN; ?>/booking/delete?id=<?= $contract['ID_O']; ?>"><i class="fa fa-window-close text-danger"></i></a>
                                             </td>
                                         </tr>

                                     <?php $i++;
                                        endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="d-flex flex-column align-items-center">
                             <p>(<?= count($contracts); ?> заказа(ов) из <?= $count; ?>)</p>
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