<form id="filters-form" role="form">
    <div class="row filters justify-content-between" id="filters">
        <div class="col-md-3">
            <label class="font-weight-bold" for="fio">Виды услуг </label><br>


            <select id="vid" name="vid" class="form-control">
                <option value="">Показать все виды</option>
                <?php foreach ($services as $item) : ?>
                    <option value="<?= $item['ID_U'] ?> "><?= $item['VID_U'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</form>
<br>
<br>
<ul id="goods" class="col-md-12"></ul>