 <?php
    if (!empty($dalies)) :

        $i = 0; ?>
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


                         <?php foreach ($dalies as $list) : $i++ ?>
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

                                 <!-- <td>
                                     <a href="<?= ADMIN; ?>/booking/changedev?id=<?= $list['ID_U']; ?>"><i class="fa fa-pencil text-success mr-3"></i></a>

                                     <a class="delete" href="<?= ADMIN; ?>/booking/deletedev?id=<?= $list['ID_U']; ?>"><i class="fa fa-window-close text-danger"></i></a>
                                 </td> -->
                             </tr>
                         <?php endforeach; ?>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 <?php endif; ?>