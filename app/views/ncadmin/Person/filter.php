<form id="filters-form" role="form">
    <div class="row filters justify-content-between" id="filters">
        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">ФИО мастера</label><br>

            <input id="fio" type="text" name="brands[]" value="" class="form-control">
        </div>
        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">Специализация</label><br>

            <input id="fio" type="text" name="brands[]" value="" class="form-control">
        </div>

        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">Услуги </label><br>
            <select id="gr" name="gr" class="form-control">
                <option value="">Показать все группы</option>
                <?php foreach ($grservices as $item) : ?>
                    <option value="<?= $item['ID_GR'] ?> "><?= $item['NAME_GR'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>



        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">Описание</label><br>

            <input id="fio" type="text" name="brands[]" value="" class="form-control">
        </div>



    </div>
</form>
<br>
<br>
<ul id="goods" class="col-md-12"></ul>