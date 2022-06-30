 <section class="content-header">
     <div class="container">
         <ol class="breadcrumb ">
             <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
             </li>
             <li class="breadcrumb-item" class="active">Список клиентов</li>
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
             <h3 class="card-title">Список клиентов</h3>
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
                                         <th>Почта</th>
                                         <th>Действие</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $i = 1;
                                        foreach ($contracts as $contract) :  ?>

                                         <tr class="" data-id="<?= $contract['ID']; ?>">
                                             <td><?= $i; ?></td>
                                             <td><?= $contract['FIO']; ?></td>

                                             <td><?= $contract['PHONE']; ?></td>

                                             <td><?= $contract['mail']; ?> </td>

                                             <td>
                                                 <a href="<?= ADMIN; ?>/customer/view?id=<?= $contract['ID']; ?>"><i class="fa fa-fw fa-eye text-primary mr-2"></i></a>

                                                 <a href="<?= ADMIN; ?>/customer/change?id=<?= $contract['ID']; ?>"><i class="fa fa-pencil text-success mr-2"></i></a>

                                                 <a class="delete" href="<?= ADMIN; ?>/customer/delete?id=<?= $contract['ID']; ?>"><i class="fa fa-window-close text-danger"></i></a>
                                             </td>
                                         </tr>

                                     <?php $i++;
                                        endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="d-flex flex-column align-items-center">
                             <p>(<?= count($contracts); ?> клиент(ов) из <?= $count; ?>)</p>
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